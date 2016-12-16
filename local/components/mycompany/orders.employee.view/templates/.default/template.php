<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<? if ($arResult['OK']): ?>
    <? ShowMessage(array('TYPE' => 'OK', 'MESSAGE' =>
        $arResult['OK'])); ?>
<? endif; ?>
<? if ($arResult['ERROR']): ?>
    <? ShowMessage(array('TYPE' => 'ERROR', 'MESSAGE' =>

        $arResult['ERROR'])); ?>
<? endif; ?>
<div style="padding: 10px; width: 500px; margin: auto;">
    Количество проданных заказов из каждого отдела за период:
<form action="<?= POST_FORM_ACTION_URI ?>" method="POST" name="ordersform">
    <select name="UF_PERIOD" onchange="ordersform.submit();">
        <? foreach ($arResult['PERIOD_ITEMS'] as $arItem): ?>
            <option <?= $arItem['SELECTED']; ?>
                value="<?= $arItem['VALUE']; ?>"><?= $arItem['VALUE']; ?></option>
        <? endforeach; ?>
    </select>
    <table style="border-width: 0px; border-spacing: 10px;">
        <tbody>
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?// echo '<pre>'; print_r($arItem); echo '</pre>'; ?>
            <tr>
                <td><?= $arItem['NAME']; ?></td>
                <td><?=$arItem["ORDERS_ID_VALUE"]?></td>
                <td>
                    <? foreach ($arItem['PROPERTY_REGULATIONS_VALUE']
                                as $fileRegulation): ?>
                        <a href="<?= $fileRegulation['SRC']; ?>"
                           target="_blank"><?= $fileRegulation['ORIGINAL_NAME']; ?></a><br>
                    <? endforeach; ?>
                </td>
            </tr>
        <? endforeach; ?>
        </tbody>
    </table>
</form>
    </div>