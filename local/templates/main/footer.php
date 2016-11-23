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
<DIV class="brands scrollslider row" data-slimslides="4" data-wideslides="4">

    <A
        class="brand" href="/norse-projects/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/norse-1-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Norse Projects</H3>
                    <P>Плавные линии, пастельные тона и отменные материалы</P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/saucony/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/saucony-1-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Saucony</H3>
                    <P>Новая коллекция кроссовок уважаемой заокеанской
                        марки
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/barbour/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/barbour-1-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Barbour</H3>
                    <P>Настоящая классика британского стиля с безупречной
                        репутацией
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/lyle-and-scott/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/ls-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Lyle &amp; Scott</H3>
                    <P>Сочетание практичного спортивного стиля и британской
                        мужественности
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/brooks-england/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/brooks-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Brooks England</H3>
                    <P>Неотъемлемая часть истории развития велосипедной
                        культуры
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/stone-island/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/stone-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Stone Island</H3>
                    <P>Постоянные эксперименты с тканями и неповторимые техники
                        производства
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/clarks-originals/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/clarks-1-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Clarks Originals</H3>
                    <P>Обувной бренд с огромной историей и узнаваемым
                        стилем
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/han-kjobenhavn/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/han-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Han Kjobenhavn</H3>
                    <P>Дух скандинавской авангардной сцены и силуэты из
                        90-х
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/fjallraven/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/fjallraven-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Fjallraven</H3>
                    <P>Защита от ветра, влаги и других климатических
                        напастей
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/herschel-supply-co/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/herschel-supply-co-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Herschel Supply Co.</H3>
                    <P>Канадская марка, специализирующаяся на рюкзаках</P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/cp-company/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/cp-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>C.P. Company</H3>
                    <P>Итальянская марка, известная экспериментами с тканями и богатыми
                        архивами
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/baxter-of-california/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/baxter-california-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Baxter of California</H3>
                    <P>Олдскульный подход к косметическим традициям вкупе с созданием новых
                        продуктов
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/arcteryx/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/arcteryx-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Arcteryx</H3>
                    <P>Технологичная канадская марка, экипирующая
                        спортсменов-экстремалов
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand"
       href="/red-wing-shoes/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/red-wings-shoes-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Red Wing Shoes</H3>
                    <P>Водонепроницаемые ботинки из премиальной кожи, созданные
                        вручную
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/evisu/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/evisu-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Evisu</H3>
                    <P>Высококачественный деним и трикотаж от известного японского
                        бренда.
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/reigning-champ/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/rc-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Reigning Champ</H3>
                    <P>Минимум принтов, максимум комфортных материалов и уважения к
                        деталям
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/penfield/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/penfield-1-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Penfield</H3>
                    <P>То, что надо для длительных прогулок на открытых
                        пространствах
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/ellesse/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/ellesse-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Ellesse</H3>
                    <P>Целая эпоха спортивных побед — как на корте, так и вне
                        его
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/nanamica/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/brandshop-nanamica-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Nanamica</H3>
                    <P>Актуальная японская марка с современным взглядом на
                        моду
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/peaceful-hooligan/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/pf-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Peaceful Hooligan</H3>
                    <P>Марка, вдохновлённая яркими событиями нашей
                        молодости
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/mismo/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/mismo-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Mismo</H3>
                    <P>Аксессуары, вдохновлённые архитектурой и геометрическими
                        формами
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/master-piece/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/master-piece-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Master-piece</H3>
                    <P>Японский дизайн в его лучшем проявлении</P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/maison-kitsune/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/kitsune-1-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Maison Kitsune</H3>
                    <P>Аккуратная городская марка, предпочитающая натуральные
                        материалы
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/stussy/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/stuss-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Stussy</H3>
                    <P>Современное прочтение моды субкультур</P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/carhartt-wip/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/carhartt-1-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Carhartt WIP</H3>
                    <P>Современный городской дизайн и узнаваемые силуэты</P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/reebok/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/reebok-1-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Reebok</H3>
                    <P>Проверенные годами силуэты и все свежие релизы</P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/hestra/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/hestra-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Hestra</H3>
                    <P>Аксессуары из натуральных материалов, совмещающие стиль и
                        комфорт
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/champion/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/champion-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Champion</H3>
                    <P>Настоящие эксперты в области спорта, знающие о хлопке
                        всё
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/nike/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/nike-1-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Nike</H3>
                    <P>Большой выбор обуви гиганта спортивной индустрии</P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/hackett/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/hackett-1-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Hackett</H3>
                    <P>Аккуратный и продуманный стиль в духе старой доброй
                        Британии
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/new-balance/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/nb-1-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>New Balance</H3>
                    <P>Максимальный комфорт вкупе с многолетним опытом
                        производства
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/property-of/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/proprety-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Property Of…</H3>
                    <P>Надежные и функциональные аксессуары родом из Амстердама </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/the-north-face/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/the-north-face-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>The North Face</H3>
                    <P>Главные эксперты по практичной походной одежде</P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/uniformes-generale/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/ug-1-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Uniformes Generale</H3>
                    <P>Современный подход к традиционной британской моде</P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/aquascutum/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/aquascutum-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Aquascutum</H3>
                    <P>Британский бренд, прославившийся своей «клубной
                        клеткой»
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/fred-perry/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/fred-perry-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Fred Perry</H3>
                    <P>Понятные силуэты и неизменный лавровый венок</P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/adidas-originals/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/adidas-1-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Adidas Originals</H3>
                    <P>Избранная классика и самые интересные релизы легендарного
                        бренда
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/asics/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/asics-1-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>ASICS</H3>
                    <P>Лучшие модели прославленной японской компании</P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/lacoste/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/lacoste-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Lacoste</H3>
                    <P>Проверенные временем силуэты, получившие новую
                        жизнь
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/armor-lux/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/armor-lux-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Armor-Lux</H3>
                    <P>Дух Франции, натуральные материалы и высокое качество
                        исполнения
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/casio/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/casio-1-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>CASIO</H3>
                    <P>Ударопрочные часы на страже бесконечных инноваций</P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/napapijri/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/napapijri-1-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Napapijri</H3>
                    <P>Эффектные коллекции в ярких цветах и лёгких
                        материалах
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/weekend-offender/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/wo-1-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Weekend Offender</H3>
                    <P>Традиционные силуэты, понятные принты и отсылки к субкультурам
                        прошлого
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/levis/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/levis-1-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Levi's</H3>
                    <P>Эталонный деним культовой американской компании</P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/common-projects/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/common-projects-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Common Projects</H3>
                    <P>Премиальная обувь для всех любителей лаконичного
                        стиля
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/patagonia/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/patagonia-1-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Patagonia</H3>
                    <P>Функциональная и практичная одежда, созданная с любовью к
                        природе
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/puma/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/puma-1-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Puma</H3>
                    <P>Новинки и коллаборации старейшего немецкого бренда</P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/universal-works/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/uw=325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Universal Works</H3>
                    <P>Смешение рабочей эстетики с одеждой для самых
                        прогрессивных
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
    <A class="brand" href="/billionaire-boys-club/">
        <DIV class="center">
            <DIV class="img"><IMG src="<?=SITE_TEMPLATE_PATH;?>/images/bbc-325x223-325x223.jpg">
            </DIV>
            <DIV class="info">
                <DIV>
                    <H3>Billionaire Boys Club</H3>
                    <P>Самые смелые идеи улиц двух континентов, воплощённые в ярких
                        вещах
                    </P>
                </DIV>
            </DIV>
        </DIV>
    </A>
</DIV>
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
                <DIV class="title">Социальные сети</DIV>
                <UL>
                    <LI>
                        <A class="ig" href="https://instagram.com/brandshopru/"
                           target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 32 32">
                                <path d="M 16 9.4 h 3.2 l 1.5 0.3 a 2.7 2.7 0 0 1 1.5 1.5 a 4.4 4.4 0 0 1 0.3 1.5 c 0 0.8 0 1.1 0 3.2 s 0 2.4 0 3.2 a 4.4 4.4 0 0 1 -0.3 1.5 a 2.7 2.7 0 0 1 -1.5 1.5 l -1.5 0.3 H 12.8 l -1.5 -0.3 a 2.7 2.7 0 0 1 -1.5 -1.5 a 4.4 4.4 0 0 1 -0.3 -1.5 c 0 -0.8 0 -1.1 0 -3.2 s 0 -2.4 0 -3.2 a 4.4 4.4 0 0 1 0.3 -1.5 a 2.7 2.7 0 0 1 1.5 -1.5 l 1.5 -0.3 H 16 M 16 8 H 12.7 a 5.9 5.9 0 0 0 -1.9 0.4 a 4.1 4.1 0 0 0 -2.3 2.3 A 5.9 5.9 0 0 0 8 12.7 c 0 0.8 0 1.1 0 3.3 s 0 2.5 0.1 3.3 a 5.9 5.9 0 0 0 0.4 1.9 a 4.1 4.1 0 0 0 2.3 2.3 a 5.9 5.9 0 0 0 1.9 0.4 h 6.6 a 5.9 5.9 0 0 0 1.9 -0.4 a 4.1 4.1 0 0 0 2.3 -2.3 a 5.9 5.9 0 0 0 0.4 -1.9 c 0 -0.8 0 -1.1 0 -3.3 s 0 -2.4 0 -3.3 a 5.9 5.9 0 0 0 -0.4 -1.9 a 4.1 4.1 0 0 0 -2.3 -2.3 A 5.9 5.9 0 0 0 19.3 8 H 16 Z"
                                />
                                <path d="M 16 11.9 A 4.1 4.1 0 1 0 20.1 16 A 4.1 4.1 0 0 0 16 11.9 h 0 Z m 0 6.8 A 2.7 2.7 0 1 1 18.7 16 h 0 A 2.7 2.7 0 0 1 16 18.7 Z"
                                />
                                <circle cx="20.3" cy="11.7" r="1" />
                            </svg>
                        </A>
                    </LI>
                    <LI>
                        <A class="vk" href="https://vk.com/brandshop_ru" target="_blank">
                            <svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path d="M 15.8 21.5 h 1.1 l 0.5 -0.2 a 0.8 0.8 0 0 0 0.1 -0.5 s 0 -1.4 0.6 -1.6 s 1.5 1.4 2.4 2 a 1.7 1.7 0 0 0 1.2 0.4 H 24 s 1.2 -0.1 0.6 -1 a 7.9 7.9 0 0 0 -1.7 -2 c -1.4 -1.3 -1.3 -1.1 0.5 -3.5 s 1.5 -2.3 1.4 -2.7 a 1 1 0 0 0 -0.9 -0.3 h -3 l -0.2 0.3 a 15.4 15.4 0 0 1 -1 2.1 c -1.2 2 -1.7 2.1 -1.8 2 s -0.3 -1.2 -0.3 -1.8 s 0.3 -2.8 -0.6 -3 H 15.6 a 5.7 5.7 0 0 0 -2.2 0.2 c -0.3 0.1 -0.5 0.5 -0.4 0.5 a 1.2 1.2 0 0 1 0.8 0.4 a 2.6 2.6 0 0 1 0.3 1.2 s 0.2 2.3 -0.4 2.6 s -0.9 -0.2 -1.9 -2 a 16.9 16.9 0 0 1 -0.9 -2 l -0.2 -0.3 L 10.2 12 H 7.7 l -0.5 0.2 a 0.5 0.5 0 0 0 0 0.4 s 2 4.6 4.2 6.9 a 6.1 6.1 0 0 0 4.4 2 h 0 Z"
                                />
                            </svg>
                        </A>
                    </LI>
                    <LI>
                        <A class="fb" href="https://www.facebook.com/brandshop.ru"
                           target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 32 32">
                                <path d="M 16.6 23.8 V 16.1 h 2.5 l 0.4 -2.9 H 16.6 V 11.3 a 1.2 1.2 0 0 1 1.5 -1.4 h 1.5 V 7.2 H 17.3 A 3.6 3.6 0 0 0 13.5 11 v 2.2 H 11 v 2.9 h 2.6 v 7.6 h 3.1 Z"
                                />
                            </svg>
                        </A>
                    </LI>
                    <LI>
                        <A class="yt" href="https://www.youtube.com/user/brandshoprus" target="_blank">
                            <svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path d="M 23.6 12.9 a 2.2 2.2 0 0 0 -2.3 -2.2 L 16 10.5 H 10.7 a 2.2 2.2 0 0 0 -2.3 2.2 a 27.5 27.5 0 0 0 0 6.2 c 0.3 1.9 1 2.1 2.3 2.3 s 4.7 0.2 5.4 0.2 s 4.1 0 5.4 -0.1 s 2 -0.4 2.3 -2.3 A 27.6 27.6 0 0 0 23.6 12.9 Z m -9.2 5.3 V 13.8 l 4.1 2.1 Z"
                                />
                            </svg>
                        </A>
                    </LI>
                    <LI>
                        <A class="tw" href="https://twitter.com/brandshopru" target="_blank">
                            <svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path d="M 24.7 11.5 l -1.8 0.5 a 3.1 3.1 0 0 0 1.4 -1.7 a 6.3 6.3 0 0 1 -2 0.8 a 3.2 3.2 0 0 0 -5.4 2.9 a 9 9 0 0 1 -6.5 -3.3 a 3.1 3.1 0 0 0 1 4.2 a 3.1 3.1 0 0 1 -1.4 -0.4 h 0 a 3.2 3.2 0 0 0 2.6 3.1 H 11 a 3.1 3.1 0 0 0 3 2.2 a 6.4 6.4 0 0 1 -3.9 1.4 H 9.3 a 8.9 8.9 0 0 0 4.8 1.4 a 8.9 8.9 0 0 0 9 -9 V 13.1 A 6.4 6.4 0 0 0 24.7 11.5 Z"
                                />
                            </svg>
                        </A>
                    </LI>
                </UL>
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
