<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

if (!CModule::IncludeModule('iblock')) {
    return false;
}

$dbIBlocks = CIBlock::GetList(
    array('SORT' => 'ASC'),
    array('ACTIVE' => 'Y')
);
while ($arIBlocks = $dbIBlocks->GetNext()) {
    $paramIBlocks[$arIBlocks['ID']] = '['.$arIBlocks['ID'].'] '.$arIBlocks['NAME'];
}

$arTemplateParameters = array(
    'COURSES_IBLOCK_ID' => array(
        'NAME' => GetMessage('PARAMETERS_NEWS_LIST_LECTURERS_COURSES_IBLOCK_ID'),
        'TYPE' => 'LIST',
        'VALUES' =>  $paramIBlocks,
        'MULTIPLE' =>  'N',
    ),
);
?>
