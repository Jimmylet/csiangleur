<?php

// Enregistrer une nouvelle version de jQuery
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js", '', '', true);
    wp_enqueue_script('jquery');
}

// Thumbnails
add_theme_support( 'post-thumbnails' );
add_image_size( 'thumb-photo-maison', 798, 293, false );
add_image_size( 'thumb-membre-equipe', 240, 155, true );


// Options ACF
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
	acf_add_options_sub_page('Horaires');
	acf_add_options_sub_page('Footer');
}

// Class mailchimp
add_filter( 'mc4wp_form_css_classes', function( $classes ) {
	$classes[] = 'newsletter-form';
	return $classes;
});

// Désactiver la barre d’administration
show_admin_bar(false);

// Définir chemin raccourcis
$images = get_template_directory_uri() . '/assets/images/';
$scripts = get_template_directory_uri() . '/assets/scripts';


// Postypes



// Thumbnails






// upload svg
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
