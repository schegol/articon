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
        $initialMonth = intval(date('n', $today));
        $initialMonth = intval(date('m', $today));
        $initialYear = intval(date('Y', $today));

        $processedEvent = null;

        for ($i = 0; $i < $paramsMonths; $i++) {
            $processedMonth = [];
            $processedMonth['MONTH_NUM'] = $initialMonth;
            $processedMonth['MONTH_FULL'] = $initialMonth > 9 ? (string)$initialMonth : '0'.$initialMonth;
            $processedMonth['MONTH_NAME'] = GetMessage('CLASS_AURORI_CALENDAR_MONTH_NAME_'.$initialMonth);
            $processedMonth['YEAR_NUM'] = $initialYear;
            $processedMonth['LAST_DAY'] = $this->daysInMonth($initialMonth, $initialYear);
            $processedMonth['FIRST_WEEKDAY'] = date('w', strtotime('01.'.$processedMonth['MONTH_FULL'].'.'.$initialYear));

            $emptyDaysToAdd = 0;
            if ($processedMonth['FIRST_WEEKDAY'] > 1) {
                $emptyDaysToAdd = $processedMonth['FIRST_WEEKDAY'] - 1;
            } elseif ($processedMonth['FIRST_WEEKDAY'] == 0) {
                $emptyDaysToAdd = 6;
            }

            if ($emptyDaysToAdd > 0) {
                for ($emptyDaysToAdd; $emptyDaysToAdd > 0 ; $emptyDaysToAdd--) {
                    $processedMonth['DAYS'][] = array(
                        'EMPTY' => 'Y',
                    );
                }
            }

            for ($j = 1; $j <= $processedMonth['LAST_DAY']; $j++) {
                $dayFullNum = (string)$j;
                if ($j < 10) {
                    $dayFullNum = '0'.$j;
                }
                $dayFullDate = $dayFullNum.'.'.$processedMonth['MONTH_FULL'].'.'.$processedMonth['YEAR_NUM'];
                $weekday = date('w', strtotime($dayFullDate));

                $dayArray = array(
                    'EMPTY' => 'N',
                    'DAY_NUM' => $j,
                    'IS_WEEKEND' => in_array($weekday, [0, 6]) ? 'Y' : 'N',
                );

                $processedMonth['DAYS'][] = $dayArray;
            }

            /**/

            echo '<pre>',print_r($processedMonth),'</pre>';

            if ($initialMonth == 12) {
                $initialMonth = 1;
                $initialYear++;
            } else {
                $initialMonth++;
            }

            $arResult['MONTHS'][] = $processedMonth;
        }

        $this->arResult = $arResult;
        $this->includeComponentTemplate();
    }

    public function daysInMonth($month, $year) {
        return $month == 2 ? ($year % 4 ? 28 : ($year % 100 ? 29 : ($year % 400 ? 28 : 29))) : (($month - 1) % 7 % 2 ? 30 : 31);
    }
}
?>