<?php

register_nav_menus(
    array(
        'primary_menu'=>'Top Menus',
        'sub_menu'=> 'Footer Menu'
    ));

add_post_type_support('page','excerpt');
add_post_type_support('post','excerpt');

add_theme_support('post-thumbnails');
add_theme_support('custom-background');
add_theme_support('custom-header');

register_sidebar(
    array(
        'name' => 'Sidebar Location',
        'id' => 'sidebar',
        'description' => 'This is the evs sidebar.',
        'before-title' => '<h4 class="widget-title">',
        'after-title' => '</h4>'
    ));

require_once 'include/customizer.php';

add_action('customize_register', 'evs_customization');

if ( ! function_exists( 'post_pagination' ) ) :
    function post_pagination() {
      global $wp_query;
      $pager = 999999999; // need an unlikely integer
  
         echo paginate_links( array(
              'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
              'format' => '?paged=%#%',
              'current' => max( 1, get_query_var('paged') ),
              'total' => $wp_query->max_num_pages
         ) );
    }
endif;


?>