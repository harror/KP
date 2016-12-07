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
            
            <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"brandmenu", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "CODE",
			2 => "NAME",
			3 => "SORT",
			4 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "references",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "NAME",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "brandmenu"
	),
	false
);?>
            <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"catalog_horizontal1",
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
                <DIV class="cart">
                    <SPAN><a href="/personal/cart/" class="wishlist">Корзина</a></SPAN>
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

<?if ($GLOBALS["APPLICATION"]->GetCurPage(true) != "/index.php"):?> 			
<div id="mfilter-content-container">
    <div class="centered row">
<?endif;?>