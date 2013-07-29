<?php
/**
 * The template for displaying the content on single people pages.
 */
?>
		    	    <header>					
                        <h1><?php the_title(); ?></h1>
		            </header>
		            <?php // edit_post_link('Edit Post'); ?>
		            <?php if(has_post_thumbnail()) { ?>
                        <?php the_post_thumbnail('people-thumb'); ?>
                    <?php } ?>
					<?php the_content(); ?>
                    
<?php get_sidebar('related-stories'); ?>