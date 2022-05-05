<?php

use Translator\Translator;

Translator::setLocaleByShort($args['locale']);

$post_visualisation = [];
for ($i = 1; $i <= 4; $i++)
    if ($args['vis' . $i] !== null)
        $post_visualisation[] = $args['vis' . $i];

$house_id_query = $GLOBALS['wpdb']->prepare('SELECT * FROM house_details WHERE id=%d', $args['id']);
$house_details = $GLOBALS['wpdb']->get_results($house_id_query, ARRAY_A)[0];

?>
<!-- MAIN-BLOCK -->
<div class="container">


    <section id="post-cover" class="sec-blk">
        <div class="sec-row-2">
            <div id="cover-img-wrapper" class="sec-col-img post-col-img">
                <?= $args['main']; ?>
                <script type="application/javascript">
                    document.getElementById('cover-img-wrapper').getElementsByTagName('img')[0].addEventListener("click", (e) => {
                        img_box(e.target);
                    });
                </script>
            </div>
            <div class="sec-col-cnt post-col-cnt">
                <h4 class="sec-head bicolor">
                    <?= Translator::get('section.cover.text'); ?>
                    <span>
                        <?php printf(Translator::get('section.cover.subtext'), $args['id']); ?>
                    </span>
                </h4>
                <div class="sec-info">
                    <table class="house-info-details">
                        <tr>
                            <td>
                                <span class="value"><?= $house_details['prize_total'] ?> PLN</span>
                                <span class="key"><?= Translator::get('house.table.prize_total'); ?></span>
                            </td>
                            <td>
                                <span class="value"><?= $house_details['prize_meter'] ?> PLN/m<sup>2</sup></span>
                                <span class="key"><?= Translator::get('house.table.prize_meter'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="value"><?= $house_details['usable_area'] ?>m<sup>2</sup></span>
                                <span class="key"><?= Translator::get('house.table.usable_area'); ?></span>
                            </td>
                            <td>
                                <span class="value"><?= $house_details['garden_area'] ?>m<sup>2</sup></span>
                                <span class="key"><?= Translator::get('house.table.garden_area'); ?></span>
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
                                                echo Translator::get('house.table.corner');
                                                break;
                                            default:
                                                echo '';
                                        } ?>
                                    </span>
                                <span class="key"><?= Translator::get('house.table.build_type'); ?></span>
                            </td>
                            <td>
                                <span class="value">2.7m</span>
                                <span class="key"><?= Translator::get('house.table.build_height'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <?php
                                switch ($house_details['sale_status']) {
                                    case '1':
                                        echo '<span class="value status status-1">' . Translator::get('house.table.reservation') . '</span>';
                                        break;
                                    case '2':
                                        echo '<span class="value status status-2">' . Translator::get('house.table.occupied') . '</span>';
                                        break;
                                    default:
                                        echo '<span class="value status status-0">' . Translator::get('house.table.free') . '</span>';
                                } ?>
                                <span class="key"><?= Translator::get('house.table.status'); ?></span>
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
                    <?= Translator::get('section.cross.head'); ?>
                </h4>
                <div class="post-visualisation-wrapper">
                    <?php foreach ($post_visualisation as $vis) echo $vis; ?>
                    <script type="application/javascript">
                        [].forEach.call(document.getElementsByClassName('post-visualisation-wrapper')[0].getElementsByTagName('img'), (e) => {
                            e.addEventListener("click", (e) => {
                                img_box(e.target);
                            });
                        });
                    </script>
                </div>

            </div>
        </div>
    </section>


</div>

<?php get_template_part('template-parts/single/section', 'contact', ['sidebar' => 'sidebar_2_contact']); ?>
<!-- /MAIN-BLOCK -->