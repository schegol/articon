<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Индивидуальное обучение");
?>

<section class="section-learning-info">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="s-learning-info-left">
                    <div class="s-top-title-block s-top-title-block--learning-info">
                        <div class="section-title-block">
                            <h1>
                                <?=$APPLICATION->GetTitle()?>
                            </h1>
                        </div>
                    </div>
                    <div class="s-learning-info-descr">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/individual_text.php"
                            )
                        );?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="s-learning-info-right">
                    <div class="s-learning-info-img">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/individual_img.php"
                            )
                        );?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-learning-directions">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="s-top-title-block s-top-title-block--directions">
                    <div class="section-title-block">
                        <div class="section-title-label-wrapper">
                            <div class="section-title-label">
                                Направления
                            </div>
                            <div class="section-title-label-bridge"></div>
                        </div>
                        <h2 class="section-title">
                            Которым мы обучаем
                        </h2>
                    </div>
                </div>
                <div class="learning-direction-items-block">
                    <div class="learning-direction-items">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="learning-direction-item learning-direction-item--green">
                                    <div class="h3 learning-direction-item-title">Exocad</div>
                                    <div class="learning-direction-item-link-block">
                                        <a href="#" class="more-link">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="learning-direction-item learning-direction-item--purple">
                                    <div class="h3 learning-direction-item-title">Exoplan</div>
                                    <div class="learning-direction-item-link-block">
                                        <a href="#" class="more-link">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="learning-direction-item learning-direction-item--black">
                                    <div class="h3 learning-direction-item-title">Интраоральное сканирование</div>
                                    <div class="learning-direction-item-link-block">
                                        <a href="#" class="more-link">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="learning-direction-item learning-direction-item--grey">
                                    <div class="h3 learning-direction-item-title">Фрезер</div>
                                    <div class="learning-direction-item-link-block">
                                        <a href="#" class="more-link">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="learning-direction-item learning-direction-item--purple">
                                    <div class="h3 learning-direction-item-title">3D-печать</div>
                                    <div class="learning-direction-item-link-block">
                                        <a href="#" class="more-link">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="learning-direction-item learning-direction-item--green">
                                    <div class="h3 learning-direction-item-title">Exoplan</div>
                                    <div class="learning-direction-item-link-block">
                                        <a href="#" class="more-link">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="learning-direction-item learning-direction-item--grey">
                                    <div class="h3 learning-direction-item-title">Фрезер</div>
                                    <div class="learning-direction-item-link-block">
                                        <a href="#" class="more-link">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="learning-direction-item learning-direction-item--black">
                                    <div class="h3 learning-direction-item-title">Интраоральное сканирование</div>
                                    <div class="learning-direction-item-link-block">
                                        <a href="#" class="more-link">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?$APPLICATION->IncludeComponent(
    "pk:form.simple",
    "individual_form",
    Array(
        "IBLOCK_ID" => "12",
        "AJAX" => "Y",
        "LOAD_JS_CSS" => "Y",
        "SOGLASIE" => "Y",
        "SHOW_ERROR" => "Y",
    )
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>