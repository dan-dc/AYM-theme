<?php
/**
 * The page template file.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 */
get_header();
?>
			
<?php get_template_part( "template-core-masthead" ); ?>
	        
	        <section id="content" class="clearfix">
            <?php get_sidebar('left'); ?>
	            <div id="MainContent">
                <?php
					if ( have_posts() ) : while ( have_posts() ) : the_post();
						get_template_part( 'content', 'page' );
					endwhile; else: endif;
				?>
                </div>
            <?php get_sidebar('right'); ?>
	        </section><!-- /content -->
            
        	<div class="sidebar-panel grey left">
	    	    <div id="LeftInfo">
	    	        <h4>Make a donation</h4>
	    	        <p>Your support will make a real difference to childrens lifes, find out how to make a donation <a href="#">here</a>.</p>
	    	    </div>
        	</div>
	        
<?php get_footer(); ?>
