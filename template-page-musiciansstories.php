<?php
/**
 * The news page template file.
 *
 * Template Name: Musicians stories
 *
 */
get_header();
?>
			
<?php get_template_part( "template-core-masthead" ); ?>

	        <section id="content" class="clearfix">
                <?php get_template_part( 'content' ); ?>
	        </section><!-- /content -->
            
        	<div class="sidebar-panel grey left">
	    	    <?php if ( dynamic_sidebar('Left Info') ) : else : endif; ?>
        	</div>
            
        	<div class="sidebar-panel white right"></div>
	        
<?php get_footer(); ?>
