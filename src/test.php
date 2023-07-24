<?php

/**
 * Template Name: Услуги
 */

get_header(); ?>

<main class="page">
    <div class="page__inner page__container">
        <div class="page__header">
            <?php
            if (function_exists('yoast_breadcrumb')) :
                yoast_breadcrumb('<div id="breadcrumbs" class="crumbs">', '</div>');
            endif;
            ?>
        </div>
        <div data-tabs data-tabs-animate="500" class="services">
            <div class="services__inner">
                <div class="services__sidebar">
                    <nav data-tabs-titles class="services__navigation">
                        <button type="button" class="services__title _tab-active  _main-button">Услуги</button>
                        <button type="button" class="services__title">Доставка</button>
                        <button type="button" class="services__title">Разгрузка и подъем</button>
                        <button type="button" class="services__title">Колеровка</button>
                        <button type="button" class="services__title">Резка и распил</button>
                        <button type="button" class="services__title">Программа лояльности</button>
                        <a href="https://tds-metall.ru" class="services__title" target="_blank" rel="nofollow">Производство</a>
                    </nav>
                </div>
                <div data-tabs-body class="services__content">
                    <div class="services__body">
                        <div class="services__all all-services">
                            <h1 class="all-services__title">Услуги</h1>
                            <div class="all-services__list">
                                <div class="all-services__item">
                                    <div class="all-services__img">
                                        <picture>
                                            <source srcset="<?php echo get_template_directory_uri() ?>/img/services-page/delivery.webp" type="image/webp">
                                            <img data-src="<?php echo get_template_directory_uri() ?>/img/services-page/delivery.jpg?_v=1644334894813" alt="item-service">
                                        </picture>
                                    </div>
                                    <span class="all-services__name">Доставка</span>
                                </div>
                                <div class="all-services__item">
                                    <div class="all-services__img">
                                        <picture>
                                            <source srcset="<?php echo get_template_directory_uri() ?>/img/services-page/dropdown.webp" type="image/webp">
                                            <img data-src="<?php echo get_template_directory_uri() ?>/img/services-page/dropdown.jpg?_v=1644334894813" alt="item-service">
                                        </picture>
                                    </div>
                                    <span class="all-services__name">Разгрузка и подъем</span>
                                </div>
                                <div class="all-services__item">
                                    <div class="all-services__img">
                                        <picture>
                                            <source srcset="<?php echo get_template_directory_uri() ?>/img/services-page/color.webp" type="image/webp">
                                            <img data-src="<?php echo get_template_directory_uri() ?>/img/services-page/color.jpg?_v=1644334894813" alt="item-service">
                                        </picture>
                                    </div>
                                    <span class="all-services__name">Колеровка</span>
                                </div>
                                <div class="all-services__item">
                                    <div class="all-services__img">
                                        <picture>
                                            <source srcset="<?php echo get_template_directory_uri() ?>/img/services-page/cutting.webp" type="image/webp">
                                            <img data-src="<?php echo get_template_directory_uri() ?>/img/services-page/cutting.jpg?_v=1644334894813" alt="item-service">
                                        </picture>
                                    </div>
                                    <span class="all-services__name">Резка и распил</span>
                                </div>
                                <div class="all-services__item">
                                    <div class="all-services__img">
                                        <picture>
                                            <source srcset="<?php echo get_template_directory_uri() ?>/img/services-page/loyalty.webp" type="image/webp">
                                            <img data-src="<?php echo get_template_directory_uri() ?>/img/services-page/loyalty.jpg?_v=1644334894813" alt="item-service">
                                        </picture>
                                    </div>
                                    <span class="all-services__name">Программа лояльности</span>
                                </div>
                                <a href="https://tds-metall.ru" class="all-services__item" target="_blank" rel="nofollow">
                                    <div class="all-services__img">
                                        <img data-src="<?php echo get_template_directory_uri() ?>/img/metall.jpg" alt="item-service">
                                    </div>
                                    <span class="all-services__name">Производство</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="services__body delivery-services" style="margin-top: 40px">
                        <h2>Доставка</h2>
                        <div class="delivery-services__content">
                            <?php the_field('tekst_sverhu'); ?>
                            <div class="delivery-services__icons icons-services-delivery">
                                <h3>Преимущества доставки от ТД “Спецстрой”</h3>
                                <div class="icons-services-delivery__list">
                                    <div class="icons-services-delivery__item">
                                        <div class="icons-services-delivery__icon">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/services-page/icon-calendar.svg" alt="icon">
                                        </div>
                                        <div class="icons-services-delivery__title">доставка</div>
                                        <div class="icons-services-delivery__subtitle">в удобное для вас время
                                        </div>
                                    </div>
                                    <div class="icons-services-delivery__item">
                                        <div class="icons-services-delivery__icon">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/services-page/icon-map.svg" alt="icon">
                                        </div>
                                        <div class="icons-services-delivery__title">доставка</div>
                                        <div class="icons-services-delivery__subtitle">по городу и области</div>
                                    </div>
                                    <div class="icons-services-delivery__item">
                                        <div class="icons-services-delivery__icon">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/services-page/icon-delivery.svg" alt="icon">
                                        </div>
                                        <div class="icons-services-delivery__title">Доставка</div>
                                        <div class="icons-services-delivery__subtitle">по регионам</div>
                                    </div>
                                    <div class="icons-services-delivery__item">
                                        <div class="icons-services-delivery__icon">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/services-page/icon-transport.svg" alt="icon">
                                        </div>
                                        <div class="icons-services-delivery__title">Бережная транспортировка
                                        </div>
                                        <div class="icons-services-delivery__subtitle">на оборудованных
                                            автомобилях
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="delivery-services__cost cost-delivery">
                                <h3>Стоимость доставки</h3>
                                <div class="cost-delivery__inner">
                                    <div class="cost-delivery__map">
                                        <img data-src="<?php echo get_template_directory_uri() ?>/img/delivery-zones.jpg" alt="delivery-zones">
                                        <span>Доставка по г. Москва, МО и регионам РФ</span>
                                    </div>
                                    <div class="cost-delivery__content content-cost-delivery">
                                        <div class="content-cost-delivery__car">
                                            <div class="options content-cost-delivery__options">
                                                <div class="options__item">
                                                    <input hidden id="o_1" class="options__input" checked type="radio" value="1" name="car">
                                                    <label for="o_1" class="options__label"><span class="options__text">Машиной</span></label>
                                                </div>
                                                <div class="options__item">
                                                    <input hidden id="o_2" class="options__input" type="radio" value="2" name="car">
                                                    <label for="o_2" class="options__label"><span class="options__text">Манипулятором</span></label>
                                                </div>
                                            </div>
                                            <div class="content-cost-delivery__entry-car">
                                                <div class="options" data-delivery-type="car">
                                                    <?php
                                                    $cars = get_field('dostavka_mashinoj');
                                                    $num = 0;
                                                    if ($cars) :
                                                        foreach ($cars as $car) : ?>
                                                            <div class="options__item">
                                                                <input hidden id="0_<?php echo $num ?>" class="options__input" <?php echo $num == 0 ? 'checked' : ''; ?> type="radio" value="1" name="option" data-day="<?php echo $car['stoimost_dostavki_v_techenii_dnya'] ?>" data-express="<?php echo $car['stoimost_dostavki_ekspress'] ?>" data-time="<?php echo $car['stoimost_dostavki_tochno_ko_vremeni'] ?>">
                                                                <label for="0_<?php echo $num ?>" class="options__label"><span class="options__text">
                                                                        <?php echo $car['svg'] ?>
                                                                        <span><?php echo $car['zagolovok'] ?></span>
                                                                    </span></label>
                                                            </div>
                                                    <?php
                                                            $num++;
                                                        endforeach;
                                                    endif;
                                                    ?>

                                                </div>
                                                <div class="options" data-delivery-type="manipulator">
                                                    <?php
                                                    $cars = get_field('dostavka_manipulyatorom');
                                                    if ($cars) :
                                                        foreach ($cars as $car) :
                                                            $num++; ?>

                                                            <div class="options__item">
                                                                <input hidden id="0_<?php echo $num ?>" class="options__input" type="radio" value="1" name="option" data-day="<?php echo $car['stoimost_dostavki_v_techenii_dnya'] ?>" data-express="<?php echo $car['stoimost_dostavki_ekspress'] ?>" data-time="<?php echo $car['stoimost_dostavki_tochno_ko_vremeni'] ?>">
                                                                <label for="0_<?php echo $num ?>" class="options__label"><span class="options__text">
                                                                        <?php echo $car['svg'] ?>
                                                                        <span><?php echo $car['zagolovok'] ?></span>
                                                                    </span></label>
                                                            </div>
                                                    <?php
                                                        endforeach;
                                                    endif;
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="content-cost-delivery__price price-cost-delivery">
                                                <h4>Стоимость доставки</h4>
                                                <div class="price-cost-delivery__list">
                                                    <div class="price-cost-delivery__item">
                                                        <div class="price-cost-delivery__time">
                                                            <span>В течение дня</span>
                                                            <img src="<?php echo get_template_directory_uri() ?>/img/tippy.svg" alt="tippy" data-tippy-content="<?php the_field('podskazka_v_techenii_dnya'); ?>">
                                                        </div>
                                                        <div class="price-cost-delivery__price" data-delivery-price="day"><span>899</span> ₽
                                                        </div>
                                                    </div>
                                                    <div class="price-cost-delivery__item">
                                                        <div class="price-cost-delivery__time">
                                                            <span>Экспресс</span>
                                                            <img src="<?php echo get_template_directory_uri() ?>/img/tippy.svg" alt="tippy" data-tippy-content="<?php the_field('podskazka_ekspress'); ?>">
                                                        </div>
                                                        <div class="price-cost-delivery__price" data-delivery-price="express"><span>899</span> ₽
                                                        </div>
                                                    </div>
                                                    <div class="price-cost-delivery__item">
                                                        <div class="price-cost-delivery__time">
                                                            <span>Точно ко времени</span>
                                                            <img src="<?php echo get_template_directory_uri() ?>/img/tippy.svg" alt="tippy" data-tippy-content="<?php the_field('podskazka_tochno_ko_vremeni'); ?>">
                                                        </div>
                                                        <div class="price-cost-delivery__price" data-delivery-price="time"><span>899</span> ₽
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content-cost-delivery__mark">
                                                <?php the_field('czena_podema'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-spollers class="content-cost-delivery__spollers">
                                <div class="content-cost-delivery__item">
                                    <button type="button" data-spoller class="content-cost-delivery__title">правила доставки
                                    </button>
                                    <div class="content-cost-delivery__body">
                                        <div class="rules-delivery__body">
                                            <?php the_field('pravila_dostavki'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-spollers class="content-cost-delivery__spollers">
                                <div class="content-cost-delivery__item">
                                    <button type="button" data-spoller class="content-cost-delivery__title">типы
                                        доставки
                                    </button>
                                    <div class="content-cost-delivery__body">
                                        <div class="rules-delivery__type type-delivery">
                                            <?php the_field('tipy_dostavki'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services__body">
                        <div class="services__dropdown dropdown-services">
                            <h2>Разгрузка и подъем</h2>
                            <div class="dropdown-services__content">
                                <?php the_field('tekst_sverhu_razgruzka_i_podem'); ?>
                                <h3>Время оказания услуги</h3>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Стоимость подъёма</th>
                                            <th>Время необходимое для подъёма всего материала, указанного в
                                                заказе
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $table_prices = get_field('tabliczarazgruzka_i_podem');
                                        if ($table_prices) :
                                            foreach ($table_prices as $row) : ?>
                                                <tr>
                                                    <td><?php echo $row['stoimost'] ?></td>
                                                    <td><?php echo $row['vremya'] ?></td>
                                                </tr>
                                        <?php
                                            endforeach;
                                        endif;
                                        ?>
                                    </tbody>
                                </table>
                                <?php the_field('tekst_snizu_razgruzka_i_podem'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="services__body">
                        <div class="services__color color-services">
                            <h2>Колеровка</h2>
                            <div class="color-services__content">
                                <div>
                                    <p>Если вас не устраивает стандартная цветовая палитра, то у нас есть
                                        решение! Предлагаем Вам воспользоваться услугой колеровки, которая
                                        предоставляется бесплатно. Колеровка - процесс придания материалам
                                        нужного цвета и оттенка</p>
                                </div>
                                <h3>3 основных вида колеровки ЛКМ:</h3>
                                <div class="color-services__list">
                                    <div class="color-services__item">
                                        <div class="color-services__icon">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/colors/icon-1.svg" alt="icon">
                                        </div>
                                        <div class="color-services__title">машинная колеровка</div>
                                    </div>
                                    <div class="color-services__item">
                                        <div class="color-services__icon">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/colors/icon-2.svg" alt="icon">
                                        </div>
                                        <div class="color-services__title">ручная колеровка</div>
                                    </div>
                                    <div class="color-services__item">
                                        <div class="color-services__icon">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/colors/icon-3.svg" alt="icon">
                                        </div>
                                        <div class="color-services__title">Производственная колеровка</div>
                                    </div>
                                </div>
                                <?php the_field('tekst_kolerovka') ?>
                            </div>
                        </div>
                    </div>
                    <div class="services__body">
                        <div class="services__cutting cutting-services">
                            <h2>Резка и распил</h2>
                            <div class="cutting-services__content">
                                <?php the_field('tekst_sverhu_rezka_i_raspil'); ?>
                                <h3>Cтоимость резки и распила</h3>
                                <div class="table__wrapper">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Материал</th>
                                                <th>Стоимость
                                                    1 реза
                                                </th>
                                                <th>Стоимость 2-го и последующих резов</th>
                                                <th>Инструмен</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $table_prices = get_field('tablicza_rezka_i_raspil');
                                            if ($table_prices) :
                                                foreach ($table_prices as $row) : ?>
                                                    <tr>
                                                        <td><?php echo $row['material'] ?></td>
                                                        <td><?php echo $row['stoimost_1_reza'] ?></td>
                                                        <td><?php echo $row['stoimost_2-go_i_posleduyushhih_rezov'] ?></td>
                                                        <td><?php echo $row['instrument'] ?></td>
                                                    </tr>
                                            <?php
                                                endforeach;
                                            endif;
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <?php the_field('tekst_snizu_rezka_i_raspil'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="services__body">
                        <div class="services__loyalty loyalty-services">
                            <h2>Программа лояльности</h2>
                            <div class="loyalty-services__content">
                                <div>
                                    <p>Вы уже являетесь клиентом <strong style="text-transform: uppercase">"ТД Спецстрой"</strong> или только
                                        планируете им стать?
                                        Для Вас мы разработали специальную программу – «Выгодные покупки с <strong style="text-transform: uppercase">"ТД
                                            Спецстрой"</strong>. Программа лояльности – это отличный способ
                                        отблагодарить
                                        своих клиентов за покупку товаров или услуг.</p>
                                </div>
                                <h3>Преимущества программы лояльности от <strong style="text-transform: uppercase">"ТД Спецстрой"</strong></h3>
                                <div class="loyalty-services__list">
                                    <div class="loyalty-services__item">
                                        <div class="loyalty-services__icon">
                                            <img data-src="<?php echo get_template_directory_uri() ?>/img/loyalty/icon-1.svg" alt="icon">
                                        </div>
                                        <div class="loyalty-services__title">скидки на широкий ассортимент товаров
                                        </div>
                                    </div>
                                    <div class="loyalty-services__item">
                                        <div class="loyalty-services__icon">
                                            <img data-src="<?php echo get_template_directory_uri() ?>/img/loyalty/icon-2.svg" alt="icon">
                                        </div>
                                        <div class="loyalty-services__title">Выгодные условия на услуги</div>
                                    </div>
                                    <div class="loyalty-services__item">
                                        <div class="loyalty-services__icon">
                                            <img data-src="<?php echo get_template_directory_uri() ?>/img/loyalty/icon-3.svg" alt="icon">
                                        </div>
                                        <div class="loyalty-services__title">Специальные цены и дополнительные
                                            бонусы
                                        </div>
                                    </div>
                                </div>
                                <?php the_field('tekst_programma_loyalnosti'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="services__body"></div>
                </div>
            </div>
        </div>
        <?php
        get_template_part('template-parts/services')
        ?>
    </div>
</main>

<?php
get_footer();
