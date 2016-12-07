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
<?//echo '<div style="background-color:#fff;"><pre>'.print_r($arResult,"true").'</pre></div>';?>

<DIV class="cat">
	<A href="/brands/">Бренды</A>
	<DIV class="sub">
		<UL class="centered row">
			<LI class="col-18 col-offset-2">
				<UL>
					<?foreach($arResult["ITEMS"] as $arItem):?>
					<LI><A href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?>
						</A>
					</LI>
					<?endforeach;?>
				</UL>
			</LI>
		</UL>
	</DIV>
</DIV>

