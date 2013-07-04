<?php
/**
 * The news page template file.
 *
 * Template Name: Contact
 *
 */
get_header();
?>
			
<?php get_template_part( "template-core-masthead" ); ?>

	        <section id="content" class="clearfix">
                <?php get_template_part( 'content' ); ?>
	        </section><!-- /content -->
            
        	<div class="sidebar-panel grey left">
	    	    <div id="LeftInfo">
	    	        <h4>Make a donation</h4>
	    	        <p>Your support will make a real difference to childrens lifes, find out how to make a donation <a href="#">here</a>.</p>
	    	    </div>
        	</div>
            
        	<div class="sidebar-panel white right"></div>
	        
<?php get_footer(); ?>
