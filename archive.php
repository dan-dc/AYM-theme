<?php
/**
 * The template for displaying the news archive.
 */

get_header(); ?>

<?php get_template_part( "template-core-masthead" ); ?>

<section id="content" class="clearfix">

    <?php get_sidebar('left'); ?>

    <div id="MainContent">

        <header>
            <h1>News Archive</h1>
        </header>
        
        <?php

        while (have_posts()) : the_post();
        
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
        
        <?php if( max_num_pages > 1 ): ?>

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
                              'total' => max_num_pages
                          )
                    );
                    ?>
                </p>
            </div> <!-- /Pagination -->

        <?php endif; ?>
    </div>
    
    <?php get_sidebar('right'); ?> 
    
</section><!--/#content-->

<div class="sidebar-panel grey left">
    <div id="LeftInfo">
        <h4>Make a donation</h4>
        <p>Your support will make a real difference to childrens lifes, find out how to make a donation <a href="#">here</a>.</p>
    </div>
</div>

<div class="sidebar-panel white right"></div>

<?php get_footer(); ?>