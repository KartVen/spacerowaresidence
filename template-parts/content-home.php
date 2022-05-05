<?php

use Translator\Translator;

Translator::setLocaleByShort($args['locale']);

$__dirURI__ = get_template_directory_uri() . '/';
$__siteURI__ = get_site_url() . '/';

$house_details = $GLOBALS['wpdb']->get_results("SELECT * FROM house_details", ARRAY_A);

$sec_prev_ico = '<img src="' . $__dirURI__ . 'assets/images/logo.png" class="sec-prev-ico" alt>';

$sec_col_img = array(
    'assets/images/radwanice_s5.jpg',
    'assets/images/radwanice_s13.jpg',
    'assets/images/radwanice_s9.jpg',
    'assets/images/radwanice_s4.jpg',
    'assets/images/radwanice_s12.jpg',
    'assets/images/radwanice_s7.jpg',
    'assets/images/radwanice_s4.jpg'
);

$vis_slider = array(
    'assets/images/visualisation/radwanice_vis1.jpg',
    'assets/images/visualisation/radwanice_vis2.jpg',
    'assets/images/visualisation/radwanice_vis3.jpg',
    'assets/images/visualisation/radwanice_vis4.jpg'
);

?>
<!-- MAIN-BLOCK -->
<section id="home">
    <div class="banner">
        <img src="<?php header_image(); ?>" alt="<?= get_bloginfo('name'); ?>">
        <div class="banner-text-wrapper">
            <h1 class="banner-text-1"><?= Translator::get('banner.text'); ?></h1>
            <h3 class="banner-text-2"><?= Translator::get('banner.subtext'); ?></h3>
        </div>
    </div>
</section>


<div class="container">


    <h2 class="headline-que bicolor">
        <?= Translator::get('headline_que.1'); ?>
    </h2>


    <section id="intro" class="sec-blk">
        <div class="sec-row-2">
            <div class="sec-col-cnt home-col-cnt">
                <h4 class="sec-head">
                    <?= $sec_prev_ico . Translator::get('section.info.intro')[0]; ?>
                </h4>
                <div class="sec-info">
                    <ul>
                        <?= Translator::get('section.info.intro')[1]; ?>
                    </ul>
                </div>
            </div>
            <div class="sec-col-img home-col-img">
                <img src="<?= $__dirURI__ . $sec_col_img[0]; ?>" alt=""/>
            </div>
        </div>
    </section>


    <section id="offer" class="sec-blk">
        <div class="sec-row">
            <div class="sec-col-cnt home-col-cnt">
                <h4 class="sec-head">
                    <?= Translator::get('offer.head'); ?>
                </h4>
                <img src="" alt=""/>
                <img src="" alt=""/>
                <div class="offer-table-wrapper">
                    <table class="offer">
                        <tr>
                            <th><?= Translator::get('home.table.home'); ?></th>
                            <th><?= Translator::get('home.table.build_type'); ?></th>
                            <th><?= Translator::get('home.table.garden_type'); ?></th>
                            <th><?= Translator::get('home.table.usable_area'); ?></th>
                            <th><?= Translator::get('home.table.addon_area'); ?></th>
                            <th><?= Translator::get('home.table.sale_status'); ?></th>
                            <th><?= Translator::get('home.table.prize'); ?></th>
                        </tr>
                        <?php foreach ($house_details as $house_row): ?>
                            <tr>
                                <td><?= $house_row['id']; ?></td>
                                <td>
                                    <?php
                                    switch ($house_row['build_type']) {
                                        case '1':
                                            echo Translator::get('home.table.type') . ' L';
                                            break;
                                        case '2':
                                            echo Translator::get('home.table.type') . ' PR';
                                            break;
                                        case '3':
                                            echo Translator::get('home.table.corner');
                                            break;
                                        default:
                                            echo '';
                                    } ?>
                                </td>
                                <td>OP</td>
                                <td><?= $house_row['usable_area']; ?>m<sup>2</sup></td>
                                <td><?= Translator::get('home.table.garden') . ': ' . $house_row['garden_area']; ?>
                                    m<sup>2</sup></td>
                                <td>
                                    <?php
                                    switch ($house_row['sale_status']) {
                                        case '1':
                                            echo '<span class="status status-1">' . Translator::get('home.table.reservation') . '</span>';
                                            break;
                                        case '2':
                                            echo '<span class="status status-2">' . Translator::get('home.table.occupied') . '</span>';
                                            break;
                                        default:
                                            echo '<span class="status status-0">' . Translator::get('home.table.free') . '</span>';
                                    } ?>
                                </td>
                                <td>
                                    <?php
                                    switch ($house_row['sale_status']) {
                                        case '0':
                                            $house_link = $args['locale'] . '/' . Translator::get('home.table.category') . '/' . Translator::get('home.table.link') . '-' . $house_row['id'];
                                            echo '<a class="house-link" href="' . $__siteURI__ . $house_link . '" alt="">' . Translator::get('home.table.check') . '</a>';
                                            break;
                                        default:
                                            echo '--';
                                    } ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <div class="offer-legend">
                    <h5 class="legend-head">
                        <?= Translator::get('home.table.legend')[0]; ?>
                    </h5>
                    <div>
                        <?= Translator::get('home.table.legend')[1]; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="localisation" class="sec-blk">
        <div class="sec-row">
            <div class="sec-col-cnt home-col-cnt">
                <h4 class="sec-head">
                    <?= Translator::get('section.localisation.head'); ?>
                </h4>
                <div class="gmap">
                    <iframe
                            src="https://www.google.com/maps/d/u/0/embed?mid=1XCxm-Rw_VG4S6rjgbp84YnkHAvrsLpCq"
                            style="border:0;"
                            loading="lazy"
                            allowfullscreen
                    >
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <section id="why-us" class="sec-blk">
        <h2 class="headline-que bicolor">
            <?= Translator::get('headline_que.2'); ?>
        </h2>
        <div class="sec-row-2">
            <div class="sec-col-cnt home-col-cnt">
                <h4 class="sec-head">
                    <?= $sec_prev_ico . Translator::get('section.info.dev')[0]; ?>
                </h4>
                <div class="sec-info">
                    <ul>
                        <?= Translator::get('section.info.dev')[1]; ?>
                    </ul>
                </div>
            </div>
            <div class="sec-col-img home-col-img">
                <img src="<?= $__dirURI__ . $sec_col_img[1]; ?>" alt=""/>
            </div>
        </div>
        <div class="sec-row-2 reverse">
            <div class="sec-col-cnt home-col-cnt">
                <h4 class="sec-head">
                    <?= $sec_prev_ico . Translator::get('section.info.tech')[0]; ?>
                </h4>
                <div class="sec-info">
                    <ul>
                        <?= Translator::get('section.info.tech')[1]; ?>
                    </ul>
                </div>
            </div>
            <div class="sec-col-img home-col-img">
                <img src="<?= $__dirURI__ . $sec_col_img[2]; ?>" alt=""/>
            </div>
        </div>
        <div class="sec-row-2">
            <div class="sec-col-cnt home-col-cnt">
                <h4 class="sec-head">
                    <?= $sec_prev_ico . Translator::get('section.info.invest')[0]; ?>
                </h4>
                <div class="sec-info">
                    <ul>
                        <?= Translator::get('section.info.invest')[1]; ?>
                    </ul>
                </div>
            </div>
            <div class="sec-col-img home-col-img">
                <img src="<?= $__dirURI__ . $sec_col_img[3]; ?>" alt=""/>
            </div>
        </div>
        <div class="sec-row-2 reverse">
            <div class="sec-col-cnt home-col-cnt">
                <h4 class="sec-head">
                    <?= $sec_prev_ico . Translator::get('section.info.media')[0]; ?>
                </h4>
                <div class="sec-info">
                    <ul>
                        <?= Translator::get('section.info.media')[1]; ?>
                    </ul>
                </div>
            </div>
            <div class="sec-col-img home-col-img">
                <img src="<?= $__dirURI__ . $sec_col_img[4]; ?>" alt=""/>
            </div>
        </div>
        <div class="sec-row-2">
            <div class="sec-col-cnt home-col-cnt">
                <h4 class="sec-head">
                    <?= $sec_prev_ico . Translator::get('section.info.energy')[0]; ?>
                </h4>
                <div class="sec-info">
                    <ul>
                        <?= Translator::get('section.info.energy')[1]; ?>
                    </ul>
                </div>
            </div>
            <div class="sec-col-img home-col-img">
                <img src="<?= $__dirURI__ . $sec_col_img[5]; ?>" alt=""/>
            </div>
        </div>
        <div class="sec-row-2 reverse">
            <div class="sec-col-cnt home-col-cnt">
                <h4 class="sec-head">
                    <?= $sec_prev_ico . Translator::get('section.info.neighbor')[0]; ?>
                </h4>
                <div class="sec-info">
                    <ul>
                        <?= Translator::get('section.info.neighbor')[1]; ?>
                    </ul>
                </div>
            </div>
            <div class="sec-col-img home-col-img">
                <img src="<?= $__dirURI__ . $sec_col_img[6]; ?>" alt=""/>
            </div>
        </div>
    </section>


    <section id="visualisation" class="sec-blk">
        <div class="sec-row">
            <div class="sec-col-cnt home-col-cnt">
                <h4 class="sec-head">
                    <?= Translator::get('section.visualisation.head'); ?>
                </h4>
                <div class="visualisation-slider">
                    <?php foreach ($vis_slider as $vis_src) echo '<img class="vis-sld-imgs" src="' . $__dirURI__ . $vis_src . '"/>'; ?>
                    <button class="vis-button vis-button-left" onclick="changeSlideImg(-1)">&#10094;</button>
                    <button class="vis-button vis-button-right" onclick="changeSlideImg(1)">&#10095;</button>
                </div>
            </div>
        </div>
    </section>


</div>

<?php get_template_part('template-parts/single/section', 'contact', ['locale' => $args['locale'], 'sidebar' => 'sidebar_1_contact']); ?>

<?php get_template_part('template-parts/single/section', 'details', ['locale' => $args['locale']]); ?>

<script type="application/javascript">
    let slideIndex = 1;
    showSlideImg(slideIndex);

    function changeSlideImg(n) {
        showSlideImg(slideIndex += n);
    }

    function showSlideImg(n) {
        let i, imgData = document.getElementsByClassName("vis-sld-imgs");
        if (n > imgData.length) slideIndex = 1
        if (n < 1) slideIndex = imgData.length
        for (i = 0; i < imgData.length; i++) imgData[i].style.display = "none";
        imgData[slideIndex - 1].style.display = "block";
    }
</script>
<!-- /MAIN-BLOCK -->