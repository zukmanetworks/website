<?php
/**
 * appside functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package appside
 */

/**
 * Define Appside Folder Path & Url Const
 * @since 1.0.0
 * */
define('APPSIDE_THEME_ROOT',get_template_directory());
define('APPSIDE_THEME_ROOT_URL',get_template_directory_uri());
define('APPSIDE_INC',APPSIDE_THEME_ROOT .'/inc');
define('APPSIDE_THEME_SETTINGS',APPSIDE_INC.'/theme-settings');
define('APPSIDE_THEME_SETTINGS_IMAGES',APPSIDE_THEME_ROOT_URL.'/inc/theme-settings/images');
define('APPSIDE_TGMA',APPSIDE_INC.'/plugins/tgma');
define('APPSIDE_DYNAMIC_STYLESHEETS',APPSIDE_INC.'/dynamic-stylesheets');
define('APPSIDE_CSS',APPSIDE_THEME_ROOT_URL.'/assets/css');
define('APPSIDE_JS',APPSIDE_THEME_ROOT_URL.'/assets/js');
define('APPSIDE_ASSETS',APPSIDE_THEME_ROOT_URL.'/assets');

/**
 * Theme Initial File
 * @since 1.0.0
 * */
if (file_exists(APPSIDE_INC .'/class-appside-init.php')){
	require_once APPSIDE_INC .'/class-appside-init.php';
}
if (file_exists(APPSIDE_INC .'/class-appside.php')){
	require_once APPSIDE_INC .'/class-appside.php';
}
/**
 * Codester Framework Functions
 * @since 1.0.0
 * */
if (file_exists(APPSIDE_INC .'/csf-functions.php')){
	require_once APPSIDE_INC .'/csf-functions.php';
}
/**
 * theme helpers functions
 * @since 1.0.0
 * */
if (file_exists(APPSIDE_INC .'/class-appside-helper-functions.php')){
	require_once APPSIDE_INC .'/class-appside-helper-functions.php';
	if (!function_exists('Appside')){
		function Appside(){
			return class_exists('Appside_Helper_Functions') ? new Appside_Helper_Functions() : false;
		}
	}

}


