<?php

function content_home_callback_function($atts)
{
    $params = shortcode_atts([
        'lang' => 'pl'
    ], $atts);

    $args = array(
        'locale' => $params['lang']
    );

    get_template_part('template-parts/content', 'home', $args);
}

add_shortcode('content-home', 'content_home_callback_function');
add_shortcode('content_home', 'content_home_callback_function');

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

    $args = array(
        'id' => $params['id'],
        'locale' => $params['lang'],
        'main' => $params['main'],
        'vis1' => $params['vis1'],
        'vis2' => $params['vis2'],
        'vis3' => $params['vis3'],
        'vis4' => $params['vis4'],
    );

    get_template_part('template-parts/content', 'post', $args);
}

add_shortcode('content-post', 'content_post_callback_function');
add_shortcode('content_post', 'content_post_callback_function');
