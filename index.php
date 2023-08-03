<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Articon — Главная страница');
?>

<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "index_slider",
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
        "IBLOCK_ID" => "2",
        "IBLOCK_TYPE" => "content",
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

<?$APPLICATION->IncludeComponent(
    "aurori:calendar",
    "",
    Array(
        "IBLOCK_ID" => "9",
        "MONTHS" => "3",
    )
);?>
<?/*
<section class="section-mp-calendar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mp-calendar-top">
                    <div class="mp-calendar-top-left">
                        <div class="mp-calendar-top-title-block">
                            <div class="mp-calendar-top-year-wrapper">
                                <div class="mp-calendar-top-year">
                                    2023 год
                                </div>
                                <div class="mp-calendar-top-year-bridge">

                                </div>
                            </div>
                            <h2 class="mp-calendar-top-title">
                                Календарь событий
                            </h2>
                        </div>
                    </div>
                    <div class="mp-calendar-top-center">
                        <div class="mp-calendar-top-bridge">

                        </div>
                    </div>
                    <div class="mp-calendar-top-right">
                        <div class="mp-calendar-top-slider-block">
                            <div class="mp-calendar-top-slider swiper-slider">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="mp-calendar-top-slide swiper-slide">
                                            <div class="mp-calendar-top-slide-item">
                                                Январь
                                            </div>
                                        </div>
                                        <div class="mp-calendar-top-slide swiper-slide">
                                            <div class="mp-calendar-top-slide-item">
                                                Февраль
                                            </div>
                                        </div>
                                        <div class="mp-calendar-top-slide swiper-slide">
                                            <div class="mp-calendar-top-slide-item">
                                                Март
                                            </div>
                                        </div>
                                        <div class="mp-calendar-top-slide swiper-slide">
                                            <div class="mp-calendar-top-slide-item">
                                                Апрель
                                            </div>
                                        </div>
                                        <div class="mp-calendar-top-slide swiper-slide">
                                            <div class="mp-calendar-top-slide-item">
                                                Июнь
                                            </div>
                                        </div>
                                        <div class="mp-calendar-top-slide swiper-slide">
                                            <div class="mp-calendar-top-slide-item">
                                                Июль
                                            </div>
                                        </div>
                                        <div class="mp-calendar-top-slide swiper-slide">
                                            <div class="mp-calendar-top-slide-item">
                                                Август
                                            </div>
                                        </div>
                                        <div class="mp-calendar-top-slide swiper-slide">
                                            <div class="mp-calendar-top-slide-item">
                                                Сентябрь
                                            </div>
                                        </div>
                                        <div class="mp-calendar-top-slide swiper-slide">
                                            <div class="mp-calendar-top-slide-item">
                                                Октябрь
                                            </div>
                                        </div>
                                        <div class="mp-calendar-top-slide swiper-slide">
                                            <div class="mp-calendar-top-slide-item">
                                                Ноябрь
                                            </div>
                                        </div>
                                        <div class="mp-calendar-top-slide swiper-slide">
                                            <div class="mp-calendar-top-slide-item">
                                                Декабрь
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mp-calendar-block">
                    <div class="mp-calendar-list">
                        <div class="mp-calendar">
                            <div class="mp-calendar-heading">
                                <div class="mp-calendar-h-col-wrapper">
                                    <div class="mp-calendar-h-col">
                                        Пн
                                    </div>
                                </div>
                                <div class="mp-calendar-h-col-wrapper">
                                    <div class="mp-calendar-h-col">
                                        Вт
                                    </div>
                                </div>
                                <div class="mp-calendar-h-col-wrapper">
                                    <div class="mp-calendar-h-col">
                                        Ср
                                    </div>
                                </div>
                                <div class="mp-calendar-h-col-wrapper">
                                    <div class="mp-calendar-h-col">
                                        Чт
                                    </div>
                                </div>
                                <div class="mp-calendar-h-col-wrapper">
                                    <div class="mp-calendar-h-col">
                                        Пт
                                    </div>
                                </div>
                                <div class="mp-calendar-h-col-wrapper">
                                    <div class="mp-calendar-h-col mp-calendar-h-col--weekend">
                                        Сб
                                    </div>
                                </div>
                                <div class="mp-calendar-h-col-wrapper">
                                    <div class="mp-calendar-h-col mp-calendar-h-col--weekend">
                                        Вс
                                    </div>
                                </div>
                            </div>
                            <div class="mp-calendar-items">
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item">
                                        <div class="mp-calendar-item__day">1</div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item">
                                        <div class="mp-calendar-item__day">2</div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item mp-calendar-item--green">
                                        <div class="mp-calendar-item__day">3</div>
                                        <div class="mp-calendar-item__avatar">
                                            <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/mainpage/mp-calendar-item-avatar-1.png" alt="">
                                        </div>
                                        <div class="mp-calendar-item__descr">
                                            Цифровое моделирование расширяющих несъёмных аппаратов Цифровое моделирование расширяющих
                                            несъёмных аппаратов
                                        </div>
                                        <div class="mp-calendar-item__arrow">
                                            <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/svg/mp-calendar-item-arrow.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item">
                                        <div class="mp-calendar-item__day">4</div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item">
                                        <div class="mp-calendar-item__day">5</div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item mp-calendar-item--weekend">
                                        <div class="mp-calendar-item__day">6</div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item mp-calendar-item--weekend">
                                        <div class="mp-calendar-item__day">7</div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item">
                                        <div class="mp-calendar-item__day">8</div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item">
                                        <div class="mp-calendar-item__day">9</div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper mp-calendar-item-wrapper--two-days">
                                    <div class="mp-calendar-item mp-calendar-item--purple">
                                        <div class="mp-calendar-item__day">10-11</div>
                                        <div class="mp-calendar-item__avatar">
                                            <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/mainpage/mp-calendar-item-avatar-2.png" alt="">
                                        </div>
                                        <div class="mp-calendar-item__descr">
                                            Цифровое моделирование расширяющих несъёмных аппаратов Цифровое моделирование расширяющих
                                            несъёмных аппаратов
                                        </div>
                                        <div class="mp-calendar-item__arrow">
                                            <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/svg/mp-calendar-item-arrow.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item">
                                        <div class="mp-calendar-item__day">12</div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item mp-calendar-item--weekend">
                                        <div class="mp-calendar-item__day">13</div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item mp-calendar-item--weekend">
                                        <div class="mp-calendar-item__day">14</div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper mp-calendar-item-wrapper--two-days">
                                    <div class="mp-calendar-item mp-calendar-item--purple">
                                        <div class="mp-calendar-item__day">15-16</div>
                                        <div class="mp-calendar-item__avatar">
                                            <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/mainpage/mp-calendar-item-avatar-3.png" alt="">
                                        </div>
                                        <div class="mp-calendar-item__descr">
                                            Цифровое моделирование расширяющих несъёмных аппаратов Цифровое моделирование расширяющих
                                            несъёмных аппаратов
                                        </div>
                                        <div class="mp-calendar-item__arrow">
                                            <img class="image" src="images/svg/mp-calendar-item-arrow.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item mp-calendar-item--green">
                                        <div class="mp-calendar-item__day">17</div>
                                        <div class="mp-calendar-item__avatar">
                                            <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/mainpage/mp-calendar-item-avatar-4.png" alt="">
                                        </div>
                                        <div class="mp-calendar-item__descr">
                                            Цифровое моделирование расширяющих несъёмных аппаратов Цифровое моделирование расширяющих
                                            несъёмных аппаратов
                                        </div>
                                        <div class="mp-calendar-item__arrow">
                                            <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/svg/mp-calendar-item-arrow.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item">
                                        <div class="mp-calendar-item__day">18</div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item">
                                        <div class="mp-calendar-item__day">19</div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item mp-calendar-item--weekend">
                                        <div class="mp-calendar-item__day">20</div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item mp-calendar-item--weekend">
                                        <div class="mp-calendar-item__day">21</div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item">
                                        <div class="mp-calendar-item__day">22</div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item">
                                        <div class="mp-calendar-item__day">23</div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item">
                                        <div class="mp-calendar-item__day">24</div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item">
                                        <div class="mp-calendar-item__day">25</div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item mp-calendar-item--green">
                                        <div class="mp-calendar-item__day">26</div>
                                        <div class="mp-calendar-item__avatar">
                                            <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/mainpage/mp-calendar-item-avatar-4.png" alt="">
                                        </div>
                                        <div class="mp-calendar-item__descr">
                                            Цифровое моделирование расширяющих несъёмных аппаратов Цифровое моделирование расширяющих
                                            несъёмных аппаратов
                                        </div>
                                        <div class="mp-calendar-item__arrow">
                                            <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/svg/mp-calendar-item-arrow.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item mp-calendar-item--weekend">
                                        <div class="mp-calendar-item__day">27</div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item mp-calendar-item--weekend">
                                        <div class="mp-calendar-item__day">28</div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item">
                                        <div class="mp-calendar-item__day">29</div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item">
                                        <div class="mp-calendar-item__day">30</div>
                                    </div>
                                </div>
                                <div class="mp-calendar-item-wrapper">
                                    <div class="mp-calendar-item">
                                        <div class="mp-calendar-item__day">31</div>
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
*/?>

<section class="section-mp-news">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mp-news-block">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "news_index",
                                Array(
                                    "ACTIVE_DATE_FORMAT" => "d / m / Y",
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
                                    "FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "ACTIVE_FROM", ""),
                                    "FILTER_NAME" => "",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "11",
                                    "IBLOCK_TYPE" => "content",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "INCLUDE_SUBSECTIONS" => "Y",
                                    "MEDIA_PROPERTY" => "",
                                    "MESSAGE_404" => "",
                                    "NEWS_COUNT" => "2",
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
                                    "PROPERTY_CODE" => array("AUTHOR", ""),
                                    "SEARCH_PAGE" => "/search/",
                                    "SET_BROWSER_TITLE" => "N",
                                    "SET_LAST_MODIFIED" => "N",
                                    "SET_META_DESCRIPTION" => "N",
                                    "SET_META_KEYWORDS" => "N",
                                    "SET_STATUS_404" => "N",
                                    "SET_TITLE" => "N",
                                    "SHOW_404" => "N",
                                    "SLIDER_PROPERTY" => "",
                                    "SORT_BY1" => "ACTIVE_FROM",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER1" => "DESC",
                                    "SORT_ORDER2" => "ASC",
                                    "STRICT_SECTION_CHECK" => "N",
                                    "TEMPLATE_THEME" => "blue",
                                    "USE_RATING" => "N",
                                    "USE_SHARE" => "N",
                                    "ALL_LINK" => "/news/",
                                )
                            );?>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="mp-news-block-right">
                                <div class="mp-news-photo-block">
                                    <div class="mp-news-photo-title">
                                        Фото
                                    </div>
                                    <div class="mp-news-photo-items-block">
                                        <div class="mp-news-photo-items">
                                            <div class="mp-news-photo-item-wrapper">
                                                <a href="#modal-photos--photo" class="mp-news-photo-item modal-btn">
                                                    <div class="mp-news-photo-item__img">
                                                        <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/mainpage/mp-news-photo-item-img-1.png" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="mp-news-photo-item-wrapper">
                                                <a href="#modal-photos--photo" class="mp-news-photo-item modal-btn">
                                                    <div class="mp-news-photo-item__img">
                                                        <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/mainpage/mp-news-photo-item-img-2.png" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="mp-news-photo-item-wrapper">
                                                <a href="#modal-photos--photo" class="mp-news-photo-item modal-btn">
                                                    <div class="mp-news-photo-item__img">
                                                        <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/mainpage/mp-news-photo-item-img-3.png" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="mp-news-photo-item-wrapper">
                                                <a href="#modal-photos--photo" class="mp-news-photo-item modal-btn">
                                                    <div class="mp-news-photo-item-more">
                                                        <div class="mp-news-photo-item-more__icon">
                                                            <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/svg/mp-news-photo-item-more-icon.svg" alt="">
                                                        </div>
                                                        <div class="mp-news-photo-item-more__title">
                                                            48 Фото
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mp-news-video-block">
                                    <div class="mp-news-video-top">
                                        <div class="mp-news-video-top-title-block">
                                            <div class="mp-news-video-top-title">
                                                Видео отчеты
                                            </div>
                                        </div>
                                        <div class="mp-news-video-top-more-link-block">
                                            <a href="#" class="more-link">Подробнее</a>
                                        </div>
                                    </div>
                                    <div class="mp-news-video-wrapper">
                                        <div class="mp-news-video-back">
                                            <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/svg/mp-news-video-back.svg" alt="">
                                        </div>
                                        <a href="https://www.youtube.com/watch?v=krqeDxgb9Ok" data-fancybox class="mp-news-video">
                                            <div class="video">
                                                <div class="video-preview">
                                                    <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/mainpage/mp-news-video-img.png" alt="">
                                                </div>
                                                <div class="video-play-btn">
                                                    <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/svg/play-btn.svg" alt="">
                                                </div>
                                            </div>
                                        </a>
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

<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>