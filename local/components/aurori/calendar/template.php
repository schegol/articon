<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?if (!empty($arResult['ITEMS'])):?>
    <div class="text_sample__accordions">
        <?foreach ($arResult['ITEMS'] as $arItem):?>
            <div class="text_sample__accordion sample_accordion">
                <div class="sample_accordion__head this--reverse js_sample_accordion_head">
                    <div class="sample_accordion__title"><?=$arItem['NAME']?></div>
                    <div class="sample_accordion__arrow"></div>
                </div>
                <div class="sample_accordion__body">
                    <div class="sample_accordion__body_content">
                        <div class="text_sample__links">
                            <?foreach ($arItem['LINKS'] as $arLink):?>
                                <?if ($arLink['TYPE'] == 'FILE'):?>
                                    <a class="text_sample__link text_sample__link--<?=$arLink['DATA']['TYPE']?> this--file" href="<?=$arLink['DATA']['PATH']?>">
                                        <span><?=$arLink['DATA']['NAME']?></span>
                                        <span><?=$arLink['DATA']['SIZE']?></span>
                                    </a>
                                <?elseif ($arLink['TYPE'] == 'LINK'):?>
                                    <a class="text_sample__link" href="<?=$arLink['DATA']['LINK']?>"><?=$arLink['DATA']['LINK_TEXT']?></a>
                                <?endif?>
                            <?endforeach?>
                        </div>
                    </div>
                </div>
            </div>
        <?endforeach?>
    </div>
<?endif?>