<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$lecturersIBlockId = $arResult['PROPERTIES']['LECTURER']['LINK_IBLOCK_ID'];
$lecturerId = $arResult['PROPERTIES']['LECTURER']['VALUE'];
$lecturerRegalia = '';

$obj = CIBlockElement::GetList(
    array('ID' => 'ASC'),
    array('IBLOCK_ID' => $lecturersIBlockId, 'ID' => $lecturerId),
    false,
    false,
    array('NAME', 'PROPERTY_IMG', 'PROPERTY_REGALIA')
);

while ($res = $obj->GetNext()) {
    $arResult['LECTURER_NAME'] = $res['NAME'];

    $smallPicArray = CFile::GetFileArray($res['PROPERTY_IMG_VALUE']);
    $smallPicData = CFile::ResizeImageGet($smallPicArray, array('width' => 100, 'height' => 100), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    $smallPic = $smallPicData['src'];
    $arResult['LECTURER_PHOTO'] = $smallPic;

    $lecturerRegalia .= $res['PROPERTY_REGALIA_VALUE'].' ';
}

$arResult['LECTURER_REGALIA'] = $lecturerRegalia;
