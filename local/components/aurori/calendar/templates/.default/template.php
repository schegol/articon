<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?if (!empty($arResult['MONTHS'])):?>
    <section class="section-mp-calendar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mp-calendar-top">
                        <div class="mp-calendar-top-left">
                            <div class="mp-calendar-top-title-block">
                                <div class="mp-calendar-top-year-wrapper">
                                    <div class="mp-calendar-top-year">
                                        <?=date('Y').GetMessage('AURORI_CALENDAR_DEFAULT_YEAR')?>
                                    </div>
                                    <div class="mp-calendar-top-year-bridge">

                                    </div>
                                </div>
                                <h2 class="mp-calendar-top-title">
                                    <?=GetMessage('AURORI_CALENDAR_DEFAULT_HEADING')?>
                                </h2>
                            </div>
                        </div>
                        <div class="mp-calendar-top-center">
                            <div class="mp-calendar-top-bridge"></div>
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
<?endif?>