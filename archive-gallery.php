<?php
/**
 * The template for displaying the Gallery
 */

get_header(); ?>

<?php get_template_part( "template-core-masthead" ); ?>

<section id="content" class="clearfix">

<?php get_sidebar('left'); ?>

    <div id="MainContent">

        <header>
            <h1><?php post_type_archive_title(); ?></h1>
        </header>
        
        <div id="Filter">
			Filter by: <a href="#" data-filter="*"> ALL</a>
			<?php
				// Get all the picture categories in the taxonomy
				$pc = get_terms('picture_category');
				foreach ($pc as $pc) {
					// Add the type of work Tag as a "data-filter" attribute, used for isotope plugin
					echo '<a href="#" data-filter=".' . $pc->slug . '">' . $pc->name . '</a>';
				}
			?>

		</div><!--/#Filter-->
        
        <div id="ItemsGallery">
			<?php
			
				// Get and modify the default query:
				global $wp_query;
				$args = array(
					'post_type' => 'gallery',
					'orderby' => 'menu_order',
					'order' => 'ASC',
					'posts_per_page' => -1
				);
				query_posts($args);
			
				// Check for posts
				if ( have_posts() ) :

				// Start the loop
				while ( have_posts() ) : the_post();
                    
                    // Get the terms attached to this post (taxonomy)
                    $terms = get_the_terms( $post->ID, 'picture_category' );      
                                            
                    if ( $terms && ! is_wp_error( $terms ) ) { 
                        $pc_tax = array();                 
                        foreach ( $terms as $term ) {
                            $pc_tax[] = $term->slug;
                        }                                           
                        $pc_classes = join( " ", $pc_tax );
                    } else {                   
                        $tow_classes = "";
                    }
			 ?>

                    <article class="<?php echo $pc_classes; ?>">
                        <?php
                        if(get_field('image')) {
                            $image_thumb = wp_get_attachment_image_src(get_field('image'),'gallery-thumb');
                            $image_large = wp_get_attachment_image_src(get_field('image'),'gallery-large');
                            ?>
                            <a href="<?php echo $image_large[0]; ?>" class="popUp" rel="gallery" title="<?php echo get_field('caption'); ?>">
                                <?php 
                                    echo '<img src="' . $image_thumb[0] .'" alt="' . get_the_title() . '" width="220" height="146" />';
                                ?>
                                <hgroup>
                                    <h3><?php echo wp_trim_words( the_title(), $num_words = 6); ?></h3>
                                    <h4><?php echo wp_trim_words( get_field('caption'), $num_words = 6); ?></h4>
                                </hgroup>
                            </a>
                            <?php
                        }
                        ?>
                    </article>
        
                    <?php endwhile; ?>
        </div><!--/.ItemsGallery-->

			<?php else : 
				_e( '<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>', 'dc' );
			endif; ?>
    </div>
    
</section><!--/#content-->

<div class="sidebar-panel grey left">
    <div id="LeftInfo">
        <h4>Make a donation</h4>
        <p>Your support will make a real difference to childrens lifes, find out how to make a donation <a href="#">here</a>.</p>
    </div>
</div>

<?php get_footer(); ?>