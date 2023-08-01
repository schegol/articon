<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<?if (!empty($arResult)):?>
    <section class="section-course">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="s-courses-title-block">
                        <h1 class="s-courses-title">
                            <?=$APPLICATION->GetTitle()?>
                        </h1>
                    </div>
                    <div class="course-block">
                        <div class="course-top-block">
                            <div class="course-top course-top--<?=$arResult['PROPERTIES']['BG_COLOR']['VALUE_XML_ID']?>">
                                <div class="row">
                                    <div class="col-12 col-xl-3">
                                        <div class="course-top-left">
                                            <div class="course-top-lecturer">
                                                <div class="course-top-lecturer-top">
                                                    <div class="course-top-lecturer-img">
                                                        <img class="image" src="<?=$arResult['LECTURER_PHOTO']?>" alt="<?=$arResult['LECTURER_NAME']?>">
                                                    </div>
                                                    <div class="course-top-lecturer-name">
                                                        <?=$arResult['LECTURER_NAME']?>
                                                    </div>
                                                </div>
                                                <?if (strlen($arResult['LECTURER_REGALIA'])):?>
                                                    <div class="course-top-lecturer-state">
                                                        <?=$arResult['LECTURER_REGALIA']?>
                                                    </div>
                                                <?endif?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-9">
                                        <div class="course-top-right">
                                            <div class="course-top-info-block">
                                                <div class="course-top-info">
                                                    <div class="course-top-info-left">
                                                        <div class="course-top-info-type">
                                                            <?=$arResult['PROPERTIES']['BG_COLOR']['VALUE']?>
                                                        </div>
                                                        <div class="course-top-info-params-block">
                                                            <div class="course-top-info-params">
                                                                <div class="course-top-info-param">
                                                                    <div class="course-top-info-param__title">
                                                                        <?=GetMessage('NEWS_COURSES_NEWS_DETAIL_DEFAULT_START_DATE_HEADING')?>
                                                                    </div>
                                                                    <div class="course-top-info-param__value">
                                                                        <?=FormatDate($arParams['ACTIVE_DATE_FORMAT'], MakeTimeStamp($arResult['ACTIVE_FROM']))?>
                                                                    </div>
                                                                </div>
                                                                <div class="course-top-info-param">
                                                                    <div class="course-top-info-param__title">
                                                                        <?=GetMessage('NEWS_COURSES_NEWS_DETAIL_DEFAULT_DIFFICULTY_LEVEL_HEADING')?>
                                                                    </div>
                                                                    <div class="course-top-info-param__value">
                                                                        <?=GetMessage('NEWS_COURSES_NEWS_DETAIL_DEFAULT_DIFFICULTY_LEVEL_'.$arResult['PROPERTIES']['DIFFICULTY_LEVEL']['VALUE_XML_ID'])?>
                                                                    </div>
                                                                </div>

                                                                <?if (strlen($arResult['PROPERTIES']['LENGTH']['VALUE'])):?>
                                                                    <div class="course-top-info-param">
                                                                        <div class="course-top-info-param__title"><?=GetMessage('NEWS_COURSES_NEWS_DETAIL_DEFAULT_LENGTH_HEADING')?></div>
                                                                        <div class="course-top-info-param__value"><?=$arResult['PROPERTIES']['LENGTH']['VALUE']?></div>
                                                                    </div>
                                                                <?endif?>
                                                            </div>
                                                        </div>
                                                        <div class="h3 course-top-info-title">
                                                            <?=$arResult['NAME']?>
                                                        </div>

                                                        <?if (strlen($arResult['PROPERTIES']['INTRO']['VALUE'])):?>
                                                            <div class="course-top-info-descr">
                                                                <?=$arResult['PROPERTIES']['INTRO']['VALUE']?>
                                                            </div>
                                                        <?endif?>

                                                        <?if (is_array($arResult['PROPERTIES']['FEATURES']['VALUE']) && !empty($arResult['PROPERTIES']['FEATURES']['VALUE'])):?>
                                                            <div class="course-top-info-alt-params-block">
                                                                <div class="course-top-info-alt-params">
                                                                    <?foreach ($arResult['PROPERTIES']['FEATURES']['VALUE'] as $feature):?>
                                                                        <div class="course-top-info-alt-param">
                                                                            <?=html_entity_decode($feature)?>
                                                                        </div>
                                                                    <?endforeach?>
                                                                </div>
                                                            </div>
                                                        <?endif?>
                                                    </div>

                                                    <?if (is_array($arResult['PROPERTIES']['GALLERY']['VALUE']) && !empty($arResult['PROPERTIES']['GALLERY']['VALUE'])):?>
                                                        <div class="course-top-info-right">
                                                            <div class="course-top-info-photo-items-block">
                                                                <div class="course-top-info-photo-items">
                                                                    <?foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $i => $img):
                                                                        if ($i > 2) break;

                                                                        $smallPicArray = CFile::GetFileArray($img);
                                                                        $smallPicData = CFile::ResizeImageGet($smallPicArray, array('width' => 840, 'height' => 840), BX_RESIZE_IMAGE_PROPORTIONAL, true);
                                                                        $smallPic = $smallPicData['src'];
                                                                    ?>
                                                                        <div class="course-top-info-photo-item-wrapper">
                                                                            <a class="course-top-info-photo-item modal-btn" href="#modal-photos--photo" data-index="<?=$i?>">
                                                                                <div class="course-top-info-photo-item__img">
                                                                                    <img class="image" src="<?=$smallPic?>" alt="<?=GetMessage('NEWS_COURSES_NEWS_DETAIL_DEFAULT_GALLERY_PREVIEW_ALT').($i + 1)?>">
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    <?endforeach?>
                                                                    <?if (count($arResult['PROPERTIES']['GALLERY']['VALUE']) > 3):?>
                                                                        <div class="course-top-info-photo-item-wrapper">
                                                                            <a class="course-top-info-photo-item modal-btn" href="#modal-photos--photo">
                                                                                <div class="course-top-info-photo-item-more">
                                                                                    <div class="course-top-info-photo-item-more__icon">
                                                                                        <img class="image" src="<?=SITE_TEMPLATE_PATH?>/images/svg/mp-news-photo-item-more-icon.svg" alt="<?=GetMessage('NEWS_COURSES_NEWS_DETAIL_DEFAULT_GALLERY_ICON_ALT')?>">
                                                                                    </div>
                                                                                    <div class="course-top-info-photo-item-more__title">
                                                                                        <?=(count($arResult['PROPERTIES']['GALLERY']['VALUE']) - 3).GetMessage('NEWS_COURSES_NEWS_DETAIL_DEFAULT_GALLERY_COUNTER')?>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    <?endif?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modals">
                                                            <div class="fb-modal fb-modal--photos" id="modal-photos--photo">
                                                                <div class="fb-modal-inner">
                                                                    <div class="modal-photo-block">
                                                                        <div class="modal-photo-title-block">
                                                                            <div class="h2 modal-photo-title"><?=GetMessage('NEWS_COURSES_NEWS_DETAIL_DEFAULT_GALLERY_MODAL_HEADING')?></div>
                                                                        </div>
                                                                        <div class="modal-photo-slider-block">
                                                                            <div class="modal-photo-slider modal-photo-slider--course swiper-slider">
                                                                                <div class="swiper">
                                                                                    <div class="swiper-wrapper">
                                                                                        <?foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $i => $img):
                                                                                            $smallPicArray = CFile::GetFileArray($img);
                                                                                            $smallPicData = CFile::ResizeImageGet($smallPicArray, array('width' => 1320, 'height' => 1320), BX_RESIZE_IMAGE_PROPORTIONAL, true);
                                                                                            $smallPic = $smallPicData['src'];
                                                                                            ?>
                                                                                            <div class="modal-photo-slide swiper-slide">
                                                                                                <div class="modal-photo-slide-item">
                                                                                                    <div class="modal-photo-slide-img">
                                                                                                        <img class="image" src="<?=$smallPic?>" alt="<?=GetMessage('NEWS_COURSES_NEWS_DETAIL_DEFAULT_GALLERY_MODAL_IMG_ALT').($i + 1)?>">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        <?endforeach?>
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
                                                                                        <?foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $i => $img):
                                                                                            $smallPicArray = CFile::GetFileArray($img);
                                                                                            $smallPicData = CFile::ResizeImageGet($smallPicArray, array('width' => 254, 'height' => 254), BX_RESIZE_IMAGE_PROPORTIONAL, true);
                                                                                            $smallPic = $smallPicData['src'];
                                                                                            ?>
                                                                                            <div class="modal-photo-thumb-slide swiper-slide">
                                                                                                <div class="modal-photo-thumb-slide-item">
                                                                                                    <div class="modal-photo-thumb-slide-item-img">
                                                                                                        <img class="image" src="<?=$smallPic?>" alt="<?=GetMessage('NEWS_COURSES_NEWS_DETAIL_DEFAULT_GALLERY_MODAL_IMG_ALT').($i + 1)?>">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        <?endforeach?>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="swiper-pagination"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?endif?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="course-info-blocks-block">
                            <div class="row">
                                <div class="col-12 col-xl-3"></div>
                                <div class="col-12 col-xl-9">
                                    <div class="course-info-blocks">
                                        <?if (is_array($arResult['PROPERTIES']['COURSE_FOR']['VALUE']) && !empty($arResult['PROPERTIES']['COURSE_FOR']['VALUE'])):?>
                                            <div class="course-info-block">
                                                <h3 class="course-info-block-title"><?=GetMessage('NEWS_COURSES_NEWS_DETAIL_DEFAULT_COURSE_FOR_HEADING')?></h3>
                                                <div class="course-info-who-items-block">
                                                    <div class="course-info-items">
                                                        <?foreach ($arResult['PROPERTIES']['COURSE_FOR']['VALUE'] as $for):?>
                                                            <div class="course-info-item-wrapper">
                                                                <div class="course-info-item">
                                                                    <?=$for?>
                                                                </div>
                                                            </div>
                                                        <?endforeach?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?endif?>

                                        <?if (strlen($arResult['PROPERTIES']['RESULT']['VALUE']['TEXT'])):?>
                                            <div class="course-info-block course-info-block--result">
                                                <h3 class="course-info-block-title">Какой будет результат?</h3>
                                                <?//=$arResult['PROPERTIES']['RESULT']['~VALUE']['TEXT']?>
                                                <ul class="course-info-result-list">
                                                    <li>Знания для работы в программе Exocad</li>
                                                    <li>Понимание интерфейса</li>
                                                    <li>Умение моделировать базовые ортопедические конструкции (одиночные коронки, мостовидные
                                                        протезы)</li>
                                                    <li>Навык создания проектов цифрового дизайна зубов</li>
                                                </ul>
                                            </div>
                                        <?endif?>

                                        <?if (strlen($arResult['DETAIL_TEXT'])):?>
                                            <div class="course-info-block">
                                                <h3 class="course-info-block-title">Программа курса</h3>
                                                <div class="course-programm-block">
                                                    <div class="h4 course-programm-block-title">
                                                        Теоретический день
                                                    </div>
                                                    <div class="count-list">
                                                        <div class="count-list-item">
                                                            <div class="count-list-item__count">
                                                                1
                                                            </div>
                                                            <div class="count-list-item__text-block">
                                                                <div class="count-list-item__text">
                                                                    Правила заполнения цифрового заказ-наряда
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="count-list-item">
                                                            <div class="count-list-item__count">
                                                                2
                                                            </div>
                                                            <div class="count-list-item__text-block">
                                                                <div class="count-list-item__text">
                                                                    Типы реставраций, доступные для моделирования в Exocad
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course-programm-items-block">
                                                        <div class="course-programm-items">
                                                            <div class="course-programm-item">
                                                                <div class="course-programm-item__title">
                                                                    Проект создания одиночной коронки в режиме Помощника (wizard mode)
                                                                </div>
                                                                <div class="course-programm-item__descr">
                                                                    Построение модели для 3D - печати с гравировкой границы препарирования
                                                                </div>
                                                            </div>
                                                            <div class="course-programm-item">
                                                                <div class="course-programm-item__title">
                                                                    Проект создания мостовидного протеза на винтовой фиксации (скан-маркеры) с применением
                                                                    разных типов редуцирования в режиме Expert
                                                                </div>
                                                                <div class="course-programm-item__descr">
                                                                    Особенности построения моделей с DIM - аналогами (для CAD/CAM моделей)
                                                                </div>
                                                            </div>
                                                            <div class="course-programm-item">
                                                                <div class="course-programm-item__title">
                                                                    Проект цифрового дизайна зубов (digital waxup)
                                                                </div>
                                                                <div class="course-programm-item__descr">
                                                                    Построение модели для 3D - печати с ваксапом
                                                                </div>
                                                            </div>
                                                            <div class="course-programm-item">
                                                                <div class="course-programm-item__title">
                                                                    Дополнительно
                                                                </div>
                                                                <div class="course-programm-item__descr">
                                                                    <ul>
                                                                        <li>Инструменты для коммуникации врач/техник</li>
                                                                        <li>Виртуальный артикулятор</li>
                                                                        <li>Оптимизация параметров для изготовления конструкций методами фрезерования/ 3D -
                                                                            печати</li>
                                                                        <li>Часто встречаемые ошибки и пути их решения</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="course-programm-block">
                                                    <div class="h4 course-programm-block-title">
                                                        Практический день
                                                    </div>
                                                    <div class="count-list">
                                                        <div class="count-list-item">
                                                            <div class="count-list-item__count">
                                                                1
                                                            </div>
                                                            <div class="count-list-item__text-block">
                                                                <div class="count-list-item__text">
                                                                    Заполнение цифрового заказ-наряда с последующим изготовлением соответствующей
                                                                    конструкции.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="count-list-item">
                                                            <div class="count-list-item__count">
                                                                2
                                                            </div>
                                                            <div class="count-list-item__text-block">
                                                                <div class="count-list-item__text">
                                                                    Моделирование коронки в полную анатомию в двух режимах программы (с использованием
                                                                    режима "помощник" и "эксперт")
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="count-list-item">
                                                            <div class="count-list-item__count">
                                                                3
                                                            </div>
                                                            <div class="count-list-item__text-block">
                                                                <div class="count-list-item__text">
                                                                    Создание каркаса под полное или частичное нанесение
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="count-list-item">
                                                            <div class="count-list-item__count">
                                                                4
                                                            </div>
                                                            <div class="count-list-item__text-block">
                                                                <div class="count-list-item__text">
                                                                    Изготовление мостовидного протеза на имплантах(полная анатомия и последующая редукция
                                                                    конструкции)
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="count-list-item">
                                                            <div class="count-list-item__count">
                                                                5
                                                            </div>
                                                            <div class="count-list-item__text-block">
                                                                <div class="count-list-item__text">
                                                                    Изготовление цифрового мокапа с последующим созданием модели под "ключ"
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="count-list-item">
                                                            <div class="count-list-item__count">
                                                                6
                                                            </div>
                                                            <div class="count-list-item__text-block">
                                                                <div class="count-list-item__text">
                                                                    Создание модели для перевода из цифры в аналог с помощью 3D-печати.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="count-list-item">
                                                            <div class="count-list-item__count">
                                                                7
                                                            </div>
                                                            <div class="count-list-item__text-block">
                                                                <div class="count-list-item__text">
                                                                    Изготовление внутрикорневой культевой вкладки.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?endif?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-feedback">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 col-xl-8 offset-0 offset-lg-1 offset-xl-2">
                    <h2>Оставить заявку</h2>
                    <div class="feedback-form-block">
                        <form action="" class="form feedback-form">
                            <div class="feedback-form-row">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="field field--input">
                                            <input type="text" name="name" placeholder="Ваше имя" autocomplete="off" required>
                                        </div>
                                        <div class="field field--input">
                                            <input type="text" name="phone" placeholder="Ваш телефон" autocomplete="off">
                                        </div>
                                        <div class="field field--input field--input-email">
                                            <input type="email" name="email" placeholder="Ваш e-mail" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="field field--textarea">
                                            <div class="field-title">
                                                Текст сообщения
                                            </div>
                                            <textarea name="message" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field field--checkbox">
                                <label class="custom-checkbox-label">
                                    <input type="checkbox" name="checkbox" value="1" class="checkbox" checked>
                                    <span class="custom-checkbox">
											<img class="image" src="images/svg/checkbox-check.svg" alt="">
										</span>
                                    <span class="custom-checkbox-text-label">Я соглашаюсь на обработку персональных данных.</span>
                                </label>
                            </div>

                            <div class="btn-wrapper">
                                <button type="submit" class="green-btn">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-course-speakers">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="s-course-speakers-title-block">
                        <div class="section-title-block">
                            <div class="section-title-label-wrapper">
                                <div class="section-title-label">
                                    Курсы
                                </div>
                                <div class="section-title-label-bridge"></div>
                            </div>
                            <h2 class="section-title">
                                Спикеры
                            </h2>
                        </div>
                    </div>

                    <div class="lecturer-items-block">
                        <div class="lecturer-items">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <a href="#modal-lecturer-1" data-fancybox="lecturer-gallery" class="lecturer-item modal-gallery-btn">
                                        <div class="lecturer-item-img">
                                            <img class="image" src="images/lecturers/lecturer-item-img-1.png" alt="">
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
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <a href="#modal-lecturer-2" data-fancybox="lecturer-gallery" class="lecturer-item modal-gallery-btn">
                                        <div class="lecturer-item-img">
                                            <img class="image" src="images/lecturers/lecturer-item-img-2.png" alt="">
                                        </div>
                                        <div class="lecturer-item-info">
                                            <div class="lecturer-item-name-wrapper">
                                                <div class="h4 lecturer-item-name">
                                                    МИХАИЛ МИХАЙЛОВ
                                                </div>
                                            </div>
                                            <div class="lecturer-item-state-wrapper">
                                                <div class="lecturer-item-state-bridge"></div>
                                                <div class="lecturer-item-state">
                                                    Ведущий специалист отдела хирургического планирования
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <a href="#modal-lecturer-3" data-fancybox="lecturer-gallery" class="lecturer-item modal-gallery-btn">
                                        <div class="lecturer-item-img">
                                            <img class="image" src="images/lecturers/lecturer-item-img-3.png" alt="">
                                        </div>
                                        <div class="lecturer-item-info">
                                            <div class="lecturer-item-name-wrapper">
                                                <div class="h4 lecturer-item-name">
                                                    КРИСТИАН КАРА
                                                </div>
                                            </div>
                                            <div class="lecturer-item-state-wrapper">
                                                <div class="lecturer-item-state-bridge"></div>
                                                <div class="lecturer-item-state">
                                                    Сотрудник отдела <br>Продвинутого моделирования
                                                </div>
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
    </section>

    <section class="section-course-reviews">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-photo-top-block">
                        <h2>отзывы студентов</h2>
                    </div>

                    <div class="course-reviews-block">
                        <div class="course-reviews">
                            <div class="course-review-wrapper">
                                <div class="course-review course-review--green">
                                    <div class="course-review-inner">
                                        <div class="course-review-date">
                                            20 / 03 / 2023
                                        </div>
                                        <div class="course-review-avatar">
                                            <img class="image" src="images/courses/course-review-avatar-1.png" alt="">
                                        </div>
                                        <div class="course-review-title-block">
                                            <div class="course-review-title">
                                                Сергей петрович
                                            </div>
                                        </div>
                                        <div class="course-review-descr">
                                            Цифровизация протоколов работы и персонализация остаются в числе основных трендов рынка
                                            стоматологических услуг в 2023 году. О цифровой стоматологии мы всегда готовы рассказать
                                            вам на наших мероприятиях сами.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="course-review-wrapper">
                                <div class="course-review course-review--purple">
                                    <div class="course-review-inner">
                                        <div class="course-review-date">
                                            20 / 03 / 2023
                                        </div>
                                        <div class="course-review-avatar">
                                            <img class="image" src="images/courses/course-review-avatar-1.png" alt="">
                                        </div>
                                        <div class="course-review-title-block">
                                            <div class="course-review-title">
                                                Ирина Сергеевна
                                            </div>
                                        </div>
                                        <div class="course-review-descr">
                                            Мы провели совместного с Центром цифровой стоматологии Артикон исследование: на
                                            протяжении месяца измеряли расходы слепочной массы и выявили средний вес слепка (ВЧ+НЧ)
                                            - 103 г.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="course-review-wrapper">
                                <div class="course-review course-review--purple">
                                    <div class="course-review-inner">
                                        <div class="course-review-date">
                                            20 / 03 / 2023
                                        </div>
                                        <div class="course-review-avatar">
                                            <img class="image" src="images/courses/course-review-avatar-1.png" alt="">
                                        </div>
                                        <div class="course-review-title-block">
                                            <div class="course-review-title">
                                                ALEX 578
                                            </div>
                                        </div>
                                        <div class="course-review-descr">
                                            Мы провели совместного с Центром цифровой стоматологии Артикон исследование: на
                                            протяжении месяца измеряли расходы слепочной массы и выявили средний вес слепка (ВЧ+НЧ)
                                            - 103 г.
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
<?endif?>
