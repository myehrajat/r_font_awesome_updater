<?php
/**
 * @package Rentit_Font_Awesome_Updater
 * @version 1.0
 */
/*
Plugin Name: Rentit Font Awesome Updater
Plugin URI: https://wordpress.org/plugins/hello-dolly/
Description: this make renit theme js and css file up to date
Version: 1.0
Author URI: https://ma.tt/
Text Domain: Rentit_Font_Awesome_Updater
*/
/* add forntend */
add_action( 'wp_enqueue_scripts', 'Rentit_Font_Awesome_Updater_dequeue_scripts', 400 );
add_action( 'wp_enqueue_scripts', 'Rentit_Font_Awesome_Updater_enqueue_scripts', 400 );
/* add backend */
/*add_action( 'admin_enqueue_scripts', 'Rentit_Font_Awesome_Updater_dequeue_scripts', 400 );
add_action( 'admin_enqueue_scripts', 'Rentit_Font_Awesome_Updater_enqueue_scripts', 400 );
/******************************************/
//Updating scripts
/******************************************/
/*function Rentit_Font_Awesome_Updater_enqueue_scripts() {}
function Rentit_Font_Awesome_Updater_dequeue_scripts(){}
/******************************************/
//Updating styles
/******************************************/
add_action( 'admin_enqueue_scripts', 'Rentit_Font_Awesome_Updater_dequeue_styles', 400 );
add_action( 'admin_enqueue_scripts', 'Rentit_Font_Awesome_Updater_enqueue_styles', 400 );
/* add forntend */
add_action( 'wp_enqueue_scripts', 'Rentit_Font_Awesome_Updater_dequeue_styles', 400 );
add_action( 'wp_enqueue_scripts', 'Rentit_Font_Awesome_Updater_enqueue_styles', 400 );
function Rentit_Font_Awesome_Updater_dequeue_styles() {
	wp_deregister_style( 'renita_font-awesome' );
}
function Rentit_Font_Awesome_Updater_enqueue_styles() {
	wp_enqueue_style( 'renita_font-awesome','https://use.fontawesome.com/releases/v5.6.1/css/all.css', array(), '5.6.0', false);
	//wp_enqueue_style( 'renita_font-awesome',plugins_url("Font-Awesome/css/fontawesome.min.css",__FILE__ ), array(), '5.6.0', false);
}
/*
syntax of fontawesome has some changes source:
theme version Font Awesome 4.6.3
plugin version Font Awesome 5.6.0
for changing syntax refer to:
//https://fontawesome.com/how-to-use/on-the-web/setup/upgrading-from-version-4
*/
add_action( 'wp_head', 'Rentit_Font_Awesome_Updater_update_syntax',PHP_INT_MAX );
function Rentit_Font_Awesome_Updater_update_syntax() {
	//all classes with fa should change to fas
  echo '<script>';?>
	jQuery( document ).ready( function( $ ) {
		jQuery('.fa').each(function() {
			jQuery(this).removeClass('fa');
			jQuery(this).addClass('fas');
		})
//not work life-ring and fa  fa-comments-o and even shows small icon
		jQuery('.fa-support').each(function($) {
			jQuery(this).removeClass('fa-support');
			jQuery(this).addClass('life-ring');
		})

	});
<?php
	echo '</script>';
}
