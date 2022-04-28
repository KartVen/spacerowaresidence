<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php echo get_bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Osiedle Spacerowe we Wrocławiu - Znajdź i Wybierz Swój Wymarzony Dom"/>
    <meta name="keywords" content="spacerowa, residence, osiedle, spacerowe, wroclaw, ulanska, wymarzony, dom"/>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="<?php echo get_home_url(); ?>" alt="<?php echo get_bloginfo('name'); ?>">
                    <?php
                    //$custom_logo_id = get_theme_mod('custom_logo');
                    $image = [null];//wp_get_attachment_image_src($custom_logo_id, 'full');
                    echo '<img src="' . $image[0] . '" alt="' . get_bloginfo('name') . '"/>';
                    ?>
                    <div class="cnt"><?php echo get_bloginfo('name'); ?></div>
                </a>
            </div>
            <button class="menu-btn" onclick="menuClick()">
                <span class="menu-btn-box">
                    <span class="menu-btn-bar"></span>
                </span>
            </button>
            <nav class="navmenu-nav">
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'navmenu',
                        'container' => '',
                        'theme_location' => 'navmenu',
                        'items_wrap' => '<ul class="navmenu">%3$s</ul>'
                    )
                );
                ?>
            </nav>
        </div>
    </div>
</header>
