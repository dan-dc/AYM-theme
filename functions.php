<?php

//	detect page and add body classes
	function add_body_class($classes) {

		if ( is_page_template( 'template-page-news.php' ) )
		$classes[] = 'news';

		if ( is_archive( 'gallery' ) )
		$classes[] = 'gallery';

		return $classes;
	}
	add_filter('body_class','add_body_class');
	
//	enable menus
	if (function_exists('add_theme_support')) {
		add_theme_support('menus');
	}
	
//	declare widget zones
    if (function_exists('register_sidebar')) {
	register_sidebar(array(
			'name' => 'widgetName',
			'id'   => 'widgetName',
			'before_widget' => '<div class="widgetName"',
			'after_widget'  => '</div>',
    	));
	}
	
//	enable page excerpts
	add_post_type_support( 'page', 'excerpt' );
	
//	trim excerpts to specific word count
	function trim_excerpt($string, $word_limit) {
		$words = explode(' ', $string);
		return implode(' ', array_slice($words, 0, $word_limit));
	}

/*	add read more links
	function read_more_link($output) {
		global $post;
		return $output . '<br><a href="<?php echo get_permalink($howWeHelp); ?>">Read more.</a>';
	}
	add_filter('the_excerpt', 'read_more_link');
	*/

//	enable featured image
	if (function_exists( 'add_theme_support')) { 
		add_theme_support( 'post-thumbnails' );
	}

//	add custom wp image sizes
	//add_image_size( name, width, height, crop=boolean );
	add_image_size( 'slider', 1020, 365, true );
	add_image_size( 'hero', 500, 200, true );
	add_image_size( 'gallery-thumb', 220, 110, true );
	add_image_size( 'gallery-large', 1020, 600, true );
	add_image_size( 'promo', 190, 110, true );
	add_image_size( 'news-thumb', 150, 100, true );
	add_image_size( 'footer-links', 130, 87, true );


// SASS/SCSS Stylesheet Definition
    function generate_css() {
        if(function_exists('wpsass_define_stylesheet')) {
            wpsass_define_stylesheet("style.scss");
            wpsass_define_stylesheet("style.css");
        }
    }
    add_action( 'after_setup_theme', 'generate_css' );
?>
