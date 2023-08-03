<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Application;
use Bitrix\Main\Loader;
Loader::includeModule('iblock');

class CAuroriCalendar extends CBitrixComponent {
    public function onPrepareComponentParams($arParams) {
        return $arParams;
    }

    public function executeComponent() {
        if (!$this->arParams['IBLOCK_ID']) {
            ShowError(GetMessage('CLASS_AURORI_CALENDAR_NO_IBLOCK_SPECIFIED'));
            return;
        }

        if (!is_int((int)$this->arParams['MONTHS']) || (int)$this->arParams['MONTHS'] <= 0) {
            ShowError(GetMessage('CLASS_AURORI_CALENDAR_MONTHS_WRONG_TYPE'));
            return;
        }

        $paramsIBlock = $this->arParams['IBLOCK_ID'];
        $paramsMonths = $this->arParams['MONTHS'];

        $arResult = [];
        $arResult['MONTHS'] = [];

        $today = time();
        $todayFormatted = date('d.m.Y', $today);
        /***/



        /***/

        $this->arResult = $arResult;
        $this->includeComponentTemplate();
    }
}
?>