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
        $initialMonth = intval(date('n', $today));
        $initialYear = intval(date('Y', $today));

        /***/
        $bgColorXMLs = [];
        $bgColorEnumObj = CIBlockPropertyEnum::GetList(
            array(
                'SORT' => 'ASC',
            ),
            array(
                'IBLOCK_ID' => $paramsIBlock,
                'CODE' => 'BG_COLOR',
            )
        );
        while ($bgColorFields = $bgColorEnumObj->GetNext()) {
            $bgColorXMLs[$bgColorFields['ID']] = $bgColorFields['XML_ID'];
        }
        /***/

        /***/
        $eventsSelection = [];
        $objEventsSelection = CIBlockElement::GetList(
            array(
                'ACTIVE_FROM' => 'ASC',
                'SORT' => 'ASC',
                'NAME' => 'ASC',
            ),
            array(
                'IBLOCK_ID' => $paramsIBlock,
                array(
                    'LOGIC' => 'AND',
                    '>=DATE_ACTIVE_FROM' => $todayFormatted,
                    '<=DATE_ACTIVE_FROM' => $this->lastSelectionDate($todayFormatted, $paramsMonths),
                ),
            ),
            false,
            false,
            array(
                'NAME',
                'DATE_ACTIVE_FROM',
                'DATE_ACTIVE_TO',
                'DETAIL_PAGE_URL',
                'PROPERTY_BG_COLOR',
                'PROPERTY_LECTURER',
            )
        );
        while ($arrEventsSelection = $objEventsSelection->GetNext()) {
            $arrEventsSelection['PROPERTY_BG_COLOR_XML_ID'] = $bgColorXMLs[$arrEventsSelection['PROPERTY_BG_COLOR_ENUM_ID']];
            $eventsSelection[$arrEventsSelection['DATE_ACTIVE_FROM']][] = $arrEventsSelection;
        }

        echo '<pre>',print_r($eventsSelection),'</pre>';
        /***/

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

            if ($initialMonth == 12) {
                $initialMonth = 1;
                $initialYear++;
            } else {
                $initialMonth++;
            }

            $arResult['MONTHS'][] = $processedMonth;
        }

        echo '<pre>',print_r($arResult['MONTHS']),'</pre>';

        $this->arResult = $arResult;
        $this->includeComponentTemplate();
    }

    public function daysInMonth($month, $year) {
        return $month == 2 ? ($year % 4 ? 28 : ($year % 100 ? 29 : ($year % 400 ? 28 : 29))) : (($month - 1) % 7 % 2 ? 30 : 31);
    }

    public function lastSelectionDate($today, $monthsLen) {
        if (($monthsLen - 1) > 1) {
            $monthsText = 'months';
        } else {
            $monthsText = 'month';
        }

        $todayInst = new DateTime($today);
        $lastSelectionInst = $todayInst->modify('last day of +'.($monthsLen - 1).' '.$monthsText);
        $lastSelectionDate = $lastSelectionInst->format('d.m.Y');

        return $lastSelectionDate;
    }
}
?>