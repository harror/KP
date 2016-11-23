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


<DIV class="slideshow row">
		<?foreach($arResult["ROWS"] as $arItems):?>
		<?foreach($arItems as $arItem):?>
		<?if(is_array($arItem)):?>
		
            <A href="<?=$arItem["PROPERTY_37"]?>">
                <IMG
                    alt="" data-lazy="<?=$arItem["PICTURE"]["SRC"]?>">
                <DIV class="billet" style="left: 4%; top: 32%; width: 53%; color: rgb(255, 255, 255);">
                    <SPAN></SPAN>
                    <H2><?=$arItem["PROPERTY_38"]?></H2>
                    <P><?=$arItem["PREVIEW_TEXT"]?>
                    </P>
                </DIV>
            </A>
		<?endif;?>	
        <?endforeach;?>
		<?endforeach;?>
		
</DIV>