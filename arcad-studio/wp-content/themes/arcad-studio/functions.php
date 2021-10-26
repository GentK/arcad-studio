<?php
add_theme_support( 'post-thumbnails' );
function wpb_custom_new_menu() {
    register_nav_menu('header-menu',__( 'Header menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );
function mailtrap($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '347e0188937b9b';
    $phpmailer->Password = '273cf1914bc8bc';
}

add_action('phpmailer_init', 'mailtrap');