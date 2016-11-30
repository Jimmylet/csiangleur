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
add_image_size( 'thumb-photo-maison', 798, 293, true );
add_image_size( 'thumb-membre-equipe', 240, 155, true );
add_image_size( 'thumb-article-top', 960, 400, true );
add_image_size( 'thumb-article-bottom', 455, 240, true );
add_image_size( 'thumb-single-post', 1200, 420, true );


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


// Remove JS contact form 7
/*add_action( 'wp_enqueue_scripts', 'ac_remove_cf7_scripts' );

function ac_remove_cf7_scripts() {
	wp_deregister_style( 'contact-form-7' );
	wp_deregister_script( 'contact-form-7' );
}*/



// upload svg
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// Modify attribut wp-caption
add_shortcode('wp_caption', 'fixed_img_caption_shortcode');
add_shortcode('caption', 'fixed_img_caption_shortcode');
function fixed_img_caption_shortcode($attr, $content = null) {
	if ( ! isset( $attr['caption'] ) ) {
		if ( preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches ) ) {
			$content = $matches[1];
			$attr['caption'] = trim( $matches[2] );
		}
	}
	
	$output = apply_filters('img_caption_shortcode', '', $attr, $content);
	if ( $output != '' )
		return $output;
	
	extract(shortcode_atts(array(
		'id' => '',
		'align' => 'alignnone',
		'width' => '',
		'caption' => ''
	), $attr));
	
	if ( 1 > (int) $width || empty($caption) )
		return $content;
	
	if ( $id ) $id = 'id="' . esc_attr($id) . '" ';
	
	return '<div ' . $id . 'class="wp-caption ' . esc_attr($align) . '" style="max-width: ' . $width . 'px">' . do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></div>';
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);


