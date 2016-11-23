<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<DIV class="actual scrollslider row" data-slimslides="3" data-wideslides="4">
<?foreach($arResult["ROWS"] as $arItems):?>
<?foreach($arItems as $arItem):?>
			<?if(is_array($arItem)):?>			
                <DIV class="cat">
                    <A href="/muzhskoe/obuv/krossovki/zimnie/">
                        <DIV class="img"><IMG src="<?=$arItem["PICTURE"]["SRC"]?>"
								width="305"
								height="242">
                        </DIV>
                        <DIV class="info vmiddle">
                            <DIV>
                                <H3><?=$arItem["NAME"]?></H3>
                            </DIV>
                        </DIV>
                    </A>
                </DIV>
			<?endif?>

<?endforeach?>
<?endforeach?>
</DIV>

