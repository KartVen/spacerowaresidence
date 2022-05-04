<?php
function content_post_callback_function($atts)
{
    $params = shortcode_atts([
        'id' => 23, // house ID
        'lang' => 'pl',
        'main' => null, // main photo
        'vis1' => null, // visualisations
        'vis2' => null,
        'vis3' => null,
        'vis4' => null
    ], $atts);

    $post_visualisation = [];
    for ($i = 1; $i <= 4; $i++) if ($params['vis' . $i] !== null) $post_visualisation[] = $params['vis' . $i];

    $lang = strtolower($params['lang']);
    $postpage_content = get_postpage_content($lang);

    $house_id_query = $GLOBALS['wpdb']->prepare("SELECT * FROM house_details WHERE id=%d", $params['id']);
    $house_details = $GLOBALS['wpdb']->get_results($house_id_query, ARRAY_A)[0];

    ?>
    <!-- MAIN-BLOCK -->
    <div class="container">


        <section id="post-cover" class="sec-blk">
            <div class="sec-row-2">
                <div id="cover-img-wrapper" class="sec-col-img post-col-img">
					<?php echo $params['main']; ?>
					<script type="application/javascript">
						document.getElementById('cover-img-wrapper').getElementsByTagName('img')[0].addEventListener("click", (e) => { img_box(e.target); });
					</script>
                </div>
                <div class="sec-col-cnt post-col-cnt">
                    <h4 class="sec-head bicolor">
                        <?php echo $postpage_content['cover'][0]; ?>
                        <span>
                            <?php echo $postpage_content['cover'][1] . ' ' . $house_details['id']; ?>
                        </span>
                    </h4>
                    <div class="sec-info">
                        <table class="house-info-details">
                            <tr>
                                <td>
                                    <span class="value"><?php echo $house_details['prize_total'] ?> PLN</span>
                                    <span class="key"><?php echo $postpage_content['table']['prize_total']; ?></span>
                                </td>
                                <td>
                                    <span class="value"><?php echo $house_details['prize_meter'] ?> PLN/m<sup>2</sup></span>
                                    <span class="key"><?php echo $postpage_content['table']['prize_meter']; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="value"><?php echo $house_details['usable_area'] ?>m<sup>2</sup></span>
                                    <span class="key"><?php echo $postpage_content['table']['usable_area']; ?></span>
                                </td>
                                <td>
                                    <span class="value"><?php echo $house_details['garden_area'] ?>m<sup>2</sup></span>
                                    <span class="key"><?php echo $postpage_content['table']['garden_area']; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="value">
                                        <?php
                                        switch ($house_details['build_type']) {
                                            case '1':
                                                echo 'L';
                                                break;
                                            case '2':
                                                echo 'PR';
                                                break;
                                            case '3':
                                                echo $postpage_content['table']['corner'];
                                                break;
                                            default:
                                                echo '';
                                        } ?>
                                    </span>
                                    <span class="key"><?php echo $postpage_content['table']['build_type']; ?></span>
                                </td>
                                <td>
                                    <span class="value">2.7m</span>
                                    <span class="key"><?php echo $postpage_content['table']['build_height']; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <?php
                                    switch ($house_details['sale_status']) {
                                        case '1':
                                            echo '<span class="value status status-1">' . $postpage_content['table']['reservation'] . '</span>';
                                            break;
                                        case '2':
                                            echo '<span class="value status status-2">' . $postpage_content['table']['occupied'] . '</span>';
                                            break;
                                        default:
                                            echo '<span class="value status status-0">' . $postpage_content['table']['free'] . '</span>';
                                    } ?>
                                    <span class="key"><?php echo $postpage_content['table']['status']; ?></span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>


        <section id="post-visualisation" class="sec-blk">
            <div class="sec-row">
                <div class="sec-col-cnt home-col-cnt post-col-cnt">
                    <h4 class="sec-head">
                        Elewacje, przekroje
                    </h4>
                    <div class="post-visualisation-wrapper">
                        <?php foreach ($post_visualisation as $vis) echo $vis; ?>
						<script type="application/javascript">
						    [].forEach.call(document.getElementsByClassName('post-visualisation-wrapper')[0].getElementsByTagName('img'), (e) => {
								e.addEventListener("click", (e) => { img_box(e.target); });
							});
						</script>
                    </div>
					
                </div>
            </div>
        </section>


    </div>


    <section id="contact" class="sec-blk">
        <?php $common_content = get_common_content($lang); ?>
        <div class="container">
            <div class="sec-row">
                <div class="sec-col-cnt home-col-cnt">
                    <h4 class="sec-head">
                        <?php echo $common_content['contact']['head']; ?>
                    </h4>
                    <div class="contact-wrapper">
                        <div class="contact-info">
                            <div class="contact-intro">
                                <?php echo $common_content['contact']['content']; ?>
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
                            <?php dynamic_sidebar('sidebar_2_contact'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec-row data-admin">
				<span>
					<?php echo $common_content['contact']['data_admin']; ?>
				</span>
            </div>
        </div>
    </section>

    <?php get_common_content_details($lang); ?>
    <!-- /MAIN-BLOCK -->
    <?php
}

add_shortcode('content-post', 'content_post_callback_function');
add_shortcode('content_post', 'content_post_callback_function');

?>