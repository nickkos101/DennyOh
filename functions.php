<?php

//Register Areas
register_nav_menus( 
    array(
     'Header_Nav' => 'Header Navigation Area',
     ) 
    );

register_sidebar( 
    array(
        'name' => __( 'Page Sidebar', 'wpb' ),
        'id' => 'sidebar-1',
        'description' => __( 'The blog sidebar appears on the right hand side.', 'wpb' ),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3><div class="widget-content">',
        ) 
    );

register_sidebar( 
    array(
        'name' => __( 'Homepage Sidebar', 'test' ),
        'id' => 'sidebar-2',
        'description' => __( 'The sidebar appears on the slider of the homepage', 'test' ),
        'before_widget' => '<div class="widget-homepage %2$s">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3><div class="widget-content">',
        ) 
    );

//Customized Exerpt
function custom_excerpt_length( $length ) {
    return 32;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

//Custom Post Type Registrations
function idxPro_create_post_type() {
    register_post_type('neighborhoods', array(
        'labels' => array(
            'name' => __('Neighborhoods'),
            'singular_name' => __('Neighborhood')
            ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'neighborhoods'),
        'supports' => array('editor', 'thumbnail', 'title'),
        )
    );
    register_post_type('buildings', array(
        'labels' => array(
            'name' => __('Buildings'),
            'singular_name' => __('Building')
            ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'buildings'),
        'supports' => array('editor', 'thumbnail', 'title'),
        )
    );
        //Debugger Option
    $set = get_option('post_type_rules_flased_buildings');
    if ($set !== true){
       flush_rewrite_rules(false);
       update_option('post_type_rules_flased_buildings',true);
   }
}

add_action('init', 'idxPro_create_post_type');

//Theme Supports
add_theme_support('post-thumbnails');

?>