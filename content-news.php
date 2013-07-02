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
                    $getNews = new WP_Query('cat=1&showposts=4');
                    while ($getNews->have_posts()) : $getNews->the_post();
					
					if( has_post_thumbnail() ) : ?>
                    
                    <article>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php if( has_post_thumbnail() ) { the_post_thumbnail('news-thumb'); } ?></a>
                        <div class="itemNews">
                            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                            <?php
								$excerpt = get_the_excerpt();
								echo '<p>' . trim_excerpt($excerpt,27) . '</p>';
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
								echo '<p>' . trim_excerpt($excerpt,27) . '</p>';
							?>
                        <p class="news-date"><?php the_time('j F Y') ?></p>
                        <a href="<?php the_permalink(); ?>" class="readMore"><span>read more</span></a>
                    </article><!-- /news-item -->

                    <?php endif; endwhile; ?>
                    