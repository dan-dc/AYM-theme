<?php
/**
 * The template for displaying the content on the people page.
 */
?>
		    	    <header>
                        <h1><?php the_title(); ?></h1>
		            </header>
					<?php // edit_post_link('Edit Page'); ?>
					<?php the_content(); ?>

                    <div id="Filter">
                        Filter by: <a href="#" data-filter="*"> ALL</a>
                        <?php
                            // Get all the picture categories in the taxonomy
                            $pc = get_terms('role');
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
                                'post_type' => 'people',
                                'orderby' => 'menu_order',
                                'order' => 'ASC',
                                'posts_per_page' => -1
                            );
                            query_posts($args);
                        
                            // Check for posts
                            if ( have_posts() ) {
            
                            // Start the loop
                            while ( have_posts() ) : the_post();
                                
                                // Get the terms attached to this post (taxonomy)
                                $terms = get_the_terms( $post->ID, 'role' );      
                                                        
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
                                    
                                    if (has_post_thumbnail()) {
                                        ?>
                                        <a href="<?php the_permalink(); ?>" class="popUp" rel="gallery" title="<?php the_title(); ?>">
                                            <?php the_post_thumbnail('people-thumb'); ?>
                                            <hgroup>
                                                <h3><?php echo wp_trim_words( the_title(), $num_words = 6); ?></h3>
                                            </hgroup>
                                        </a>
                                        <?php
                                    }
                                    ?>
                                </article>
                    
                                <?php endwhile; ?>
                    </div><!--/.ItemsGallery-->
            
                        <?php } ?>
