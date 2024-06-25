<?php
//STYLES
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/portfolio.css', array(), filemtime(get_stylesheet_directory() . '/css/portfolio.css'));
    wp_enqueue_script('theme-script', get_stylesheet_directory_uri() . '/js/scripts.js',array('jquery'), filemtime(get_stylesheet_directory() . '/js/scripts.js'),true);
   
    $ajax=array(
      "ajaxurl"=>admin_url("admin-ajax.php"),
    );
    wp_add_inline_script('theme-script','let ajax_data='.wp_json_encode($ajax).";","before"); //traitement des requetes ajax
    
}

//MENU
function register_my_menu() {
    
    register_nav_menu('main-menu',__( 'Menu Principal' ));
    register_nav_menu('footer-menu',__( 'Menu Footer' ));

  }
  add_action( 'init', 'register_my_menu' );
  
//LOGO
  add_theme_support('custom-logo');  