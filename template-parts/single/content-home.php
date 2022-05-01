<?php
function content_home_callback_function($atts)
{
    $params = shortcode_atts([
        'lang' => 'pl'
    ], $atts);
    $lang = strtolower($params['lang']);
    $homepage_content = get_homepage_content($lang);

    $__dirURI__ = get_template_directory_uri() . '/';
    $__siteURI__ = get_site_url() . '/';
    $__siteName__ = get_bloginfo('name');

    $house_details = $GLOBALS['wpdb']->get_results("SELECT * FROM house_details", ARRAY_A);

    $sec_prev_ico = '<img src="' . $__dirURI__ . 'assets/images/logo.png" class="sec-prev-ico" alt="' . $__siteName__ . '">';

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
            <img src="<?php header_image(); ?>" alt="<?php echo $__siteName__; ?>">
            <div class="banner-text-wrapper">
                <h1 class="banner-text-1"><?php echo $homepage_content['banner'][0]; ?></h1>
                <h3 class="banner-text-2"><?php echo $homepage_content['banner'][1]; ?></h3>
            </div>
        </div>
    </section>


    <div class="container">


        <h2 class="headline-que bicolor">
            <?php echo $homepage_content['headline_que'][0]; ?>
        </h2>


        <section id="intro" class="sec-blk">
            <div class="sec-row-2">
                <div class="sec-col-cnt home-col-cnt">
                    <h4 class="sec-head">
                        <?php echo $sec_prev_ico . $homepage_content["section"]["info_1"][0]; ?>
                    </h4>
                    <div class="sec-info">
                        <?php echo $homepage_content["section"]["info_1"][1]; ?>
                    </div>
                </div>
                <div class="sec-col-img home-col-img">
                    <img src="<?php echo $__dirURI__ . $sec_col_img[0]; ?>" alt=""/>
                </div>
            </div>
        </section>


        <section id="offer" class="sec-blk">
            <div class="sec-row">
                <div class="sec-col-cnt home-col-cnt">
                    <h4 class="sec-head">
                        <?php echo $homepage_content['section']['offer'][0]; ?>
                    </h4>
                    <img src="" alt=""/>
                    <img src="" alt=""/>
                    <div class="offer-table-wrapper">
                        <table class="offer">
                            <tr>
                                <th><?php echo $homepage_content['table']['home']; ?></th>
                                <th><?php echo $homepage_content['table']['build_type']; ?></th>
                                <th><?php echo $homepage_content['table']['garden_type']; ?></th>
                                <th><?php echo $homepage_content['table']['usable_area']; ?></th>
                                <th><?php echo $homepage_content['table']['addon_area']; ?></th>
                                <th><?php echo $homepage_content['table']['sale_status']; ?></th>
                                <th><?php echo $homepage_content['table']['prize']; ?></th>
                            </tr>
                            <?php foreach ($house_details as $house_row): ?>
                                <tr>
                                    <td><?php echo $house_row['id']; ?></td>
                                    <td>
                                        <?php
                                        switch ($house_row['build_type']) {
                                            case '1':
                                                echo $homepage_content['table']['type'] . ' L';
                                                break;
                                            case '2':
                                                echo $homepage_content['table']['type'] . ' PR';
                                                break;
                                            case '3':
                                                echo $homepage_content['table']['corner'];
                                                break;
                                            default:
                                                echo '';
                                        } ?>
                                    </td>
                                    <td>OP</td>
                                    <td><?php echo $house_row['usable_area']; ?>m<sup>2</sup></td>
                                    <td><?php echo $homepage_content['table']['garden'] . ': ' . $house_row['garden_area']; ?>m<sup>2</sup></td>
                                    <td>
                                        <?php
                                        switch ($house_row['sale_status']) {
                                            case '1':
                                                echo '<span class="status status-1">' . $homepage_content['table']['reservation'] . '</span>';
                                                break;
                                            case '2':
                                                echo '<span class="status status-2">' . $homepage_content['table']['occupied'] . '</span>';
                                                break;
                                            default:
                                                echo '<span class="status status-0">' . $homepage_content['table']['free'] . '</span>';
                                        } ?>
                                    </td>
                                    <td>
                                        <?php
                                        switch ($house_row['sale_status']) {
                                            case '0':
                                                $house_link = $lang . '/' . $homepage_content['table']['category'] . '/' . $homepage_content['table']['link'] . '-' . $house_row['id'];
                                                echo '<a class="house-link" href="' . $__siteURI__ . $house_link . '" alt="">' . $homepage_content['table']['check'] . '</a>';
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
                            <?php echo $homepage_content['legend'][0]; ?>
                        </h5>
                        <div>
                            <?php
                            $legend_len = count($homepage_content['legend']);
                            for ($i = 1; $i < $legend_len; $i++) echo '<p>' . $homepage_content['legend'][$i] . '</p>';;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="localisation" class="sec-blk">
            <div class="sec-row">
                <div class="sec-col-cnt home-col-cnt">
                    <h4 class="sec-head">
                        <?php echo $homepage_content['section']['localisation'][0]; ?>
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
                <?php echo $homepage_content['headline_que'][1]; ?>
            </h2>
            <div class="sec-row-2">
                <div class="sec-col-cnt home-col-cnt">
                    <h4 class="sec-head">
                        <?php echo $sec_prev_ico . $homepage_content["section"]["info_2"][0]; ?>
                    </h4>
                    <div class="sec-info">
                        <?php echo $homepage_content["section"]["info_2"][1]; ?>
                    </div>
                </div>
                <div class="sec-col-img home-col-img">
                    <img src="<?php echo $__dirURI__ . $sec_col_img[1]; ?>" alt=""/>
                </div>
            </div>
            <div class="sec-row-2 reverse">
                <div class="sec-col-cnt home-col-cnt">
                    <h4 class="sec-head">
                        <?php echo $sec_prev_ico . $homepage_content["section"]["info_3"][0]; ?>
                    </h4>
                    <div class="sec-info">
                        <?php echo $homepage_content["section"]["info_3"][1]; ?>
                    </div>
                </div>
                <div class="sec-col-img home-col-img">
                    <img src="<?php echo $__dirURI__ . $sec_col_img[2]; ?>" alt=""/>
                </div>
            </div>
            <div class="sec-row-2">
                <div class="sec-col-cnt home-col-cnt">
                    <h4 class="sec-head">
                        <?php echo $sec_prev_ico . $homepage_content["section"]["info_4"][0]; ?>
                    </h4>
                    <div class="sec-info">
                        <?php echo $homepage_content["section"]["info_4"][1]; ?>
                    </div>
                </div>
                <div class="sec-col-img home-col-img">
                    <img src="<?php echo $__dirURI__ . $sec_col_img[3]; ?>" alt=""/>
                </div>
            </div>
            <div class="sec-row-2 reverse">
                <div class="sec-col-cnt home-col-cnt">
                    <h4 class="sec-head">
                        <?php echo $sec_prev_ico . $homepage_content["section"]["info_5"][0]; ?>
                    </h4>
                    <div class="sec-info">
                        <?php echo $homepage_content["section"]["info_5"][1]; ?>
                    </div>
                </div>
                <div class="sec-col-img home-col-img">
                    <img src="<?php echo $__dirURI__ . $sec_col_img[4]; ?>" alt=""/>
                </div>
            </div>
            <div class="sec-row-2">
                <div class="sec-col-cnt home-col-cnt">
                    <h4 class="sec-head">
                        <?php echo $sec_prev_ico . $homepage_content["section"]["info_6"][0]; ?>
                    </h4>
                    <div class="sec-info">
                        <?php echo $homepage_content["section"]["info_6"][1]; ?>
                    </div>
                </div>
                <div class="sec-col-img home-col-img">
                    <img src="<?php echo $__dirURI__ . $sec_col_img[5]; ?>" alt=""/>
                </div>
            </div>
            <div class="sec-row-2 reverse">
                <div class="sec-col-cnt home-col-cnt">
                    <h4 class="sec-head">
                        <?php echo $sec_prev_ico . $homepage_content["section"]["info_7"][0]; ?>
                    </h4>
                    <div class="sec-info">
                        <?php echo $homepage_content["section"]["info_7"][1]; ?>
                    </div>
                </div>
                <div class="sec-col-img home-col-img">
                    <img src="<?php echo $__dirURI__ . $sec_col_img[6]; ?>" alt=""/>
                </div>
            </div>
        </section>


        <section id="visualisation" class="sec-blk">
            <div class="sec-row">
                <div class="sec-col-cnt home-col-cnt">
                    <h4 class="sec-head">
                        <?php echo $homepage_content['section']['visualisation'][0]; ?>
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


    <section id="contact" class="sec-blk">
        <div class="container">
            <div class="sec-row">
                <div class="sec-col-cnt home-col-cnt">
                    <h4 class="sec-head">
                        <?php echo $homepage_content['section']['contact'][0]; ?>
                    </h4>
                    <div class="contact-wrapper">
                        <div class="contact-info">
                            <div class="contact-intro">
                                <?php echo $homepage_content['section']['contact'][1]; ?>
                            </div>
                            <ul class="contact-list">
                                <li><a href="tel:+48604082700"><i class="fa fa-phone fa-2x"></i>+48 604 082 700</a></li>
                                <li><a href="mailto:spacerowa.residence@wp.pl"><i class="fa fa-envelope fa-2x"></i>spacerowa.residence@wp.pl</a>
                                </li>
                                <li><a href="https://www.facebook.com/Osiedle-Spacerowe-105859915255925"><i
                                                class="fa fa-facebook fa-2x"></i>Facebook</a></li>
                                <li><a href="https://www.instagram.com/osiedle_spacerowe"><i
                                                class="fa fa-instagram fa-2x"></i>Instagram</a></li>
                            </ul>
                        </div>
                        <div id="contact-form">
                            <?php dynamic_sidebar('sidebar_1_contact'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec-row data-admin">
				<span>
					Administratorem danych jest firma SPACEROWA RESIDENCE Sp. z o.o. Sp. komandytowa, ul. Ułańska 13, 52-213 Wrocław. Podanie danych jest dobrowolne, powyższe dane będą przetwarzane przez firmę SPACEROWA RESIDENCE Sp. z o.o. Sp. komandytowa, w celu przekazania informacji o ofercie handlowej (telefonicznie lub e-mailowo). Przysługuje Państwu prawo dostępu do treści swoich danych, ich poprawiania lub usunięcia. Wszelką korespondencję w sprawach związanych z przetwarzaniem danych osobowych, o którym mowa powyżej, należy kierować na adres: firmy SPACEROWA RESIDENCE Sp. z o.o. Sp. komandytowa, ul. Ułańska 13, 52-213 Wrocław z dopiskiem „Dane Osobowe”.
				</span>
            </div>
        </div>
    </section>

    <?php get_common_content_details($lang); ?>

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
    <?php
}

add_shortcode('content-home', 'content_home_callback_function');
add_shortcode('content_home', 'content_home_callback_function');

?>