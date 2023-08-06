<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();

foreach ($arResult['MONTHS'] as &$arMonth) {
    foreach ($arMonth['DAYS'] as &$arDay) {
        if (empty($arDay['EVENT']))
            continue;

        $smallPicArray = CFile::GetFileArray($arDay['EVENT']['LECTURER_DATA']['PROPERTY_IMG_VALUE']);
        $smallPicData = CFile::ResizeImageGet($smallPicArray, array('width' => 60, 'height' => 60), BX_RESIZE_IMAGE_PROPORTIONAL, true);
        $smallPic = $smallPicData['src'];
        $arDay['EVENT']['LECTURER_DATA']['AVATAR'] = $smallPic;
    }
}