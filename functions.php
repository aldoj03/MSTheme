<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
        
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );


function register_scripts() {
    wp_enqueue_script( 'blog_js', get_stylesheet_directory_uri() . '/js/blog_script.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'register_scripts' );


// END ENQUEUE PARENT ACTION

//POSTS AJAX CATEGORIES
function filter_projects() {
  
    $catSlug = $_POST['category'];
  
    $ajaxposts = new WP_Query([
  
      'posts_per_page' => -1,
      'category_name' => $catSlug,

    ]);
    $response = '';
  
    if($ajaxposts->have_posts()) {
      while($ajaxposts->have_posts()) : $ajaxposts->the_post();
        $response .= get_template_part('entry');
      endwhile;
    } else {
      $response = 'empty';
    }
  
    echo $response;
    exit;
  }
  add_action('wp_ajax_filter_projects', 'filter_projects');
  add_action('wp_ajax_nopriv_filter_projects', 'filter_projects');


  function load_more_posts()
  {
    global $wp_query;
    $max =   $wp_query->max_num_pages;

    $page = $_POST['page'];
  
    query_posts( [
  
      'posts_per_page' => -1,
      'paged' => $page,
    ] );
    $response = '';
  
    if(have_posts()) {
      while(have_posts()) : the_post();
        $response .= get_template_part('entry');
      endwhile;
    } else {
      $response = 'empty';
    }

    echo $response;
    wp_die();
  }
  add_action('wp_ajax_load_more_posts', 'load_more_posts');
  add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');


  // REGISTER WIDGET AREA


  function wpb_widgets_init() {
 
    register_sidebar( array(
        'name'          => 'Buscar Historias Widget Area',
        'id'            => 'buscar-historias',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
    ) );
 
}
add_action( 'widgets_init', 'wpb_widgets_init' );

//UNREGISTER SRCIPTS


function project_dequeue_unnecessary_scripts() {
  wp_dequeue_script( 'generic-videos' );
      wp_deregister_script( 'generic-videos' );
}
add_action( 'wp_print_scripts', 'project_dequeue_unnecessary_scripts' );

