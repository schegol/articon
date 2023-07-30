<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

?>

        <section class="section-seo">
            <div class="bg-figure-2">
                <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/svg/bg-figure-2.svg" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="s-seo-block">
                            <div class="row">
                                <div class="col-12 col-lg-8">
                                    <div class="s-seo-block-left">
                                        <div class="s-seo-title-block">
                                            <div class="s-seo-label-wrapper">
                                                <div class="s-seo-label">
                                                    Учебный центр Articon
                                                </div>
                                                <div class="s-seo-label-bridge"></div>
                                            </div>
                                            <h2 class="s-seo-title">
                                                Заголовок SEO текста
                                            </h2>
                                        </div>
                                        <div class="s-seo-descr">
                                            Наш магазин имеет большое количество товаров для стоматологов и зубных техников. В каталоге вы
                                            найдете оборудование и материалы для Cad Cam, зутехнических лабораторий, фрезерных центров и
                                            стоматологических клиник. Широкий ассортимент товаров в наличии в наших магазинах, на складах в
                                            Санкт-Петербурге и Москве, обеспечивают нашим клиентам доставку требуемых товаров по всей
                                            территории России в кратчайшие сроки.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="s-seo-block-right">
                                        <div class="s-seo-img-block">
                                            <div class="s-seo-img">
                                                <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/mainpage/s-seo-img.png" alt="">
                                            </div>
                                            <div class="s-seo-learning-center">
                                                <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/svg/s-seo-learning-center.svg" alt="">
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

        <footer>
            <div class="footer-content-block">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-content">
                                <div class="footer-content-left">
                                    <div class="logo-wrapper">
                                        <a class="logo"<?=$page == '/' ? '' : ' href="/"'?>>
                                            <div class="logo-img">
                                                <?$APPLICATION->IncludeComponent(
                                                    "bitrix:main.include",
                                                    "",
                                                    Array(
                                                        "AREA_FILE_SHOW" => "file",
                                                        "AREA_FILE_SUFFIX" => "",
                                                        "EDIT_TEMPLATE" => "",
                                                        "PATH" => "/include/site_logo.php"
                                                    )
                                                );?>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:menu",
                                    "footer_desktop",
                                    Array(
                                        "ALLOW_MULTI_SELECT" => "N",
                                        "CHILD_MENU_TYPE" => "left",
                                        "DELAY" => "N",
                                        "MAX_LEVEL" => "1",
                                        "MENU_CACHE_GET_VARS" => array(""),
                                        "MENU_CACHE_TIME" => "3600",
                                        "MENU_CACHE_TYPE" => "N",
                                        "MENU_CACHE_USE_GROUPS" => "Y",
                                        "ROOT_MENU_TYPE" => "main",
                                        "USE_EXT" => "N"
                                    )
                                );?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-block">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-bottom">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:menu",
                                    "footer_mobile",
                                    Array(
                                        "ALLOW_MULTI_SELECT" => "N",
                                        "CHILD_MENU_TYPE" => "left",
                                        "DELAY" => "N",
                                        "MAX_LEVEL" => "1",
                                        "MENU_CACHE_GET_VARS" => array(""),
                                        "MENU_CACHE_TIME" => "3600",
                                        "MENU_CACHE_TYPE" => "N",
                                        "MENU_CACHE_USE_GROUPS" => "Y",
                                        "ROOT_MENU_TYPE" => "main",
                                        "USE_EXT" => "N"
                                    )
                                );?>
                                <div class="footer-bottom-left">
                                    <div class="copy">
                                        <?$APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            Array(
                                                "AREA_FILE_SHOW" => "file",
                                                "AREA_FILE_SUFFIX" => "",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => "/include/footer_copyright.php"
                                            )
                                        );?>
                                    </div>
                                </div>
                                <div class="footer-bottom-right">
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:news.list",
                                        "footer_social",
                                        Array(
                                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                            "ADD_SECTIONS_CHAIN" => "N",
                                            "AJAX_MODE" => "N",
                                            "AJAX_OPTION_ADDITIONAL" => "",
                                            "AJAX_OPTION_HISTORY" => "N",
                                            "AJAX_OPTION_JUMP" => "N",
                                            "AJAX_OPTION_STYLE" => "Y",
                                            "CACHE_FILTER" => "N",
                                            "CACHE_GROUPS" => "Y",
                                            "CACHE_TIME" => "36000000",
                                            "CACHE_TYPE" => "A",
                                            "CHECK_DATES" => "Y",
                                            "DETAIL_URL" => "",
                                            "DISPLAY_BOTTOM_PAGER" => "Y",
                                            "DISPLAY_DATE" => "Y",
                                            "DISPLAY_NAME" => "Y",
                                            "DISPLAY_PICTURE" => "Y",
                                            "DISPLAY_PREVIEW_TEXT" => "Y",
                                            "DISPLAY_TOP_PAGER" => "N",
                                            "FIELD_CODE" => array("", ""),
                                            "FILTER_NAME" => "",
                                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                            "IBLOCK_ID" => "1",
                                            "IBLOCK_TYPE" => "contacts",
                                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                            "INCLUDE_SUBSECTIONS" => "Y",
                                            "MEDIA_PROPERTY" => "",
                                            "MESSAGE_404" => "",
                                            "NEWS_COUNT" => "20",
                                            "PAGER_BASE_LINK_ENABLE" => "N",
                                            "PAGER_DESC_NUMBERING" => "N",
                                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                            "PAGER_SHOW_ALL" => "N",
                                            "PAGER_SHOW_ALWAYS" => "N",
                                            "PAGER_TEMPLATE" => ".default",
                                            "PAGER_TITLE" => "Новости",
                                            "PARENT_SECTION" => "",
                                            "PARENT_SECTION_CODE" => "",
                                            "PREVIEW_TRUNCATE_LEN" => "",
                                            "PROPERTY_CODE" => array("*", ""),
                                            "SEARCH_PAGE" => "/search/",
                                            "SET_BROWSER_TITLE" => "N",
                                            "SET_LAST_MODIFIED" => "N",
                                            "SET_META_DESCRIPTION" => "N",
                                            "SET_META_KEYWORDS" => "N",
                                            "SET_STATUS_404" => "N",
                                            "SET_TITLE" => "N",
                                            "SHOW_404" => "N",
                                            "SLIDER_PROPERTY" => "",
                                            "SORT_BY1" => "SORT",
                                            "SORT_BY2" => "ACTIVE_FROM",
                                            "SORT_ORDER1" => "ASC",
                                            "SORT_ORDER2" => "DESC",
                                            "STRICT_SECTION_CHECK" => "N",
                                            "TEMPLATE_THEME" => "blue",
                                            "USE_RATING" => "N",
                                            "USE_SHARE" => "N"
                                        )
                                    );?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="modals">
            <div class="fb-modal fb-modal--photos" id="modal-photos--photo">
                <div class="fb-modal-inner">
                    <div class="modal-photo-block">
                        <div class="modal-photo-title-block">
                            <div class="h2 modal-photo-title">Фото</div>
                        </div>
                        <div class="modal-photo-slider-block">
                            <div class="modal-photo-slider modal-photo-slider--course swiper-slider">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="modal-photo-slide swiper-slide">
                                            <div class="modal-photo-slide-item">
                                                <div class="modal-photo-slide-img">
                                                    <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/about/modal-photo-slide-img-1.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-photo-slide swiper-slide">
                                            <div class="modal-photo-slide-item">
                                                <div class="modal-photo-slide-img">
                                                    <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/about/modal-photo-slide-img-1.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-photo-slide swiper-slide">
                                            <div class="modal-photo-slide-item">
                                                <div class="modal-photo-slide-img">
                                                    <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/about/modal-photo-slide-img-1.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-photo-slide swiper-slide">
                                            <div class="modal-photo-slide-item">
                                                <div class="modal-photo-slide-img">
                                                    <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/about/modal-photo-slide-img-1.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-photo-slide swiper-slide">
                                            <div class="modal-photo-slide-item">
                                                <div class="modal-photo-slide-img">
                                                    <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/about/modal-photo-slide-img-1.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-photo-slide swiper-slide">
                                            <div class="modal-photo-slide-item">
                                                <div class="modal-photo-slide-img">
                                                    <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/about/modal-photo-slide-img-1.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>

                        <div class="modal-photo-thumb-slider-block">
                            <div class="modal-photo-thumb-slider modal-photo-thumb-slider--course swiper-slider">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="modal-photo-thumb-slide swiper-slide">
                                            <div class="modal-photo-thumb-slide-item">
                                                <div class="modal-photo-thumb-slide-item-img">
                                                    <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/about/modal-photo-slide-img-1.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-photo-thumb-slide swiper-slide">
                                            <div class="modal-photo-thumb-slide-item">
                                                <div class="modal-photo-thumb-slide-item-img">
                                                    <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/about/modal-photo-slide-img-1.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-photo-thumb-slide swiper-slide">
                                            <div class="modal-photo-thumb-slide-item">
                                                <div class="modal-photo-thumb-slide-item-img">
                                                    <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/about/modal-photo-slide-img-1.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-photo-thumb-slide swiper-slide">
                                            <div class="modal-photo-thumb-slide-item">
                                                <div class="modal-photo-thumb-slide-item-img">
                                                    <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/about/modal-photo-slide-img-1.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-photo-thumb-slide swiper-slide">
                                            <div class="modal-photo-thumb-slide-item">
                                                <div class="modal-photo-thumb-slide-item-img">
                                                    <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/about/modal-photo-slide-img-1.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-photo-thumb-slide swiper-slide">
                                            <div class="modal-photo-thumb-slide-item">
                                                <div class="modal-photo-thumb-slide-item-img">
                                                    <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/about/modal-photo-slide-img-1.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fb-modal fb-modal--lecturer" id="modal-lecturer-1">
                <div class="fb-modal-inner">
                    <div class="lecturer-item">
                        <div class="lecturer-item-img">
                            <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/lecturers/lecturer-item-img-1.png" alt="">
                        </div>
                        <div class="lecturer-item-info">
                            <div class="lecturer-item-name-wrapper">
                                <div class="h4 lecturer-item-name">
                                    ВСЕВОЛОД СОКОЛОВ
                                </div>
                            </div>
                            <div class="lecturer-item-state-wrapper">
                                <div class="lecturer-item-state-bridge"></div>
                                <div class="lecturer-item-state">
                                    Ведущий цифровой дизайнер Articon Санкт- Петербург.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lecturer-param-items">
                        <div class="lecturer-param-item">
                            Руководитель отдела продвинутого цифрового планирования Articon Санкт-Петербург.
                        </div>
                        <div class="lecturer-param-item">
                            Тренер Exocad
                        </div>
                        <div class="lecturer-param-item">
                            Автор методики цифрового вариатора.
                        </div>
                        <div class="lecturer-param-item">
                            Эксперт 3D-печати.
                        </div>
                        <div class="lecturer-param-item">
                            Специалист в области ведения сложных дисфункциональных пациентов в цифровом пространстве.
                        </div>
                    </div>
                    <div class="lecturer-course-slider-block">
                        <div class="h3">Ведет курсы</div>
                        <div class="lecturer-course-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--green">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--purple">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--black">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--green">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--purple">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--black">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fb-modal fb-modal--lecturer" id="modal-lecturer-2">
                <div class="fb-modal-inner">
                    <div class="lecturer-item">
                        <div class="lecturer-item-img">
                            <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/lecturers/lecturer-item-img-2.png" alt="">
                        </div>
                        <div class="lecturer-item-info">
                            <div class="lecturer-item-name-wrapper">
                                <div class="h4 lecturer-item-name">
                                    ВСЕВОЛОД СОКОЛОВ
                                </div>
                            </div>
                            <div class="lecturer-item-state-wrapper">
                                <div class="lecturer-item-state-bridge"></div>
                                <div class="lecturer-item-state">
                                    Ведущий цифровой дизайнер Articon Санкт- Петербург.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lecturer-param-items">
                        <div class="lecturer-param-item">
                            Руководитель отдела продвинутого цифрового планирования Articon Санкт-Петербург.
                        </div>
                        <div class="lecturer-param-item">
                            Тренер Exocad
                        </div>
                        <div class="lecturer-param-item">
                            Автор методики цифрового вариатора.
                        </div>
                        <div class="lecturer-param-item">
                            Эксперт 3D-печати.
                        </div>
                        <div class="lecturer-param-item">
                            Специалист в области ведения сложных дисфункциональных пациентов в цифровом пространстве.
                        </div>
                    </div>
                    <div class="lecturer-course-slider-block">
                        <div class="h3">Ведет курсы</div>
                        <div class="lecturer-course-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--green">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--purple">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--black">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--green">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--purple">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--black">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                            <div class="swiper-pagination"></div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="fb-modal fb-modal--lecturer" id="modal-lecturer-3">
                <div class="fb-modal-inner">
                    <div class="lecturer-item">
                        <div class="lecturer-item-img">
                            <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/lecturers/lecturer-item-img-3.png" alt="">
                        </div>
                        <div class="lecturer-item-info">
                            <div class="lecturer-item-name-wrapper">
                                <div class="h4 lecturer-item-name">
                                    ВСЕВОЛОД СОКОЛОВ
                                </div>
                            </div>
                            <div class="lecturer-item-state-wrapper">
                                <div class="lecturer-item-state-bridge"></div>
                                <div class="lecturer-item-state">
                                    Ведущий цифровой дизайнер Articon Санкт- Петербург.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lecturer-param-items">
                        <div class="lecturer-param-item">
                            Руководитель отдела продвинутого цифрового планирования Articon Санкт-Петербург.
                        </div>
                        <div class="lecturer-param-item">
                            Тренер Exocad
                        </div>
                        <div class="lecturer-param-item">
                            Автор методики цифрового вариатора.
                        </div>
                        <div class="lecturer-param-item">
                            Эксперт 3D-печати.
                        </div>
                        <div class="lecturer-param-item">
                            Специалист в области ведения сложных дисфункциональных пациентов в цифровом пространстве.
                        </div>
                    </div>
                    <div class="lecturer-course-slider-block">
                        <div class="h3">Ведет курсы</div>
                        <div class="lecturer-course-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--green">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--purple">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--black">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--green">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--purple">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--black">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fb-modal fb-modal--lecturer" id="modal-lecturer-4">
                <div class="fb-modal-inner">
                    <div class="lecturer-item">
                        <div class="lecturer-item-img">
                            <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/lecturers/lecturer-item-img-1.png" alt="">
                        </div>
                        <div class="lecturer-item-info">
                            <div class="lecturer-item-name-wrapper">
                                <div class="h4 lecturer-item-name">
                                    ВСЕВОЛОД СОКОЛОВ
                                </div>
                            </div>
                            <div class="lecturer-item-state-wrapper">
                                <div class="lecturer-item-state-bridge"></div>
                                <div class="lecturer-item-state">
                                    Ведущий цифровой дизайнер Articon Санкт- Петербург.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lecturer-param-items">
                        <div class="lecturer-param-item">
                            Руководитель отдела продвинутого цифрового планирования Articon Санкт-Петербург.
                        </div>
                        <div class="lecturer-param-item">
                            Тренер Exocad
                        </div>
                        <div class="lecturer-param-item">
                            Автор методики цифрового вариатора.
                        </div>
                        <div class="lecturer-param-item">
                            Эксперт 3D-печати.
                        </div>
                        <div class="lecturer-param-item">
                            Специалист в области ведения сложных дисфункциональных пациентов в цифровом пространстве.
                        </div>
                    </div>
                    <div class="lecturer-course-slider-block">
                        <div class="h3">Ведет курсы</div>
                        <div class="lecturer-course-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--green">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--purple">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--black">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--green">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--purple">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--black">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fb-modal fb-modal--lecturer" id="modal-lecturer-5">
                <div class="fb-modal-inner">
                    <div class="lecturer-item">
                        <div class="lecturer-item-img">
                            <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/lecturers/lecturer-item-img-2.png" alt="">
                        </div>
                        <div class="lecturer-item-info">
                            <div class="lecturer-item-name-wrapper">
                                <div class="h4 lecturer-item-name">
                                    ВСЕВОЛОД СОКОЛОВ
                                </div>
                            </div>
                            <div class="lecturer-item-state-wrapper">
                                <div class="lecturer-item-state-bridge"></div>
                                <div class="lecturer-item-state">
                                    Ведущий цифровой дизайнер Articon Санкт- Петербург.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lecturer-param-items">
                        <div class="lecturer-param-item">
                            Руководитель отдела продвинутого цифрового планирования Articon Санкт-Петербург.
                        </div>
                        <div class="lecturer-param-item">
                            Тренер Exocad
                        </div>
                        <div class="lecturer-param-item">
                            Автор методики цифрового вариатора.
                        </div>
                        <div class="lecturer-param-item">
                            Эксперт 3D-печати.
                        </div>
                        <div class="lecturer-param-item">
                            Специалист в области ведения сложных дисфункциональных пациентов в цифровом пространстве.
                        </div>
                    </div>
                    <div class="lecturer-course-slider-block">
                        <div class="h3">Ведет курсы</div>
                        <div class="lecturer-course-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--green">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--purple">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--black">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--green">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--purple">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--black">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fb-modal fb-modal--lecturer" id="modal-lecturer-6">
                <div class="fb-modal-inner">
                    <div class="lecturer-item">
                        <div class="lecturer-item-img">
                            <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/lecturers/lecturer-item-img-3.png" alt="">
                        </div>
                        <div class="lecturer-item-info">
                            <div class="lecturer-item-name-wrapper">
                                <div class="h4 lecturer-item-name">
                                    ВСЕВОЛОД СОКОЛОВ
                                </div>
                            </div>
                            <div class="lecturer-item-state-wrapper">
                                <div class="lecturer-item-state-bridge"></div>
                                <div class="lecturer-item-state">
                                    Ведущий цифровой дизайнер Articon Санкт- Петербург.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lecturer-param-items">
                        <div class="lecturer-param-item">
                            Руководитель отдела продвинутого цифрового планирования Articon Санкт-Петербург.
                        </div>
                        <div class="lecturer-param-item">
                            Тренер Exocad
                        </div>
                        <div class="lecturer-param-item">
                            Автор методики цифрового вариатора.
                        </div>
                        <div class="lecturer-param-item">
                            Эксперт 3D-печати.
                        </div>
                        <div class="lecturer-param-item">
                            Специалист в области ведения сложных дисфункциональных пациентов в цифровом пространстве.
                        </div>
                    </div>
                    <div class="lecturer-course-slider-block">
                        <div class="h3">Ведет курсы</div>
                        <div class="lecturer-course-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--green">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--purple">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--black">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--green">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--purple">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                    <div class="lecturer-course-slide swiper-slide">
                                        <a href="#" class="lecturer-course-slide-item lecturer-course-slide-item--black">
                                            <div class="lecturer-course-slide-item-title">Exocad Start</div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>