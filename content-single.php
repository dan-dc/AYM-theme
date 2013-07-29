<?php
/**
 * The template for displaying the content on single news pages.
 */
?>
		    	    <header>					
                        <h1><?php the_title(); ?></h1>
		            </header>
		            <?php // edit_post_link('Edit Post'); ?>
		            <?php if(has_post_thumbnail()) { 
                        $image_large = wp_get_attachment_image_src(get_post_thumbnail_id(), 'gallery-large');
                        $image_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'gallery-thumb');
                        ?>
                        <a href="<?php echo $image_large[0]; ?>" class="popUp" title="<?php echo get_field('caption', get_post_thumbnail_id()); ?>">
                            <?php the_post_thumbnail('gallery-thumb'); ?>
                        </a>
                    <?php } ?>
					<?php the_content(); ?>
                    
<?php get_sidebar('related-stories'); ?>