<?php
/**
 Plugin Name: Hunk Companion
 Plugin URI: https://themehunk.com/hunk-companion/
 Description: Hunk companion plugin is an essential plugin to add features of Front page sections in your site. An easy to use plugin with ThemeHunk WordPress themes.
 Version: 1.2.1
 Author: Themehunk Team
 Text Domain: hunk-companion
 Author URI: https://themehunk.com/
 @package Gogo Addon
 */
if ( ! defined( 'ABSPATH' ) ) exit;
// Version constant for easy CSS refreshes
define('HUNK_COMPANION', '1.1.12');
define('HUNK_COMPANION_EXT_FILE', __FILE__ );
define('HUNK_COMPANION_PLUGIN_DIR_URL', plugin_dir_url(HUNK_COMPANION_EXT_FILE));
define('HUNK_COMPANION_BASENAME', plugin_basename(HUNK_COMPANION_EXT_FILE) );
define('HUNK_COMPANION_DIR_PATH', plugin_dir_path(HUNK_COMPANION_EXT_FILE ) );
function hunk_companion_text_domain(){
	$theme = wp_get_theme();
	$themeArr=array();
	$themeArr[] = $theme->get( 'TextDomain' );
	$themeArr[] = $theme->get( 'Template' );
	return $themeArr;
}

function hunk_companion_gogolite_body_classes($classes){
         $classes[] = 'gogolite';
         return $classes;
}

function hunk_companion_load_plugin(){
$theme = hunk_companion_text_domain(); 
	if(in_array("almaira-shop", $theme)){
	require_once HUNK_COMPANION_DIR_PATH .'almaira-shop/almaira-shop-admin/init.php';
	require_once HUNK_COMPANION_DIR_PATH .'almaira-shop/demo/import-data.php';
	add_action( 'wp_enqueue_scripts', 'hunk_companion_almaira_shop_scripts' );
	}
	elseif(in_array("gogo", $theme)){
    require_once HUNK_COMPANION_DIR_PATH . 'gogolite/admin/gogo-function.php';
    require_once HUNK_COMPANION_DIR_PATH . 'gogolite/admin/init.php';
    add_filter('body_class', 'hunk_companion_gogolite_body_classes');
    add_action( 'wp_enqueue_scripts', 'hunk_companion_gogolite_scripts' );
	}
	elseif(in_array("open-shop", $theme)){
     require_once HUNK_COMPANION_DIR_PATH . 'open-shop/open-shop-admin/init.php';
      add_action( 'wp_enqueue_scripts', 'hunk_companion_open_shop_scripts' );
	}
}
add_action('after_setup_theme', 'hunk_companion_load_plugin');
function hunk_companion_gogolite_scripts(){
//Gogo frontpage styles	
wp_enqueue_style( 'gogo_section_css', HUNK_COMPANION_PLUGIN_DIR_URL.'gogolite/css/gogo-css/section.css', array(), '1.0.0' );
wp_enqueue_style( 'animate', HUNK_COMPANION_PLUGIN_DIR_URL.'gogolite/css/gogo-css/animate.css', array(), '1.0.0' );
//Gogo frontpage scripts
 wp_enqueue_script( 'owl.carousel', HUNK_COMPANION_PLUGIN_DIR_URL.'gogolite/js/gogo-js/owl.carousel.js', array( 'jquery' ), '', true );
 wp_enqueue_script( 'typer', HUNK_COMPANION_PLUGIN_DIR_URL.'gogolite/js/gogo-js/typer.js', array( 'jquery' ), '1.0.0', true );
 wp_enqueue_script( 'isotope.pkgd', HUNK_COMPANION_PLUGIN_DIR_URL.'gogolite/js/gogo-js/isotope.pkgd.js', array( 'jquery' ), '', false );
 wp_enqueue_script( 'izimodal', HUNK_COMPANION_PLUGIN_DIR_URL.'gogolite/js/gogo-js/iziModal.js', array( 'jquery' ), '1.0.0', false );
 wp_enqueue_script( 'vertical-navigation-modernizr', HUNK_COMPANION_PLUGIN_DIR_URL.'gogolite/js/gogo-js/vertical-navigation-modernizr.js', array( 'jquery' ), '', false );
 wp_enqueue_script( 'vertical-navigation-main', HUNK_COMPANION_PLUGIN_DIR_URL.'gogolite/js/gogo-js/vertical-navigation-main.js', array( 'jquery' ), '', false );
 wp_enqueue_script( 'wow', HUNK_COMPANION_PLUGIN_DIR_URL.'gogolite/js/gogo-js/wow.min.js', array( 'jquery' ), '', false );
 wp_enqueue_script( 'masonry', array( 'imagesloaded' ));
 wp_enqueue_script( 'gogo-frontpage-custom-js', HUNK_COMPANION_PLUGIN_DIR_URL.'gogolite/js/gogo-js/custom.js', array( 'jquery' ), '', false );
 wp_localize_script( 'gogo-frontpage-custom-js', 'frontendajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
}
function hunk_companion_almaira_shop_scripts(){
wp_enqueue_style( 'owl.carousel-css', HUNK_COMPANION_PLUGIN_DIR_URL.'almaira-shop/assets/css/owl.carousel.css', array(), '1.0.0' );
wp_enqueue_style( 'swiper-css', HUNK_COMPANION_PLUGIN_DIR_URL.'almaira-shop/assets/css/swiper.css', array(), '1.0.0' );
wp_enqueue_script( 'owl.carousel-js', HUNK_COMPANION_PLUGIN_DIR_URL.'gogolite/js/gogo-js/owl.carousel.js', array( 'jquery' ), '',false );
wp_enqueue_script( 'swiper-js', HUNK_COMPANION_PLUGIN_DIR_URL.'almaira-shop/assets/js/swiper.js', array( 'jquery' ), '', false );
wp_enqueue_script( 'isotope.pkgd', HUNK_COMPANION_PLUGIN_DIR_URL.'gogolite/js/gogo-js/isotope.pkgd.js', array( 'jquery' ), '', false );
wp_enqueue_script( 'almaira-custom-js', HUNK_COMPANION_PLUGIN_DIR_URL.'almaira-shop/assets/js/almaira-custom.js', array( 'jquery' ), '', false );
}

function hunk_companion_open_shop_scripts(){
wp_enqueue_style( 'owl.carousel-css', HUNK_COMPANION_PLUGIN_DIR_URL.'almaira-shop/assets/css/owl.carousel.css', array(), '1.0.0' );
wp_enqueue_script( 'owl.carousel-js', HUNK_COMPANION_PLUGIN_DIR_URL.'gogolite/js/gogo-js/owl.carousel.js', array( 'jquery' ), '',false );
wp_enqueue_script( 'jssor.slider-js', HUNK_COMPANION_PLUGIN_DIR_URL.'open-shop/assets/js/jssor.slider.min.js', array( 'jquery' ), '',false );
wp_enqueue_script( 'thunk-open-shop-custom-js', HUNK_COMPANION_PLUGIN_DIR_URL.'open-shop/assets/js/custom.js', array( 'jquery' ), '',true );
wp_enqueue_script( 'thunk-open-shop-woo-js', HUNK_COMPANION_PLUGIN_DIR_URL.'open-shop/open-shop-admin/woo/js/woocommerce.js', array( 'jquery' ), '',true );
$openshoplocalize = array(
				'open_shop_top_slider_optn' => get_theme_mod('open_shop_top_slider_optn',false),
				'open_shop_move_to_top_optn' => get_theme_mod('open_shop_move_to_top',false),
			);
wp_localize_script( 'thunk-open-shop-custom-js', 'open_shop',  $openshoplocalize);
$localize = array(
				'ajaxUrl'  => admin_url( 'admin-ajax.php' ),
				//cat-tab-filter
				'open_shop_single_row_slide_cat' => get_theme_mod('open_shop_single_row_slide_cat',false),
				//product-slider
				'open_shop_single_row_prdct_slide' => get_theme_mod('open_shop_single_row_prdct_slide',false),
				//product-list
				'open_shop_single_row_prdct_list' => get_theme_mod('open_shop_single_row_prdct_list',false),
				
				//cat-tab-list-filter
				'open_shop_single_row_slide_cat_tb_lst' => get_theme_mod('open_shop_single_row_slide_cat_tb_lst',false),
				

			);

wp_localize_script( 'thunk-open-shop-woo-js', 'openshop',  $localize);
}
