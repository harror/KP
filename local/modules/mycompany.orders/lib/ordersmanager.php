<?php
namespace MyCompany\ORDERS;
use Bitrix\Main\Application;
use Bitrix\Main\Entity;
use Bitrix\Main\Entity\Event;
use Bitrix\Main\Localization\Loc;
use Bitrix\Iblock\ElementTable;
use Bitrix\Main\UserTable;
Loc::loadMessages(__FILE__);
class OrdersManager {
    const IBLOCK_CODE_ORDERS = 'orders';
    const IBLOCK_CODE_DEPARTMENTS = 'departments';
    public static function GetORDERS(
        $arOrder = array('SORT' => 'ASC'),
        $arFilter = array(),
        $arGroupBy = false,
        $arNavStartParams = false,
        $arSelectFields = array('ID', 'NAME')
    ) {
        $elements = array();
        //Получаем ID инфоблока ORDERS по его символьному коду
        $rsIblock = \CIBlock::GetList(
            array(),
            array('CODE' => self::IBLOCK_CODE_ORDERS, 'SITE_ID' =>
                SITE_ID)
        );
        $arIblock = $rsIblock->GetNext();
        $arFilter['IBLOCK_ID'] = $arIblock['ID'];
        $rsElements = \CIBlockElement::GetList(
            $arOrder, //массив полей сортировки элементов и её направления
 $arFilter, //массив полей фильтра элементов и их значений
 $arGroupBy, //массив полей для группировки элементов
 $arNavStartParams, //параметры для постраничной навигации и ограничения количества выводимых элементов
 $arSelectFields //массив возвращаемых полей элементов
 );
 while($arElements = $rsElements->Fetch()) {
     //Получение информации о файле с регламентом расчетапоказателя: ссылка на файл на сервере, название файла и т.д.
 foreach($arElements['PROPERTY_REGULATIONS_VALUE'] as $key => $idFileRegulation) {
         $arElements['PROPERTY_REGULATIONS_VALUE'][$key] = \CFile::GetFileArray($idFileRegulation);
     }
 $elements[] = $arElements;
 }
 return $elements;
 }
    public static function GetOrdersEmployee($idEmployee) {
        if(!$idEmployee) {
            return array();
        }
        //Получаем список всех подразделений сотрудника
        $arDepartmentsUser = UserTable::getList(array(
            'select' => array(
                'UF_DEPARTMENT'
            ),
            'filter' => array(
                'ID' => $idEmployee
            )
        ))->fetch();
        //Получаем список всех  данных подразделений
        return self::GetORDERS(
            array('NAME' => 'asc'),
            array('PROPERTY_DEPARTMENT.ID' => $arDepartmentsUser),
            false,
            false,
            array('ID', 'NAME', 'PROPERTY_INDICATOR_TYPE',
                'PROPERTY_WEIGHT', 'PROPERTY_REGULATIONS')
        );
    }
    public static function SetOrdersEmployee($idEmployee, $period,
                                          $arOrdersValues) {
        if(!$idEmployee || !is_array($arOrdersValues) ||
            !count($arOrdersValues)) {
            return array();
        }
        global $USER;
        //Получаем объект подключения к БД
        $db = Application::getConnection();
        //Начинаем транзакцию
        $db->startTransaction();

        foreach($arOrdersValues as $Orders => $OrdersValue) {
            $arValue = array(
 'UF_VALUE' => $OrdersValue,
 'UF_ORDERS' => $Orders,
 'UF_EMPLOYEE' => $idEmployee,
 'UF_CREATED_BY' => $USER->GetID(),
 'UF_CREATED' => new
            \Bitrix\Main\Type\DateTime(date('d.m.Y') . ' 00:00:00'),
 'UF_PERIOD' => new
            \Bitrix\Main\Type\DateTime($period. ' 00:00:00')
 );
            $orders = self::GetOrdersEmployeeValue($Orders, $idEmployee, $period);
            if (isset($orders["ID"]))
            {
                $result = OrdersEmployeeTable::update($orders["ID"], $arValue);
            }
            else{
                $result = OrdersEmployeeTable::add($arValue);
            }
            if (!$result->isSuccess()) {
                $db->rollbackTransaction();
                return false;
            }
        }

        if ($result->isSuccess()) {
            $db->commitTransaction();
            return true;
        }
    }
    public static function GetOrdersEmployeeValue($idOrders, $idEmployee, $period)  {

        $rsResult = OrdersEmployeeTable::getList(array(
            'select' => array("ID", "UF_VALUE"),
            'filter' => array(
                'UF_ORDERS' => $idOrders,
                'UF_EMPLOYEE' => $idEmployee,
                'UF_PERIOD' => new \Bitrix\Main\Type\DateTime($period)
            )

        ));
        return $rsResult->fetch();

    }
}