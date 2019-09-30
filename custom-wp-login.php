<?php

/**
 * Plugin Name: Custom WP Login
 * Version: 1.0.0
 * Author: Zohaib Tariq
 * License: GPL2+
 * Text DomainL cwpl
 * Description: Customize your WordPress login page.
 */


add_action( 'login_enqueue_scripts', 'cwpl_login_stylesheet' );
/**
 * Load custom stylsheet on login page.
*/
function cwpl_login_stylesheet() {
    wp_enqueue_style( 'cwpl-custom-stylesheet', plugin_dir_url(__FILE__) . 'login-style.css' );
}


add_filter( 'login_errors', 'cwpl_error_message' );
/**
 * Returns a custom login error message.
 * use __return_null to output no error message.
 */
function cwpl_error_message() {
    return "Well, that is not it";
}


add_action( 'login_head', 'cwpl_remove_shake' );
/**
 * Remove the login shake.
 */
function cwpl_remove_shake() {
    remove_action( 'login_head', 'wp_shake_js', 12 );
}
