<?php
/**
 * The template for displaying the content for the news page.
 */
?>
		    	    <header>
                        <h1><?php the_title(); ?></h1>
		            </header>
					<?php the_content(); ?>
                    
					<?php
                    
                    $page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
                    $query_args = array(
                        'post_type'	        =>  'post',
                        'orderby'           =>  'date',
                        'order'	            =>  'desc',
                        'cat'				=>	1,
                     // 'posts_per_page'	=>  4,
                        'paged'             =>	$paged
                    );
					
                    $getNews = new WP_Query ( $query_args );

                    while ($getNews->have_posts()) : $getNews->the_post();
					
                        if( has_post_thumbnail() ) : ?>
                        
                            <article>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php if( has_post_thumbnail() ) the_post_thumbnail('news-thumb'); ?></a>
                                <div class="itemNews">
                                    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                    <?php
                                        $excerpt = get_the_excerpt();
                                        echo '<p>' . trim_excerpt($excerpt,22) . ' ...</p>';
                                    ?>
                                    <p class="news-date"><?php the_time('j F Y') ?></p>
                                    <a href="<?php the_permalink(); ?>" class="readMore"><span>read more</span></a>
                                </div>
                            </article><!-- /news-item -->
                        
                        <?php else : ?>
    
                            <article class="no-image">
                                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                    <?php
                                        $excerpt = get_the_excerpt();
                                        echo '<p>' . trim_excerpt($excerpt,35) . ' ...</p>';
                                    ?>
                                <p class="news-date"><?php the_time('j F Y') ?></p>
                                <a href="<?php the_permalink(); ?>" class="readMore"><span>read more</span></a>
                            </article><!-- /news-item -->
    
                        <?php endif;
                        
                    endwhile; ?>
                    
                    <?php if( $getNews->max_num_pages > 1 ): ?>

                        <div id="Pagination">
                            <p>
                                <span>Page </span>
                                <?php
                                echo paginate_links(
                                      array(
                                          'base' => get_pagenum_link(1) . '%_%',
                                          'format' => '?paged=%#%',
                                          'prev_next' => False,
                                          'current' => max( 1, get_query_var('paged') ),
                                          'total' => $getNews->max_num_pages
                                      )
                                );
                                ?>
                            </p>
                        </div> <!-- /Pagination -->
            
                    <?php endif; ?>
                    