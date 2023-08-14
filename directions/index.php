<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Направления");
?>

<?$APPLICATION->IncludeComponent(
    "bitrix:news",
    "directions",
    Array(
        "ADD_ELEMENT_CHAIN" => "Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "BROWSER_TITLE" => "-",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "N",
        "DETAIL_ACTIVE_DATE_FORMAT" => "j F",
        "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
        "DETAIL_DISPLAY_TOP_PAGER" => "N",
        "DETAIL_FIELD_CODE" => array("NAME", "DETAIL_TEXT", ""),
        "DETAIL_PAGER_SHOW_ALL" => "Y",
        "DETAIL_PAGER_TEMPLATE" => "",
        "DETAIL_PAGER_TITLE" => "Страница",
        "DETAIL_PROPERTY_CODE" => array("*", ""),
        "DETAIL_SET_CANONICAL_URL" => "N",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "9",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "LIST_ACTIVE_DATE_FORMAT" => "j F",
        "LIST_FIELD_CODE" => array("NAME", "PREVIEW_TEXT", ""),
        "LIST_PROPERTY_CODE" => array("*", ""),
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "-",
        "META_KEYWORDS" => "-",
        "NEWS_COUNT" => "6",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "courses",
        "PAGER_TITLE" => "Новости",
        "PREVIEW_TRUNCATE_LEN" => "",
        "SEF_FOLDER" => "/directions/",
        "SEF_MODE" => "Y",
        "SEF_URL_TEMPLATES" => Array(
            "detail" => "#ELEMENT_CODE#/",
            "news" => "",
            "section" => ""
        ),
        "SET_LAST_MODIFIED" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "NAME",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "USE_CATEGORIES" => "N",
        "USE_FILTER" => "N",
        "USE_PERMISSIONS" => "N",
        "USE_RATING" => "N",
        "USE_RSS" => "N",
        "USE_SEARCH" => "N",
        "USE_SHARE" => "N",
    )
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>