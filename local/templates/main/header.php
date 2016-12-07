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
			
           
                
				<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"auth",
	Array(
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "",
		"REGISTER_URL" => "",
		"SHOW_ERRORS" => "N"
	)
);?>
				

			
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
            <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"topmenu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left_bottom",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "topmenu"
	),
	false
);?>


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
	<?if ($GLOBALS["APPLICATION"]->GetCurPage(true) == "/index.php")
		echo '<DIV class="content">';
	else
		echo '<DIV class="content" style="background: #f2f2f2">';
?> 
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
            <?endif;?>
<?if ($GLOBALS["APPLICATION"]->GetCurPage(true) != "/index.php"):?> 			
<div id="mfilter-content-container">
    <div class="centered row">
<?endif;?>