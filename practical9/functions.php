<?php

function enqueue_customtheme_styles() {
    wp_enqueue_script('bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js' ,array('jquery'));
    wp_enqueue_style('bootstarp','//stackpath.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
    wp_enqueue_style('googlefont', '//fonts.googleapis.com/css?family=Roboto+Mono:400,700');
    wp_enqueue_style("customtheme_style", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "enqueue_customtheme_styles");

function customTheme_setup() {
    register_nav_menus( array(
        "primary" => __("Primary Menu", "customTheme")
        ) );

	add_theme_support( 'title-tag' );
}

add_action("after_setup_theme", "customTheme_setup");

function customtheme_widgets() {
	register_sidebar(
		array(
            'name'              =>   __('Sidebar', 'customTheme'),
            'id'                =>   'sidebar-1',
            'description'       =>   __('Add widgets here to appear in sidebar', 'customTheme'),
			'class'             =>   'np',
			'before_widget'     =>   '<section id="%1$s" class="widget %2$s">',
			'after_widget'      =>   '</section>',
			'before_title'      =>   '<h2 class="widget-title">',
			'after_title'       =>   '</h2>'
		)
	);
}

add_action('widgets_init', 'customtheme_widgets');

if ( ! function_exists('custom_shortcode')) :

	function custom_shortcode ( $atts, $content = null ) {

		return '<div class="col-sm-4">'. $content . '</div>';
	}

endif;

add_shortcode( 'one-third', 'custom_shortcode');

remove_filter('the_content', 'wpautop');
// Custome Widget

require_once ('custome_widget.php');

?>