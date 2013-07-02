<?php
/**
 * The template for displaying the content on single news pages.
 */
?>
		    	    <header>
						<?php if(has_post_thumbnail()) { the_post_thumbnail('hero'); } ?>
                        <h1><?php the_title(); ?></h1>
		            </header>
					<?php edit_post_link('Edit Post'); ?>
					<?php the_content(); ?>
                    
<?php get_sidebar('related-stories'); ?>