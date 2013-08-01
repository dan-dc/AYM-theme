<?php

//	detect page and add body classes
	function add_body_class($classes) {

		if ( is_page_template( 'template-page-news.php' ) )
		$classes[] = 'news';
		
		else if ( is_page_template( 'template-page-contributorsblog.php' ) )
		$classes[] = 'contributors-blog';
		
		else if ( is_page_template( 'template-page-musiciansstories.php' ) )
		$classes[] = 'musicians-stories';
		
		else if ( is_page_template( 'template-page-aymangels.php' ) )
		$classes[] = 'aym-angels';

		else if ( is_archive() and !(get_post_type() == 'gallery') ) 
		$classes[] = 'news';
		
		else if ( is_page_template( 'template-page-people.php' ) )
		$classes[] = 'people';

		else if ( is_page_template( 'template-page-donation.php' ) )
		$classes[] = 'donation';
		
		else if ( get_post_type() == 'gallery' ) 
		$classes[] = 'gallery';
		
//		else if ( is_post_type_archive( 'contributors_blog' ) )
//		$classes[] = 'contributors-blog';

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
            'name' => 'Right Sidebar',
            'id'   => 'right_sidebar',
            'before_widget' => '<section class="widget">',
            'after_widget'  => '</section>',
        ));
        
        register_sidebar(array(
            'name' => 'Left Info',
            'id'   => 'left_info',
            'before_widget' => '<div id="LeftInfo">',
            'after_widget'  => '</div>',
        ));
	}
	
//	admin footer override
	function wp_admin_dashboard_custom_footer_text( $default_text ) {
		return '<span id="footer-thankyou">Website created by <a href="http://www.design-culture.co.uk/" target="_blank" >Design Culture</a><span> | Powered by <a href="http://www.wordpress.org" target="_blank">WordPress</a>';
	}
	add_filter( 'admin_footer_text', 'wp_admin_dashboard_custom_footer_text' );

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
	add_image_size( 'gallery-thumb', 220, 146, true );
	add_image_size( 'gallery-large', 980, 600, true );
	add_image_size( 'people-thumb', 146, 195, true );
	add_image_size( 'promo', 190, 110, true );
	add_image_size( 'news-thumb', 150, 100, true );
	add_image_size( 'footer-links', 130, 87, true );
	add_image_size( 'donation_logo', 170, 70, true );


//	SASS/SCSS Stylesheet Definition
    function generate_css() {
        if(function_exists('wpsass_define_stylesheet')) {
            wpsass_define_stylesheet("style.scss", true);
        }
    }
    add_action( 'after_setup_theme', 'generate_css' );
	
//	add file type filter in media library
	function modify_post_mime_types( $post_mime_types ) {
		// select the mime type, here: 'application/pdf'
		// then we define an array with the label values
		$post_mime_types['application/pdf'] = array(
			__( 'PDFs' ), __( 'Manage PDFs' ), _n_noop( 'PDF <span class="count">(%s)</span>', 'PDFs <span class="count">(%s)</span>' )
		);
		$post_mime_types['application/vnd.openxmlformats-officedocument.wordprocessingml.document'] = array(
			__( 'DOCX' ), __( 'Manage DOCX' ), _n_noop( 'DOCX <span class="count">(%s)</span>', 'DOCX <span class="count">(%s)</span>' )
		);
		$post_mime_types['application/msword'] = array(
			__( 'DOCs' ), __( 'Manage DOCs' ), _n_noop( 'DOCs <span class="count">(%s)</span>', 'DOCs <span class="count">(%s)</span>' )
		);

		return $post_mime_types;
	}
	add_filter( 'post_mime_types', 'modify_post_mime_types' );
?>
