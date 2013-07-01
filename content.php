<?php

/**
 * The default template for displaying content
 */
 
 ?>
 
<?php

if( is_front_page() ) :
	// start the loop
	if ( have_posts() ) : while ( have_posts() ) : the_post();
		// get the content
		get_template_part( 'content', 'home' );
		
	endwhile; else: endif; 

else :

	get_sidebar('left'); 
?>
 
	            <div id="MainContent">
                
<?php
 // start the loop
 if ( have_posts() ) : while ( have_posts() ) : the_post();

	//if( is_page() ) {
	if( is_page_template( 'page.php' ) ) {
		get_template_part( 'content', 'page' );
	}

	elseif( is_single() ) {
		get_template_part( 'content', 'single' );
	}
	
	elseif( is_page_template( 'template-page-news.php' ) ) {
		get_template_part( 'content', 'news' );
	}
		
	else { 
		get_template_part( 'content', 'default' );
	}

endwhile; else: endif; 

?>

	        	</div><!-- /main-content -->

<?php 
	get_sidebar('right'); 
	
endif; // end main if

?>
