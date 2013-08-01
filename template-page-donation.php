<?php
/**
 * Template Name: Donation
 */
get_header();
?>
			
<?php get_template_part( "template-core-masthead" ); ?>
	        
	        <section id="content" class="clearfix">
            <?php get_sidebar('left'); ?>
	            <div id="MainContent">
                <?php
					if ( have_posts() ) : while ( have_posts() ) : the_post();
						get_template_part( 'content', 'donation' );
					endwhile; else: endif;
				?>
                </div>

	        </section><!-- /content -->
            
        	<div class="sidebar-panel grey left"></div>
	        
<?php get_footer(); ?>
