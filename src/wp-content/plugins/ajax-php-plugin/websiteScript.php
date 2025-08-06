<?php
/*
Plugin Name: CRUD logowania oraz rejestracji.
Description: Wtyczka modyfikuje stronę główną oraz dodane podstrony taką jak "Logowanie" aby zapewnić możliwość utworzenia konta, zalogowania się oraz za pomocą autoryzacji pozwolić użytkownikowi typu admin na modyfikacje rekordów z bazy.
Author: Sebastian Klawikowski
Author URI: https://sklawik.pl 
*/


function crudplugin_enqueue_scripts() {
    wp_enqueue_style('crudplugin-style', plugin_dir_url(__FILE__) . 'css/style.css');
   
}
 add_action('wp_enqueue_scripts', 'crudplugin_enqueue_scripts');
function crudplugin_main_shortcode() {
    ob_start();
    include plugin_dir_path(__FILE__) .'php/header.php';
    return ob_get_clean();
}
function crudplugin_auth_shortcode() {
    ob_start();
    include plugin_dir_path(__FILE__) .'php/auth/auth.php';
    return ob_get_clean();
}
function crudplugin_users_shortcode() {
    ob_start();
    include plugin_dir_path(__FILE__) .'php/users/users.php';
    return ob_get_clean();
}
add_shortcode('crudplugin_main', 'crudplugin_main_shortcode');
add_shortcode('crudplugin_auth', 'crudplugin_auth_shortcode');
add_shortcode('crudplugin_users', 'crudplugin_users_shortcode');