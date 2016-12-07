<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>
<?use Bitrix\Main\Localization\Loc;use Bitrix\Main\Page\Asset;Loc::loadMessages(__FILE__);?>
<DIV class="row">
    
</DIV>
<?if ($GLOBALS["APPLICATION"]->GetCurPage(true) != "/index.php"):?> 
</div>
</div>
<?endif;?>
<?if ($GLOBALS["APPLICATION"]->GetCurPage(true) == "/index.php"):?> 
<H2><A href="/brandlist/">Бренды</A></H2>
    <?$APPLICATION->IncludeComponent("bitrix:photo.section", "slidercatalog", Array(
	"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем фотографии
		"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки фотографий в разделе
		"FIELD_CODE" => array(	// Поля
			0 => "ID",
			1 => "NAME",
			2 => "SORT",
			3 => "PREVIEW_TEXT",
			4 => "PREVIEW_PICTURE",
			5 => "DETAIL_TEXT",
			6 => "DETAIL_PICTURE",
			7 => "",
		),
		"FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
		"IBLOCK_ID" => "5",	// Инфоблок
		"IBLOCK_TYPE" => "references",	// Тип инфоблока
		"LINE_ELEMENT_COUNT" => "3",	// Количество фотографий, выводимых в одной строке таблицы
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Фотографии",	// Название категорий
		"PAGE_ELEMENT_COUNT" => "20",	// Количество элементов на странице
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"SECTION_CODE" => "",	// Код раздела
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"SECTION_USER_FIELDS" => array(	// Свойства раздела
			0 => "",
			1 => "",
		),
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

<?endif;?>
</DIV>

<DIV id="popupinfo"></DIV>
</DIV>
</DIV>
<FOOTER>
    <DIV class="centered row">
        <DIV class="first row">
            <DIV class="col-26">
                <DIV class="title">Телефон</DIV>
                <DIV class="ya-phone1"><SPAN class="ya-phone-1">
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
                    </SPAN></DIV>
            </DIV>
            <DIV class="col-35 col-offset-2 socials">
               
            </DIV>
            <DIV class="col-35 col-offset-2 subscribe">
                <DIV class="title">Рассылка</DIV>
                <FORM name="subscribe-form" action="/index.php?route=expertsender/subscribers"
                      method="post"><INPUT name="email" class="col-70 col-sm-62" type="email" placeholder="Введите ваш email" value="">
                    <BUTTON class="col-offset-2 col-28 col-sm-36"
                            type="submit">Подписаться</BUTTON>
                </FORM>
                <DIV class="subscribe-confirm">
                    <H3>Еженедельная рассылка</H3>
                    <P>Подписывайтесь, чтобы узнать самым первым о новых поступлениях, распродажах и
                        акциях
                    </P>
                    <FORM>
                        <DIV class="warning"></DIV>
                        <LABEL for="confirm-email">Эл. почта</LABEL>
                        <INPUT name="email" class="fluid" id="confirm-email" type="email">
                        <LABEL for="confirm2-email">Подтвердить эл. почту</LABEL>
                        <INPUT name="email-confirm" class="fluid" id="confirm2-email" type="email">
                        <BUTTON class="btn btn-orange fluid"
                                type="submit">Подписаться</BUTTON>
                    </FORM>
                </DIV>
                <DIV class="subscribe-confirm-texts">
                    <DIV class="thankyou">
                        <H3>Спасибо!</H3>
                    </DIV>
                    <DIV class="empty">E-mail адрес не введен</DIV>
                    <DIV class="not-match">E-mail адрес не совпадает</DIV>
                </DIV>
            </DIV>
        </DIV>
        <HR>
        <DIV class="second row">
            <DIV class="col-40">
                <DIV class="logo"><?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"
                        )
                    );?></DIV>
                127051,
                Зеленоград,<BR>к.903<BR>Режим работы<BR>                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/worktime.php"
                    )
                );?> ежедневно
            </DIV>
            <DIV class="col-45 col-sm-50 col-offset-15 col-sm-offset-10 links">
                <DIV class="col-35">
                    <UL>
                        <LI><A href="/contact/">Контакты</A>
                        <LI><A href="/o-magazine/">О магазине</A>
                        <LI><A href="/pressa-o-nas/">Пресса о нас</A>
                        <LI><A href="/cooperation/">Сотрудничество</A>
                        <LI><A href="/job/">Вакансии</A>
                        </LI>
                    </UL>
                </DIV>
                <DIV class="col-42">
                    <UL>
                        <LI><A href="/faq/">Помощь покупателю</A>
                        <LI><A href="/delivery/">Доставка и оплата</A>
                        <LI><A href="/return-items/">Обмен и возврат</A>
                        <LI><A href="/loyalty-programm/">Программа лояльности</A>
                        </LI>
                    </UL>
                </DIV>
                <DIV class="col-23">
                    <UL>
                        <LI><A href="/news/">Новости</A>
                        <LI><A href="/sneakerhead/">Sneakerhead</A>
                        <LI><A href="/yeezy/">Yeezy</A>
                        <LI><A href="/sneakerhead/adidas-nmd/">NMD</A>
                        <LI><A href="/game/">Игры</A>
                        </LI>
                    </UL>
                </DIV>
            </DIV>
        </DIV>
        <DIV class="partners row">
            <DIV class="col-70 payment"><IMG title="MasterCard" alt="оплата MasterCard в интернет магазине Брендовая одежда"
                                             src="<?=SITE_TEMPLATE_PATH;?>/images/mastercard.gif"><IMG
                    title="Visa" alt="оплата Visa в интернет магазине Brandshop.ru" src="<?=SITE_TEMPLATE_PATH;?>/images/visa.gif"><IMG
                    title="PayPal" alt="оплата PayPal в интернет магазине Brandshop.ru" src="<?=SITE_TEMPLATE_PATH;?>/images/paypal.gif"></DIV>
            <DIV class="col-30 taright dealer"><IMG title="Nike" alt="Nike" src="<?=SITE_TEMPLATE_PATH;?>/images/nike.gif"></DIV>
        </DIV>
    </DIV>
    <DIV class="copy">
        <DIV class="centered row"><?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => SITE_TEMPLATE_PATH."/include_areas/worktime.php"
                )
            );?>
            ©<SPAN>Брендовая одежда, 2016</SPAN>&nbsp; &nbsp; <A href="/sitemap/">Карта
                сайта</A> &nbsp; &nbsp; <A href="/oferta/">Пользовательское
                соглашение</A> &nbsp; &nbsp; <A href="/usloviya-ispolsovaniya-sayta/">Условия
                использования сайта</A>
        </DIV>
    </DIV>
</FOOTER>
<DIV id="chat">
    <DIV class="phonecall">
        <DIV class="text">Заказать обратный звонок</DIV>
        <IMG src="<?=SITE_TEMPLATE_PATH;?>/images/phonecall.png">
    </DIV>
    <DIV class="startchat">
        <DIV class="text">Напишите нам, мы онлайн</DIV>
        <IMG src="<?=SITE_TEMPLATE_PATH;?>/images/bubble.png">
    </DIV>
    <DIV class="close"></DIV>
    <IMG src="<?=SITE_TEMPLATE_PATH;?>/images/bubble.png">
</DIV>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH;?>/js/lang-ru.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH;?>/js/third.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH;?>/js/bs.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH;?>/js/jquery.slides.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH;?>/js/2.js"></script>

</BODY>
</HTML>
