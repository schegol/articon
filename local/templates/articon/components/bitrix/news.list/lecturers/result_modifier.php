<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$coursesIBlockId = $arParams['COURSES_IBLOCK_ID'];
foreach ($arResult['ITEMS'] as &$arItem) {
    $coursesData = [];

    //..................

    $arItem['COURSES'] = $coursesData;
}