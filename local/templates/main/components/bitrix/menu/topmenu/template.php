<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?//echo '<div style="background-color:#fff;"><pre>'.print_r($arResult,"true").'</pre></div>';?>
<? if (!empty($arResult)): ?>
    <? foreach ($arResult as $key => $arItem): ?>
        <? if ($arItem['DEPTH_LEVEL'] != 1) {
            continue;
        }
        ?>
        <? if ($arItem['DEPTH_LEVEL'] == 1): ?>
            <DIV class="cat">
                <A href="<?=$arItem["LINK"];?>"><?=$key?><?=$arItem["TEXT"];?></A>
                <DIV class="sub">
                    <UL class="centered row">
                        <? foreach ($arResult as $keyInner => $arItemInner): ?>

                            <?if($keyInner <= $key) {
                                continue;
                            }
                            ?>

                            <? if ($arItemInner['DEPTH_LEVEL'] == 2): ?>
                                <LI class="col-18 col-offset-2">
                                    <DIV class="title"><A
                                            href="<?=$arItemInner["LINK"];?>"><?=$keyInner?><?=$arItemInner["TEXT"];?></A></DIV>
                                    <UL>
                                <? foreach ($arResult as $keyInnerInner => $arItemInnerInner): ?>
                                    <?if($keyInnerInner <= $keyInner) {
                                        continue;
                                    }
                                    ?>
                                    <? if ($arItemInnerInner['DEPTH_LEVEL'] == 3): ?>

                                        <LI><A href="<?=$arItemInnerInner["LINK"];?>"><?=$keyInnerInner?><?=$arItemInnerInner["TEXT"];?></A></LI>
                                    <? endif; ?>
                                    <?if($arItemInnerInner['DEPTH_LEVEL'] != 3){
                                        break;
                                    }
                                    ?>
                                <? endforeach; ?>
                                    </UL>
                                </LI>
                            <? endif; ?>
                            <? if ($arItemInner['DEPTH_LEVEL'] != 2) {
                                continue;
                            }
                            ?>
                        <? endforeach; ?>
                    </UL>
                </DIV>
                <DIV class="shadow"></DIV>
            </DIV>
        <? endif; ?>

    <? endforeach ?>
<? endif; ?>
