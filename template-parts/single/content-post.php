<?php
function content_post_callback_function($atts)
{
    $params = shortcode_atts([
        'id' => 23, // house ID
        'main' => null, // main photo
        'vis1' => null, // visualisations
        'vis2' => null,
        'vis3' => null,
        'vis4' => null
    ], $atts);

    $post_visualisation = [];
    for ($i = 1; $i <= 4; $i++) if ($params['vis' . $i] !== null) $post_visualisation[] = $params['vis' . $i];

    $postpage_content = get_postpage_content();

    $__siteURI__ = get_site_url() . '/wp-content/';

    $house_id_query = $GLOBALS['wpdb']->prepare("SELECT * FROM house_details WHERE id=%d", $params['id']);
    $house_details = $GLOBALS['wpdb']->get_results($house_id_query, ARRAY_A)[0];

    ?>
    <!-- MAIN-BLOCK -->
    <div class="container">


        <section id="post-cover" class="sec-blk">
            <div class="sec-row-2">
                <div class="sec-col-img post-col-img">
                    <img src="https://spacerowaresidence.pl/wp-content/uploads/plan1.png" alt=""
                         onclick="img_box(this)"/>
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
                        <?php foreach ($post_visualisation as $vis) echo '<img src="' . $__siteURI__ . $vis . '" alt="" onclick="img_box(this);"/>'; ?>
                    </div>
                </div>
            </div>
        </section>


    </div>


    <?php get_common_content_details(); ?>
    <!-- /MAIN-BLOCK -->
    <?php
}

add_shortcode('content-post', 'content_post_callback_function');
add_shortcode('content_post', 'content_post_callback_function');

?>