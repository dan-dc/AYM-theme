<?php
/**
 * The template for displaying the content all pages.
 */
?>
		    	    <header>
						<?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?>
                        <h1><?php the_title(); ?></h1>
		            </header>
					<?php the_content(); ?>
                    
<?php get_sidebar('related-stories'); ?>