<?php
$defaults = array(
	'default-image'          => '',
	'random-default'         => false,
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => '',
	'header-text'            => true,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);

function theme_setup() {

    add_theme_support('custom-header', $defaults);

    add_theme_support('menus');

    add_theme_support('automatic-feed-links');

}
add_action('after_setup_theme', 'theme_setup');

?>