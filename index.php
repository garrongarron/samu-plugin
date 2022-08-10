<?php
/**
 * Plugin Name: Samu
 * Description: El mejor plugin
 * Plugin URI: https://google.com
 * Author: SamuGarrondev
 * Version: 3.6.8
 * Author URI: https://twitter.com/samugarrondev
 */

require_once 'redirect_to_panel.php';
require_once 'featured_courses.php';

define('SAMU_PATH', WP_PLUGIN_DIR . '/samu/' );
define('ACADEMY_TPL_PATH', WP_PLUGIN_DIR . '/academy/templates/');

add_filter('academy/get_template', function($tplName){
    
    if($tplName ==  ACADEMY_TPL_PATH.'single-course/enroll/enroll-form.php'){
        return SAMU_PATH .'templates/single-course/enroll/enroll-form.php';
    }

    if($tplName == ACADEMY_TPL_PATH . 'single-course/enroll/wishlist-and-share.php'){
        return SAMU_PATH .'templates/single-course/enroll/wishlist-and-share.php';
    }

    
    return $tplName;
});

