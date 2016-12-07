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

<DIV class="brands scrollslider row" data-slimslides="4" data-wideslides="4">
	<?foreach($arResult["ROWS"] as $arItems):?>
	<?foreach($arItems as $arItem):?>
	<?if(is_array($arItem)):?>
	<?if($arItem["PREVIEW_PICTURE"]["SRC"] != ''):?>
	<A class="brand" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
		<DIV class="center">
			<DIV class="img"><IMG src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
			</DIV>
			<DIV class="info">
				<DIV>
					<H3><?=$arItem["NAME"]?></H3>
					<P><?=$arItem["PREVIEW_TEXT"]?></P>
				</DIV>
			</DIV>
		</DIV>
	</A>
				<?endif;?>
	<?endif;?>
	<?endforeach?>
	<?endforeach?>
</DIV>
