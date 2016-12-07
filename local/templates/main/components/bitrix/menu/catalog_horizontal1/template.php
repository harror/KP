<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

if (empty($arResult["ALL_ITEMS"]))
    return;

CUtil::InitJSCore();

$menuBlockId = "catalog_menu_" . $this->randString();
?>

<? foreach ($arResult["MENU_STRUCTURE"] as $itemID => $arColumns): ?>     <!-- first level-->
    <? $existPictureDescColomn = ($arResult["ALL_ITEMS"][$itemID]["PARAMS"]["picture_src"] || $arResult["ALL_ITEMS"][$itemID]["PARAMS"]["description"]) ? true : false; ?>
    <DIV class="cat">
        <a
            href="<?= $arResult["ALL_ITEMS"][$itemID]["LINK"] ?>"
        >
            <?= $arResult["ALL_ITEMS"][$itemID]["TEXT"] ?>
        </a>
        <? if (is_array($arColumns) && count($arColumns) > 0): ?>

            <DIV class="sub">
                <? foreach ($arColumns as $key => $arRow): ?>
                    <ul class="centered row">
                        <? foreach ($arRow as $itemIdLevel_2 => $arLevel_3): ?>  <!-- second level-->
                            <LI class="col-18 col-offset-2">
                                <DIV class="title"><A
                                        href="<?= $arResult["ALL_ITEMS"][$itemIdLevel_2]["LINK"] ?>"
                                    >
                                        <span><?= $arResult["ALL_ITEMS"][$itemIdLevel_2]["TEXT"] ?></span>
                                    </a></div>
                                <? if (is_array($arLevel_3) && count($arLevel_3) > 0): ?>
                                    <ul>
                                        <? foreach ($arLevel_3 as $itemIdLevel_3): ?>    <!-- third level-->
                                            <li class="bx-nav-3-lvl">
                                                <a
                                                    href="<?= $arResult["ALL_ITEMS"][$itemIdLevel_3]["LINK"] ?>"
                                                >
                                                    <?= $arResult["ALL_ITEMS"][$itemIdLevel_3]["TEXT"] ?>
                                                </a>
                                            </li>
                                        <? endforeach; ?>
                                    </ul>
                                <? endif ?>
                            </li>
                        <? endforeach; ?>
                    </ul>
                <? endforeach; ?>

            </div>
        <? endif ?>
    </div>
<? endforeach; ?>
