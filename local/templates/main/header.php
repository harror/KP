<?php
/**
 * Created by PhpStorm.
 * User: Harror
 * Date: 07.11.2016
 * Time: 23:46
 */
?>
<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>
<?use Bitrix\Main\Localization\Loc;use Bitrix\Main\Page\Asset;Loc::loadMessages(__FILE__);?>

<!DOCTYPE>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <link href="/favicon.ico" rel="icon" />
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-3.0.0.min.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/ld.js", true);?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/styles.min.css");?>

</HEAD>
<BODY>
<?$APPLICATION->ShowPanel();?>
<SCRIPT type="text/javascript">
    var _tmr = _tmr || [];
    _tmr.push({
        type: 'itemView',
        productid: '',
        pagetype: 'home',
        totalvalue: '',
        list: '3'
    });
</SCRIPT>
<DIV id="wrap">
    <HEADER>
        <DIV class="common">

            <DIV class="phone">
                <SPAN>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH."/include_areas/phone.php"
                        )
                    );?>
                </SPAN>
            </DIV>
            <DIV class="shop">
                <SPAN>Магазин в центре Зеленограда</SPAN>
                <DIV class="tooltip shop">
                    <DIV id="YMapTop"></DIV>
                    <DIV>
                        <DIV class="row">
                            <DIV class="col-50"><B>Режим работы магазина:</B></DIV>
                            <DIV class="col-50 taright"><?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "COMPONENT_TEMPLATE" => ".default",
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/worktime.php"
                                    )
                                );?> ежедневно</DIV>
                        </DIV>
                    </DIV>
                    <DIV class="bottom row">
                        <DIV class="col-55"><SPAN>127051,Зеленоград <BR>к.903
                           </SPAN>
                        </DIV>
                        <DIV class="col-45"><A class="btn btn-orange btn-fluid" href="/contact/">К
                                контактам</A>
                        </DIV>
                    </DIV>
                </DIV>
            </DIV>
            <DIV class="whours"><?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/worktime.php"
                    )
                );?></DIV>
            <DIV class="search">
                <FORM action="/search/"
                      method="GET">
                    <INPUT name="search" type="search" autocomplete="off">
                    <DIV class="overlayhead"></DIV>
                    <DIV class="shadow"></DIV>
                </FORM>
            </DIV>
            <DIV class="user">
                <SPAN>Вход</SPAN>
                <FORM class="tooltip minilogin pushright" action="/login/" method="post">
                    <DIV class="row"><LABEL>Логин/E-Mail</LABEL><INPUT name="email" type="email">
                        <LABEL>Пароль</LABEL><INPUT name="password" type="password">
                        <INPUT name="redirect" type="hidden" value="/">
                    </DIV>
                    <DIV class="bottom row">
                        <DIV class="col-60"><SPAN><A href="/forgotten/">Забыли
                           пароль?</A><BR><A href="/register/">Регистрация</A>
                           </SPAN>
                        </DIV>
                        <DIV class="col-40"><BUTTON class="btn btn-orange btn-fluid"
                                                    type="submit">Вход</BUTTON>                         </DIV>
                    </DIV>
                </FORM>
            </DIV>
        </DIV>
        <NAV>
            <DIV class="logo">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"
                    )
                );?>
            </DIV>
            <DIV class="cat"><A href="/new/">Новинки</A></DIV>
            <DIV class="cat">
                <A href="/brandlist/">Бренды</A>
                <DIV class="sub">
                    <UL class="centered row">
                        <LI class="col-18 col-offset-2">
                            <UL>
                                <LI><A href="/adidas-originals/">Adidas Originals
                                    </A>
                                </LI>
                                <LI><A href="/aquascutum/">
                                        Aquascutum                                     </A>
                                </LI>
                                <LI><A href="/arcteryx/">
                                        Arcteryx                                     </A>
                                </LI>
                                <LI><A href="/armor-lux/">
                                        Armor-Lux                                     </A>
                                </LI>
                                <LI><A href="/asics/">
                                        ASICS                                     </A>
                                </LI>
                                <LI><A href="/barbour/">
                                        Barbour                                     </A>
                                </LI>
                                <LI><A href="/baxter-of-california/">
                                        Baxter of California
                                    </A>
                                </LI>
                                <LI><A href="/billionaire-boys-club/">
                                        Billionaire Boys Club
                                    </A>
                                </LI>
                                <LI><A href="/brooks-england/">
                                        Brooks England                                     </A>
                                </LI>
                                <LI><A href="/cp-company/">
                                        C.P. Company                                     </A>
                                </LI>
                            </UL>
                        </LI>
                        <LI class="col-18 col-offset-2">
                            <UL>
                                <LI><A href="/carhartt-wip/">
                                        Carhartt WIP                                     </A>
                                </LI>
                                <LI><A href="/casio/">
                                        CASIO                                     </A>
                                </LI>
                                <LI><A href="/champion/">
                                        Champion                                     </A>
                                </LI>
                                <LI><A href="/clarks-originals/">
                                        Clarks Originals
                                    </A>
                                </LI>
                                <LI><A href="/common-projects/">
                                        Common Projects                                     </A>
                                </LI>
                                <LI><A href="/ellesse/">
                                        Ellesse                                     </A>
                                </LI>
                                <LI><A href="/evisu/">
                                        Evisu                                     </A>
                                </LI>
                                <LI><A href="/fjallraven/">
                                        Fjallraven                                     </A>
                                </LI>
                                <LI><A href="/fred-perry/">
                                        Fred Perry                                     </A>
                                </LI>
                                <LI><A href="/hackett/">
                                        Hackett                                     </A>
                                </LI>
                            </UL>
                        </LI>
                        <LI class="col-18 col-offset-2">
                            <UL>
                                <LI><A href="/han-kjobenhavn/">
                                        Han Kjobenhavn                                     </A>
                                </LI>
                                <LI><A href="/herschel-supply-co/">
                                        Herschel Supply Co.
                                    </A>
                                </LI>
                                <LI><A href="/hestra/">
                                        Hestra                                     </A>
                                </LI>
                                <LI><A href="/lacoste/">
                                        Lacoste                                     </A>
                                </LI>
                                <LI><A href="/levis/">
                                        Levi's                                     </A>
                                </LI>
                                <LI><A href="/lyle-and-scott/">
                                        Lyle &amp; Scott                                     </A>
                                </LI>
                                <LI><A href="/maison-kitsune/">
                                        Maison Kitsune                                     </A>
                                </LI>
                                <LI><A href="/master-piece/">
                                        Master-piece                                     </A>
                                </LI>
                                <LI><A href="/mismo/">
                                        Mismo                                     </A>
                                </LI>
                                <LI><A href="/nanamica/">
                                        Nanamica                                     </A>
                                </LI>
                            </UL>
                        </LI>
                        <LI class="col-18 col-offset-2">
                            <UL>
                                <LI><A href="/napapijri/">
                                        Napapijri                                     </A>
                                </LI>
                                <LI><A href="/new-balance/">
                                        New Balance                                     </A>
                                </LI>
                                <LI><A href="/nike/">
                                        Nike                                     </A>
                                </LI>
                                <LI><A href="/norse-projects/">
                                        Norse Projects                                     </A>
                                </LI>
                                <LI><A href="/patagonia/">
                                        Patagonia                                     </A>
                                </LI>
                                <LI><A href="/peaceful-hooligan/">
                                        Peaceful Hooligan
                                    </A>
                                </LI>
                                <LI><A href="/penfield/">
                                        Penfield                                     </A>
                                </LI>
                                <LI><A href="/property-of/">
                                        Property Of…                                     </A>
                                </LI>
                                <LI><A href="/puma/">Puma
                                    </A>
                                </LI>
                                <LI><A href="/red-wing-shoes/">
                                        Red Wing Shoes
                                    </A>
                                </LI>
                            </UL>
                        </LI>
                        <LI class="col-18 col-offset-2">
                            <UL>
                                <LI><A href="/reebok/">
                                        Reebok                                     </A>
                                </LI>
                                <LI><A href="/reigning-champ/">
                                        Reigning Champ                                     </A>
                                </LI>
                                <LI><A href="/saucony/">
                                        Saucony                                     </A>
                                </LI>
                                <LI><A href="/stone-island/">
                                        Stone Island                                     </A>
                                </LI>
                                <LI><A href="/stussy/">
                                        Stussy                                     </A>
                                </LI>
                                <LI><A href="/the-north-face/">
                                        The North Face                                     </A>
                                </LI>
                                <LI><A href="/uniformes-generale/">
                                        Uniformes Generale
                                    </A>
                                </LI>
                                <LI><A href="/universal-works/">
                                        Universal Works                                     </A>
                                </LI>
                                <LI><A href="/weekend-offender/">
                                        Weekend Offender
                                    </A>
                                </LI>
                                <LI class="allbrands"><A href="/brandlist/">Показать все
                                        бренды</A>
                                </LI>
                            </UL>
                        </LI>
                    </UL>
                </DIV>
                <DIV class="shadow"></DIV>
            </DIV>
            <DIV class="cat">
                <A href="/muzhskoe/">Мужское</A>
                <DIV class="sub">
                    <UL class="centered row">
                        <LI class="col-18 col-offset-2">
                            <DIV class="title"><A
                                    href="/muzhskoe/obuv/">Обувь</A></DIV>
                            <UL>
                                <LI><A
                                        href="/muzhskoe/obuv/krossovki/">Кроссовки</A></LI>
                                <LI><A
                                        href="/muzhskoe/obuv/krossovki/zimnie/">Зимние</A></LI>
                                <LI><A href="/muzhskoe/obuv/botinki/">Ботинки</A></LI>
                                <LI><A href="/muzhskoe/obuv/kedy/">Кеды</A></LI>
                                <LI><A href="/muzhskoe/obuv/sandals/">Сандалии</A></LI>
                                <LI><A href="/muzhskoe/obuv/slancy/">Сланцы</A></LI>
                                <LI><A href="/sneakerhead/">Sneakerhead</A></LI>
                                <LI><A
                                        href="/sneakerhead/adidas-nmd/">NMD</A></LI>
                            </UL>
                        </LI>
                        <LI class="col-18 col-offset-2">
                            <DIV class="title"><A
                                    href="/muzhskoe/verhnyaya-odezhda/">Верхняя
                                    одежда</A>
                            </DIV>
                            <UL>
                                <LI><A href="/muzhskoe/verhnyaya-odezhda/kurtki/">Все
                                        куртки</A>
                                </LI>
                                <LI><A
                                        href="/muzhskoe/verhnyaya-odezhda/kurtki/zimnie/">Зимние</A></LI>
                                <LI><A href="/muzhskoe/verhnyaya-odezhda/kurtki/puhoviki/">Пуховики</A></LI>
                                <LI><A href="/muzhskoe/verhnyaya-odezhda/kurtki/haringtony/">Харрингтоны</A></LI>
                                <LI><A href="/muzhskoe/verhnyaya-odezhda/kurtki/anoraki/">Анораки</A></LI>
                                <LI><A
                                        href="/muzhskoe/verhnyaya-odezhda/kurtki/parki/">Парки</A></LI>
                                <LI><A
                                        href="/muzhskoe/verhnyaya-odezhda/kurtki/bomber/">Бомберы</A></LI>
                                <LI><A href="/muzhskoe/verhnyaya-odezhda/kurtki/vetrovki/">Ветровки</A></LI>
                                <LI><A
                                        href="/muzhskoe/verhnyaya-odezhda/pidzhaki/">Пиджаки</A></LI>
                                <LI><A
                                        href="/muzhskoe/verhnyaya-odezhda/trenchkoty/">Тренчкоты</A></LI>
                                <LI><A
                                        href="/muzhskoe/verhnyaya-odezhda/plaschi/">Плащи</A></LI>
                                <LI><A
                                        href="/muzhskoe/verhnyaya-odezhda/zhilety/">Жилеты</A></LI>
                            </UL>
                        </LI>
                        <LI class="col-18 col-offset-2">
                            <DIV class="title"><A
                                    href="/muzhskoe/odezhda/">Одежда</A></DIV>
                            <UL>
                                <LI><A
                                        href="/muzhskoe/odezhda/svitery/">Свитера</A></LI>
                                <LI><A
                                        href="/muzhskoe/odezhda/kardigany/">Кардиганы</A></LI>
                                <LI><A
                                        href="/muzhskoe/odezhda/tolstovki/">Толстовки</A></LI>
                                <LI><A href="/muzhskoe/odezhda/olimpijki/">Олимпийки
                                    </A>
                                </LI>
                                <LI><A
                                        href="/muzhskoe/odezhda/rubashki/">Рубашки</A></LI>
                                <LI><A
                                        href="/muzhskoe/odezhda/longslivy/">Лонгсливы</A></LI>
                                <LI><A href="/muzhskoe/odezhda/polo/">Поло</A></LI>
                                <LI><A
                                        href="/muzhskoe/odezhda/futbolki/">Футболки</A></LI>
                                <LI><A href="/muzhskoe/odezhda/dzhinsy/">Джинсы</A></LI>
                                <LI><A href="/muzhskoe/odezhda/bryuki/">Брюки</A></LI>
                                <LI><A
                                        href="/muzhskoe/odezhda/shorty/">Шорты</A></LI>
                            </UL>
                        </LI>
                        <LI class="col-18 col-offset-2">
                            <DIV class="title"><A
                                    href="/muzhskoe/aksessuary/">Аксессуары</A></DIV>
                            <UL>
                                <LI><A
                                        href="/muzhskoe/aksessuary/naruchnye-chasy/">Наручные
                                        часы</A>
                                </LI>
                                <LI><A
                                        href="/muzhskoe/aksessuary/shapki/">Шапки</A></LI>
                                <LI><A
                                        href="/muzhskoe/aksessuary/sharfi/">Шарфы</A></LI>
                                <LI><A
                                        href="/muzhskoe/aksessuary/perchatki/">Перчатки</A></LI>
                                <LI><A
                                        href="/muzhskoe/aksessuary/varezhki/">Варежки</A></LI>
                                <LI><A
                                        href="/muzhskoe/aksessuary/panamy/">Панамы</A></LI>
                                <LI><A href="/muzhskoe/aksessuary/kepki/">Кепки</A></LI>
                                <LI><A
                                        href="/muzhskoe/aksessuary/galstuki/">Галстуки</A></LI>
                                <LI><A
                                        href="/muzhskoe/aksessuary/pizhama/">Пижамы</A></LI>
                                <LI><A href="/muzhskoe/aksessuary/remni/">Ремни</A></LI>
                                <LI><A href="/muzhskoe/aksessuary/nizhnee-belyo/">Нижнее
                                        белье</A>
                                </LI>
                                <LI><A href="/muzhskoe/aksessuary/noski/">Носки</A></LI>
                                <LI><A
                                        href="/muzhskoe/aksessuary/shnurki/">Шнурки</A></LI>
                            </UL>
                        </LI>
                    </UL>
                </DIV>
                <DIV class="shadow"></DIV>
            </DIV>
            <DIV class="cat">
                <A href="/zhenskoe/">Женское</A>
                <DIV class="sub">
                    <UL class="centered row">
                        <LI class="col-18 col-offset-2">
                            <DIV class="title"><A
                                    href="/zhenskoe/obuv/">Обувь</A></DIV>
                            <UL>
                                <LI><A
                                        href="/zhenskoe/obuv/krossovki/">Кроссовки</A></LI>
                                <LI><A
                                        href="/zhenskoe/obuv/krossovki/zimnie/">Зимние</A></LI>
                                <LI><A href="/zhenskoe/obuv/botinki/">Ботинки</A></LI>
                                <LI><A href="/zhenskoe/obuv/kedy/">Кеды</A></LI>
                                <LI><A href="/sneakerhead/">Sneakerhead</A></LI>
                                <LI><A
                                        href="/sneakerhead/adidas-nmd/">NMD</A></LI>
                            </UL>
                        </LI>
                        <LI class="col-18 col-offset-2">
                            <DIV class="title"><A
                                    href="/zhenskoe/verhnyaya-odezhda/">Верхняя
                                    одежда</A>
                            </DIV>
                            <UL>
                                <LI><A href="/zhenskoe/verhnyaya-odezhda/kurtki/">Все
                                        куртки</A>
                                </LI>
                                <LI><A
                                        href="/zhenskoe/verhnyaya-odezhda/kurtki/zimnie/">Зимние</A></LI>
                                <LI><A
                                        href="/zhenskoe/verhnyaya-odezhda/kurtki/parki/">Парки</A></LI>
                                <LI><A href="/zhenskoe/verhnyaya-odezhda/kurtki/anoraki/">Анораки</A></LI>
                                <LI><A href="/zhenskoe/verhnyaya-odezhda/kurtki/steganye-kurtki/">Стеганые
                                        куртки</A>
                                </LI>
                                <LI><A href="/zhenskoe/verhnyaya-odezhda/kurtki/voshhenye/">Вощеные
                                        куртки</A>
                                </LI>
                                <LI><A href="/zhenskoe/verhnyaya-odezhda/kurtki/dzhinsovye-kurtki/">Джинсовые
                                        куртки</A>
                                </LI>
                                <LI><A href="/zhenskoe/verhnyaya-odezhda/kurtki/vetrovki/">Ветровки</A></LI>
                            </UL>
                        </LI>
                        <LI class="col-18 col-offset-2">
                            <DIV class="title"><A
                                    href="/zhenskoe/odezhda/">Одежда</A></DIV>
                            <UL>
                                <LI><A
                                        href="/zhenskoe/odezhda/svitery/">Свитера</A></LI>
                                <LI><A
                                        href="/zhenskoe/odezhda/tolstovki/">Толстовки</A></LI>
                                <LI><A
                                        href="/zhenskoe/odezhda/olimpijki/">Олимпийки</A></LI>
                                <LI><A href="/zhenskoe/odezhda/platya/">Платья</A></LI>
                                <LI><A
                                        href="/zhenskoe/odezhda/rubashki/">Рубашки</A></LI>
                                <LI><A
                                        href="/zhenskoe/odezhda/longslivy/">Лонгсливы</A></LI>
                                <LI><A href="/zhenskoe/odezhda/polo/">Поло</A></LI>
                                <LI><A
                                        href="/zhenskoe/odezhda/futbolki/">Футболки</A></LI>
                                <LI><A href="/zhenskoe/odezhda/dzhinsy/">Джинсы</A></LI>
                                <LI><A href="/zhenskoe/odezhda/bryuki/">Брюки</A></LI>
                                <LI><A href="/zhenskoe/odezhda/yubki/">Юбки</A></LI>
                                <LI><A
                                        href="/zhenskoe/odezhda/shorty/">Шорты</A></LI>
                            </UL>
                        </LI>
                        <LI class="col-18 col-offset-2">
                            <DIV class="title"><A
                                    href="/zhenskoe/aksessuary/">Аксессуары</A></DIV>
                            <UL>
                                <LI><A
                                        href="/zhenskoe/aksessuary/naruchnye-chasy/">Наручные
                                        часы</A>
                                </LI>
                                <LI><A
                                        href="/zhenskoe/aksessuary/shapki/">Шапки</A></LI>
                                <LI><A
                                        href="/zhenskoe/aksessuary/sharfi/">Шарфы</A></LI>
                                <LI><A
                                        href="/zhenskoe/aksessuary/perchatki/">Перчатки</A></LI>
                                <LI><A
                                        href="/zhenskoe/aksessuary/varezhki/">Варежки</A></LI>
                                <LI><A href="/zhenskoe/aksessuary/kepki/">Кепки</A></LI>
                                <LI><A
                                        href="/zhenskoe/aksessuary/panamy/">Панамы</A></LI>
                                <LI><A href="/zhenskoe/aksessuary/remni/">Ремни</A></LI>
                                <LI><A href="/zhenskoe/aksessuary/noski/">Носки</A></LI>
                                <LI><A
                                        href="/zhenskoe/aksessuary/shnurki/">Шнурки</A></LI>
                            </UL>
                        </LI>
                    </UL>
                </DIV>
                <DIV class="shadow"></DIV>
            </DIV>
            <DIV class="cat">
                <A href="/detskoe/">Детское</A>
                <DIV class="sub">
                    <UL class="centered row">
                        <LI class="col-18 col-offset-2">
                            <DIV class="title"><A
                                    href="/detskoe/obuv/">Обувь</A></DIV>
                            <UL>
                                <LI><A href="/detskoe/obuv/kedy/">Кеды</A></LI>
                                <LI><A
                                        href="/detskoe/obuv/krossovki/">Кроссовки</A></LI>
                            </UL>
                        </LI>
                        <LI class="col-18 col-offset-2">
                            <DIV class="title"><A
                                    href="/detskoe/odezhda/">Одежда</A></DIV>
                            <UL>
                                <LI><A href="/detskoe/odezhda/kurtki/">Куртки</A></LI>
                                <LI><A
                                        href="/detskoe/odezhda/tolstovki/">Толстовки</A></LI>
                                <LI><A
                                        href="/detskoe/odezhda/longslivy/">Лонгсливы</A></LI>
                                <LI><A href="/detskoe/odezhda/polo/">Поло</A></LI>
                                <LI><A
                                        href="/detskoe/odezhda/futbolki/">Футболки</A></LI>
                                <LI><A
                                        href="/detskoe/odezhda/shorty/">Шорты</A></LI>
                            </UL>
                        </LI>
                        <LI class="col-18 col-offset-2">
                            <DIV class="title"><A
                                    href="/detskoe/aksessuary/">Аксессуары</A></DIV>
                            <UL>
                                <LI><A href="/detskoe/aksessuary/noski/">Носки</A></LI>
                                <LI><A href="/detskoe/aksessuary/remni/">Ремни</A></LI>
                                <LI><A
                                        href="/detskoe/aksessuary/shapki/">Шапки</A></LI>
                            </UL>
                        </LI>
                    </UL>
                </DIV>
                <DIV class="shadow"></DIV>
            </DIV>
            <DIV class="cat">
                <A
                    href="/brendovie-aksessuary/">Аксессуары</A>
                <DIV class="sub">
                    <UL class="centered row">
                        <LI class="col-18 col-offset-2">
                            <DIV class="title"><A href="/brendovie-aksessuary/podarki/">Подарки</A></DIV>
                            <UL>
                                <LI><A href="/brendovie-aksessuary/podarki/chasy-naruchnye/">Наручные
                                        часы</A>
                                </LI>
                                <LI><A href="/brendovie-aksessuary/podarki/nozhi-karmannye/">Карманные
                                        ножи</A>
                                </LI>
                                <LI><A href="/brendovie-aksessuary/podarki/sredstva-dlia-uhoda/">Средства
                                        для ухода</A>
                                </LI>
                                <LI><A
                                        href="/brendovie-aksessuary/podarki/zonty/">Зонты</A></LI>
                                <LI><A href="/brendovie-aksessuary/podarki/solncezaschitnye-ochki/">Очки</A></LI>
                                <LI><A
                                        href="/brendovie-aksessuary/podarki/termosy/">Термосы</A></LI>
                                <LI><A
                                        href="/brendovie-aksessuary/podarki/koshelki/">Кошельки</A></LI>
                                <LI><A
                                        href="/brendovie-aksessuary/podarki/zhurnaly/">Журналы</A></LI>
                                <LI><A href="/brendovie-aksessuary/podarki/pismennye-prinadlezhnosti/">Письменные
                                        принадлежности</A>
                                </LI>
                                <LI><A href="/brendovie-aksessuary/podarki/podarochnye-sertifikaty/">Подарочные
                                        сертификаты</A>
                                </LI>
                                <LI><A href="/brendovie-aksessuary/podarki/dlja-velosipedov/">Для
                                        велосипедов</A>
                                </LI>
                                <LI><A
                                        href="/brendovie-aksessuary/podarki/other/">Прочее</A></LI>
                            </UL>
                        </LI>
                        <LI class="col-18 col-offset-2">
                            <DIV class="title"><A href="/brendovie-aksessuary/dlya-gadzhetov/">Гаджеты</A></DIV>
                            <UL>
                                <LI><A href="/brendovie-aksessuary/dlya-gadzhetov/naushniki/">Наушники</A></LI>
                                <LI><A href="/brendovie-aksessuary/dlya-gadzhetov/portativnaya-akustika/">Портативная
                                        акустика</A>
                                </LI>
                                <LI><A href="/brendovie-aksessuary/dlya-gadzhetov/zaryadnie-ustrojstva/">Зарядные
                                        устройства</A>
                                </LI>
                                <LI><A href="/brendovie-aksessuary/dlya-gadzhetov/dok-stancii/">Док
                                        станции</A>
                                </LI>
                                <LI><A href="/brendovie-aksessuary/dlya-gadzhetov/vneshnie-akkumulyatory/">Внешние
                                        аккумуляторы</A>
                                </LI>
                                <LI><A href="/brendovie-aksessuary/dlya-gadzhetov/kabeli-dlja-zarjadki/">Кабели
                                        для зарядки</A>
                                </LI>
                                <LI><A href="/brendovie-aksessuary/dlya-gadzhetov/zaschitnie-plenki/">Защитные
                                        пленки</A>
                                </LI>
                                <LI><A href="/brendovie-aksessuary/dlya-gadzhetov/zashitnye-stekla/">Защитные
                                        стекла</A>
                                </LI>
                                <LI><A href="/brendovie-aksessuary/dlya-gadzhetov/chernye/">Чехлы
                                        для устройств</A>
                                </LI>
                            </UL>
                        </LI>
                        <LI class="col-18 col-offset-2">
                            <DIV class="title"><A href="/brendovie-aksessuary/sladosti/">Сладости</A></DIV>
                            <UL>
                                <LI><A
                                        href="/brendovie-aksessuary/sladosti/morozhenoe/">Мороженое</A></LI>
                                <LI><A
                                        href="/brendovie-aksessuary/sladosti/pechene/">Печенье</A></LI>
                                <LI><A
                                        href="/brendovie-aksessuary/sladosti/shokolad/">Шоколад</A></LI>
                                <LI><A href="/brendovie-aksessuary/sladosti/gazirovannaya-voda/">Газированная
                                        вода</A>
                                </LI>
                                <LI><A href="/brendovie-aksessuary/sladosti/zhevatelnaya-rezinka/">Жевательная
                                        резинка</A>
                                </LI>
                                <LI><A
                                        href="/brendovie-aksessuary/sladosti/ledentsy/">Леденцы</A></LI>
                            </UL>
                        </LI>
                        <LI class="col-18 col-offset-2">
                            <DIV class="title"><A
                                    href="/brendovie-aksessuary/bagazh/">Рюкзаки и
                                    сумки</A>
                            </DIV>
                            <UL>
                                <LI><A
                                        href="/brendovie-aksessuary/bagazh/ryukzaki/">Рюкзаки</A></LI>
                                <LI><A
                                        href="/brendovie-aksessuary/bagazh/sumki/">Сумки</A></LI>
                                <LI><A href="/brendovie-aksessuary/bagazh/dorozhnye-sumki/">Дорожные
                                        сумки</A>
                                </LI>
                                <LI><A href="/brendovie-aksessuary/bagazh/sumki-na-poyas/">Сумки
                                        на пояс</A>
                                </LI>
                            </UL>
                        </LI>
                    </UL>
                </DIV>
                <DIV class="shadow"></DIV>
            </DIV>
            <DIV class="cat">
                <A href="/krasota/">Красота</A>
                <DIV class="sub">
                    <UL class="centered row">
                        <LI class="col-18 col-offset-2">
                            <DIV class="title"><A href="/krasota/uhod-za-litsom/">Для
                                    лица</A>
                            </DIV>
                            <UL>
                                <LI><A
                                        href="/krasota/uhod-za-litsom/krema/">Крема</A></LI>
                                <LI><A
                                        href="/krasota/uhod-za-litsom/mylo/">Мыло</A></LI>
                                <LI><A
                                        href="/krasota/uhod-za-litsom/zubnye-schetki/">Зубные
                                        щетки</A>
                                </LI>
                                <LI><A href="/krasota/uhod-za-litsom/zubnye-pasty-opolaskivateli/">Зубные
                                        пасты и ополаскиватели</A>
                                </LI>
                                <LI><A
                                        href="/krasota/uhod-za-litsom/geli/">Гели</A></LI>
                            </UL>
                        </LI>
                        <LI class="col-18 col-offset-2">
                            <DIV class="title"><A href="/krasota/uhod-za-telom/">Для
                                    тела</A>
                            </DIV>
                            <UL>
                                <LI><A href="/krasota/uhod-za-telom/mylo/">Мыло</A></LI>
                                <LI><A href="/krasota/uhod-za-telom/geli/">Гели</A></LI>
                                <LI><A
                                        href="/krasota/uhod-za-telom/krema/">Крема</A></LI>
                                <LI><A
                                        href="/krasota/uhod-za-telom/voda-parfyumernaya/">Парфюмерная
                                        вода</A>
                                </LI>
                                <LI><A
                                        href="/krasota/uhod-za-telom/tualetnaya-voda/">Туалетная
                                        вода</A>
                                </LI>
                                <LI><A
                                        href="/krasota/uhod-za-telom/dezodoranty/">Дезодоранты</A></LI>
                            </UL>
                        </LI>
                        <LI class="col-18 col-offset-2">
                            <DIV class="title"><A
                                    href="/krasota/uhod-za-volosami/">Для волос</A></DIV>
                            <UL>
                                <LI><A
                                        href="/krasota/uhod-za-volosami/konditsionery/">Кондиционеры</A></LI>
                                <LI><A
                                        href="/krasota/uhod-za-volosami/shampuni/">Шампуни</A></LI>
                                <LI><A href="/krasota/uhod-za-volosami/sredstva-dlya-ukladki/">Средства
                                        для укладки волос</A>
                                </LI>
                                <LI><A
                                        href="/krasota/uhod-za-volosami/raschyoska/">Расчески</A></LI>
                            </UL>
                        </LI>
                        <LI class="col-18 col-offset-2">
                            <DIV class="title"><A href="/krasota/aksessuary-dlya-britya/">Для
                                    бритья</A>
                            </DIV>
                            <UL>
                                <LI><A href="/krasota/aksessuary-dlya-britya/uhod-za-borodoy-usami/">Уход
                                        за бородой и усами</A>
                                </LI>
                                <LI><A href="/krasota/aksessuary-dlya-britya/britvennye-prinadlezhnosti/">Бритвенные
                                        принадлежности</A>
                                </LI>
                                <LI><A
                                        href="/krasota/aksessuary-dlya-britya/losony/">Лосьоны</A></LI>
                                <LI><A
                                        href="/krasota/aksessuary-dlya-britya/krema/">Крема</A></LI>
                                <LI><A
                                        href="/krasota/aksessuary-dlya-britya/geli/">Гели</A></LI>
                                <LI><A
                                        href="/krasota/aksessuary-dlya-britya/balzamy/">Бальзамы</A></LI>
                                <LI><A
                                        href="/krasota/aksessuary-dlya-britya/mylo/">Мыло</A></LI>
                                <LI><A
                                        href="/krasota/aksessuary-dlya-britya/pena/">Пена</A></LI>
                            </UL>
                        </LI>
                    </UL>
                </DIV>
                <DIV class="shadow"></DIV>
            </DIV>
            <DIV class="cat">
                <A href="/sale/">Скидки</A>
                <DIV class="sub">
                    <UL class="centered row">
                        <LI class="col-18 col-offset-2">
                            <DIV class="title"><A href="/sale/obuv/">Обувь</A></DIV>
                            <UL>
                                <LI><A href="/sale/obuv/krossovki/">Кроссовки</A></LI>
                                <LI><A href="/sale/obuv/botinki/">Ботинки</A></LI>
                                <LI><A href="/sale/obuv/kedy/">Кеды</A></LI>
                                <LI><A
                                        href="/sale/obuv/sandalii/">Сандалии</A></LI>
                            </UL>
                        </LI>
                        <LI class="col-18 col-offset-2">
                            <DIV class="title"><A
                                    href="/sale/verhnyaya-odezhda/">Верхняя одежда</A></DIV>
                            <UL>
                                <LI><A href="/sale/verhnyaya-odezhda/kurtki/">Все
                                        куртки</A>
                                </LI>
                                <LI><A
                                        href="/sale/verhnyaya-odezhda/kurtki/bomber/">Бомберы</A></LI>
                                <LI><A
                                        href="/sale/verhnyaya-odezhda/kurtki/anoraki/">Анораки</A></LI>
                                <LI><A
                                        href="/sale/verhnyaya-odezhda/kurtki/parki/">Парки</A></LI>
                                <LI><A href="/sale/verhnyaya-odezhda/kurtki/dzhinsovye-kurtki/">Джинсовые
                                        куртки</A>
                                </LI>
                                <LI><A
                                        href="/sale/verhnyaya-odezhda/kurtki/vetrovki/">Ветровки</A></LI>
                                <LI><A
                                        href="/sale/verhnyaya-odezhda/plaschi/">Плащи</A></LI>
                            </UL>
                        </LI>
                        <LI class="col-18 col-offset-2">
                            <DIV class="title"><A
                                    href="/sale/odezhda/">Одежда</A></DIV>
                            <UL>
                                <LI><A href="/sale/odezhda/dzhinsy/">Джинсы</A></LI>
                                <LI><A href="/sale/odezhda/platya/">Платья</A></LI>
                                <LI><A href="/sale/odezhda/polo/">Поло</A></LI>
                                <LI><A href="/sale/odezhda/sviter/">Свитера</A></LI>
                                <LI><A href="/sale/odezhda/futbolka/">Футболки</A></LI>
                                <LI><A href="/sale/odezhda/shorty/">Шорты</A></LI>
                                <LI><A
                                        href="/sale/odezhda/tolstovki/">Толстовки</A></LI>
                                <LI><A href="/sale/odezhda/rubashki/">Рубашки</A></LI>
                                <LI><A
                                        href="/sale/odezhda/bryuki/">Брюки</A></LI>
                            </UL>
                        </LI>
                        <LI class="col-18 col-offset-2">
                            <DIV class="title"><A
                                    href="/sale/aksessuary/">Аксессуары</A></DIV>
                            <UL>
                                <LI><A
                                        href="/sale/aksessuary/dorozhnaye-sumki/">Дорожные
                                        сумки</A>
                                </LI>
                                <LI><A href="/sale/aksessuary/noski/">Носки</A></LI>
                                <LI><A
                                        href="/sale/aksessuary/solntsezashhitnye-ochki/">Солнцезащитные
                                        очки</A>
                                </LI>
                                <LI><A href="/sale/aksessuary/sumki/">Сумки</A></LI>
                                <LI><A
                                        href="/sale/aksessuary/ryukzaki/">Рюкзаки</A></LI>
                            </UL>
                        </LI>
                    </UL>
                </DIV>
                <DIV class="shadow"></DIV>
            </DIV>
            <DIV class="right">
                <A class="wishlist"
                   href="/wishlist/"><SPAN>Избранное</SPAN>
                </A>
                <DIV class="cart" href="/cart/">
                    <SPAN>Корзина</SPAN>
                    <DIV class="badge">0</DIV>
                    <DIV class="tooltip pushright" id="minicart"></DIV>
                </DIV>
            </DIV>
        </NAV>
    </HEADER>
    <DIV class="shadow"></DIV>
    <DIV class="content">
        <SCRIPT type="text/javascript">
            var _rutarget = window._rutarget || [];
            _rutarget.push({'event': 'otherPage'});
        </SCRIPT>
		<?if ($GLOBALS["APPLICATION"]->GetCurPage(true) == "/index.php"):?>
<?$APPLICATION->IncludeComponent(
	"bitrix:photo.section", 
	"slider1", 
	array(
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "NAME",
			2 => "SORT",
			3 => "PREVIEW_TEXT",
			4 => "PREVIEW_PICTURE",
			5 => "",
		),
		"FILTER_NAME" => "arrFilter",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "content",
		"LINE_ELEMENT_COUNT" => "3",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Фотографии",
		"PAGE_ELEMENT_COUNT" => "20",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "37",
			2 => "38",
		),
		"SECTION_CODE" => "",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"COMPONENT_TEMPLATE" => "slider1"
	),
	false
);?>		
        
		<?endif;?>
	   <DIV class="centered main home">
	   <?if ($GLOBALS["APPLICATION"]->GetCurPage(true) == "/index.php"):?> 
            <H2><A href="/new/">Новые поступления</A></H2>
            <DIV class="row newproducts">
                <A title="Nike Мужские зимние кроссовки Air Max 95 Sneakerboot Dark Loden/Cargo Khaki/Bright"
                   class="pr col-25" href="/goods/11279/muzhskie-krossovki-nike-air-max-95-sneakerboot-dark-loden-cargo-khaki/">
                    <DIV class="thumb"><IMG alt="Nike Мужские зимние кроссовки Air Max 95 Sneakerboot Dark Loden/Cargo Khaki/Bright"
                                            src="<?=SITE_TEMPLATE_PATH;?>/images/muzhskie-krossovki-nike-air-max-95-sneakerboot-dark-loden-cargo-khaki-1-0_450x450.jpg">
                    </DIV>
                    <DIV class="info">
                        <DIV class="price">10 890<EM class="currency">р</EM>                             </DIV>
                        <H2>Nike <SPAN>Мужские зимние кроссовки</SPAN><SPAN>Air Max 95 Sneakerboot Dark
                           Loden/Cargo Khaki/Bright</SPAN>
                        </H2>
                    </DIV>
                </A>
                <A title="Nike Мужские зимние кроссовки Air Max 90 Mid Winter Black/Black"
                   class="pr col-25" href="/goods/10427/krossovki-muzhskie-nike-air-max-90-mid-winter-utility-black-black/">
                    <DIV class="thumb"><IMG alt="Nike Мужские зимние кроссовки Air Max 90 Mid Winter Black/Black"
                                            src="<?=SITE_TEMPLATE_PATH;?>/images/krossovki-muzhskie-nike-air-max-90-mid-winter-utility-black-black-1-0_450x450.jpg">
                    </DIV>
                    <DIV class="info">
                        <DIV class="price">                                9 890<EM
                                class="currency">р</EM>                             </DIV>
                        <H2>Nike <SPAN>Мужские зимние кроссовки</SPAN><SPAN>Air Max 90 Mid Winter
                           Black/Black</SPAN>
                        </H2>
                    </DIV>
                </A>
                <A title="Nike Мужские зимние кроссовки Air Max 90 Mid Winter Dark Loden/Black/Dark Grey"
                   class="pr col-25" href="/goods/18754/muzhskie-krossovki-nike-air-max-90-mid-winter-dark-loden-black-dark-grey/">
                    <DIV class="thumb"><IMG alt="Nike Мужские зимние кроссовки Air Max 90 Mid Winter Dark Loden/Black/Dark Grey"
                                            src="<?=SITE_TEMPLATE_PATH;?>/images/muzhskie-krossovki-nike-air-max-90-mid-winter-dark-loden-black-dark-grey-0_450x450.jpg">
                    </DIV>
                    <DIV class="info">
                        <DIV class="price">                                9 890<EM
                                class="currency">р</EM>                             </DIV>
                        <H2>Nike <SPAN>Мужские зимние кроссовки</SPAN><SPAN>Air Max 90 Mid Winter Dark
                           Loden/Black/Dark Grey</SPAN>
                        </H2>
                    </DIV>
                </A>
                <A title="Nike Кроссовки Air Footscape NM Hyper Cobalt/Black/Summit White"
                   class="pr col-25" href="/goods/19841/muzhskie-krossovki-nike-air-footscape-nm-hyper-cobalt-black-summit-white/">
                    <DIV class="thumb"><IMG alt="Nike Кроссовки Air Footscape NM Hyper Cobalt/Black/Summit White"
                                            src="<?=SITE_TEMPLATE_PATH;?>/images/muzhskie-krossovki-nike-air-footscape-nm-hyper-cobalt-black-summit-white-0_450x450.jpg">
                    </DIV>
                    <DIV class="info">
                        <DIV class="price">                                7 890<EM
                                class="currency">р</EM>                             </DIV>
                        <H2>Nike <SPAN>Кроссовки</SPAN><SPAN>Air Footscape NM Hyper Cobalt/Black/Summit
                           White</SPAN>
                        </H2>
                    </DIV>
                </A>
                <A title="Nike Женские кроссовки Air Max 95 Premium Safari Pack Black/Dark Cayenne/Rio Teal"
                   class="pr col-25" href="/goods/19743/zhenskie-krossovki-nike-air-max-95-premium-safari-pack-black-dark-cayenne-rio-teal/">
                    <DIV class="thumb"><IMG alt="Nike Женские кроссовки Air Max 95 Premium Safari Pack Black/Dark Cayenne/Rio Teal"
                                            src="<?=SITE_TEMPLATE_PATH;?>/images/zhenskie-krossovki-nike-air-max-95-premium-safari-pack-black-dark-cayenne-rio-teal-1_450x450.jpg">
                    </DIV>
                    <DIV class="info">
                        <DIV class="price">                                11 890<EM
                                class="currency">р</EM>                             </DIV>
                        <H2>Nike <SPAN>Женские кроссовки</SPAN><SPAN>Air Max 95 Premium Safari Pack
                           Black/Dark Cayenne/Rio Teal</SPAN>
                        </H2>
                    </DIV>
                </A>
                <A title="Nike Женские кроссовки Beautiful Air Huarache Ultra Premium Black/Black"
                   class="pr col-25" href="/goods/19534/zhenskie-krossovki-nike-beautiful-air-huarache-ultra-premium-black-black/">
                    <DIV class="thumb"><IMG alt="Nike Женские кроссовки Beautiful Air Huarache Ultra Premium Black/Black"
                                            src="<?=SITE_TEMPLATE_PATH;?>/images/zhenskie-krossovki-nike-beautiful-air-huarache-ultra-premium-black-black-0_450x450.jpg">
                    </DIV>
                    <DIV class="info">
                        <DIV class="price">                                9 390<EM
                                class="currency">р</EM>                             </DIV>
                        <H2>Nike <SPAN>Женские кроссовки</SPAN><SPAN>Beautiful Air Huarache Ultra
                           Premium Black/Black</SPAN>
                        </H2>
                    </DIV>
                </A>
                <A title="Nike Женские кроссовки Air Max 90 Essential Grey/Ghost Green/Dark Grey"
                   class="pr col-25" href="/goods/18289/zhenskie-krossovki-nike-air-max-90-essential-grey-ghost-green-dark-grey/">
                    <DIV class="thumb"><IMG alt="Nike Женские кроссовки Air Max 90 Essential Grey/Ghost Green/Dark Grey"
                                            src="<?=SITE_TEMPLATE_PATH;?>/images/zhenskie-krossovki-nike-air-max-90-essential-grey-ghost-green-dark-grey-0_450x450.jpg">
                    </DIV>
                    <DIV class="info">
                        <DIV class="price">                                8 390<EM
                                class="currency">р</EM>                             </DIV>
                        <H2>Nike <SPAN>Женские кроссовки</SPAN><SPAN>Air Max 90 Essential Grey/Ghost
                           Green/Dark Grey</SPAN>
                        </H2>
                    </DIV>
                </A>
                <A title="Nike Подростковые кроссовки Air Huarache Run GS Triple Black"
                   class="pr col-25" href="/goods/19044/podrostkovie-krossovki-nike-air-huarache-run-gs-triple-black/">
                    <DIV class="thumb"><IMG alt="Nike Подростковые кроссовки Air Huarache Run GS Triple Black"
                                            src="<?=SITE_TEMPLATE_PATH;?>/images/podrostkovie-krossovki-nike-air-huarache-run-gs-triple-black-0_450x450.jpg">
                    </DIV>
                    <DIV class="info">
                        <DIV class="price">                                5 490<EM
                                class="currency">р</EM>                             </DIV>
                        <H2>Nike <SPAN>Подростковые кроссовки</SPAN><SPAN>Air Huarache Run GS Triple
                           Black</SPAN>
                        </H2>
                    </DIV>
                </A>
            </DIV>
            <H2>Актуальные категории</H2>
            <DIV class="actual scrollslider row" data-slimslides="3" data-wideslides="4">
			
                <DIV class="cat">
                    <A href="/muzhskoe/obuv/krossovki/zimnie/">
                        <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/muzhskie-krossovki-brandshop-001-416x330.jpg">
                        </DIV>
                        <DIV class="info vmiddle">
                            <DIV>
                                <H3>Зимние кроссовки</H3>
                            </DIV>
                        </DIV>
                    </A>
                </DIV>
                <DIV class="cat">
                    <A href="/muzhskoe/odezhda/svitery/">
                        <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/brandshop-muzhskie-svitera-416x330.jpg">
                        </DIV>
                        <DIV class="info vmiddle">
                            <DIV>
                                <H3>Мужские свитера</H3>
                            </DIV>
                        </DIV>
                    </A>
                </DIV>
                <DIV class="cat">
                    <A href="/muzhskoe/odezhda/futbolki/">
                        <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/brandshop-muzhskoe-futbolki-november-416x330.jpg">
                        </DIV>
                        <DIV class="info vmiddle">
                            <DIV>
                                <H3>Мужские футболки</H3>
                            </DIV>
                        </DIV>
                    </A>
                </DIV>
                <DIV class="cat">
                    <A href="/zhenskoe/obuv/krossovki/">
                        <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/brandshop-zhenskie-krossovki-1-416x330.jpg">
                        </DIV>
                        <DIV class="info vmiddle">
                            <DIV>
                                <H3>Женские кроссовки</H3>
                            </DIV>
                        </DIV>
                    </A>
                </DIV>
                <DIV class="cat">
                    <A href="/muzhskoe/verhnyaya-odezhda/kurtki/zimnie/">
                        <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/brandshop-zimnie-kurtki-november-416x330.jpg">
                        </DIV>
                        <DIV class="info vmiddle">
                            <DIV>
                                <H3>Зимние куртки</H3>
                            </DIV>
                        </DIV>
                    </A>
                </DIV>
                <DIV class="cat">
                    <A href="/zhenskoe/odezhda/">
                        <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/brandshop-zhenskaya-odezhda-1-416x330.jpg">
                        </DIV>
                        <DIV class="info vmiddle">
                            <DIV>
                                <H3>Женская одежда</H3>
                            </DIV>
                        </DIV>
                    </A>
                </DIV>
                <DIV class="cat">
                    <A href="/brendovie-aksessuary/bagazh/">
                        <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/sumki-rukzaki-416x330.jpg">
                        </DIV>
                        <DIV class="info vmiddle">
                            <DIV>
                                <H3>Рюкзаки и сумки</H3>
                            </DIV>
                        </DIV>
                    </A>
                </DIV>
                <DIV class="cat">
                    <A href="/brendovie-aksessuary/dlya-gadzhetov/">
                        <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/brandshop-gadzhety-416x330-416x330.jpg">
                        </DIV>
                        <DIV class="info vmiddle">
                            <DIV>
                                <H3>Аксессуары для гаджетов</H3>
                            </DIV>
                        </DIV>
                    </A>
                </DIV>
                <DIV class="cat">
                    <A href="/brendovie-aksessuary/sladosti/">
                        <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/brandshop-sladosti-1-416x330.jpg">
                        </DIV>
                        <DIV class="info vmiddle">
                            <DIV>
                                <H3>Сладости</H3>
                            </DIV>
                        </DIV>
                    </A>
                </DIV>
                <DIV class="cat">
                    <A href="/muzhskoe/aksessuary/">
                        <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/brandshop-muzhskie-aksessuary-416x330.jpg">
                        </DIV>
                        <DIV class="info vmiddle">
                            <DIV>
                                <H3>Мужские аксессуары</H3>
                            </DIV>
                        </DIV>
                    </A>
                </DIV>
                <DIV class="cat">
                    <A href="/krasota/">
                        <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/brandshop-krasota-october-1-416x330.jpg">
                        </DIV>
                        <DIV class="info vmiddle">
                            <DIV>
                                <H3>Товары для красоты и здоровья</H3>
                            </DIV>
                        </DIV>
                    </A>
                </DIV>
            </DIV>
			<?endif;?>
<?if ($GLOBALS["APPLICATION"]->GetCurPage(true) != "/index.php"):?> 			
<div id="mfilter-content-container">
    <div class="centered row">
<?endif;?>