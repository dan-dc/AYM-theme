<?php
/**
 * The template for displaying the content all default pages where no template is selected.
 */
?>

					<?php if(has_post_thumbnail()) { the_post_thumbnail('hero'); } ?>
                    <header>
                        <h1><?php the_title(); ?></h1>
                    </header>
					<?php edit_post_link('Edit Page'); ?>
					<?php the_content(); ?>

