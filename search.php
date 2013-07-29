<?php
/**
 * The template for displaying Search Results pages.
 */

get_header(); ?>

<?php get_template_part( "template-core-masthead" ); ?>

<div id="content" class="clearfix">

<?php get_sidebar('left'); ?>

    <div id="MainContent">

    <?php if ( have_posts() ) : ?>
    
        <?php $temp_string = $_GET['s']; ?>
    
        <header>
            <h1>Search Results for: "<?php echo $temp_string; ?>"<span><?php  get_search_query() ?></span></h1>
        </header>
        
        <?php
            global $query_string;
            $page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
            
            $query_args = explode("&", $query_string);
            $search_query = array(
                'posts_per_page'	=>  6,
                'paged'             =>	$paged
            );
            
            foreach($query_args as $key => $string) {
                $query_split = explode("=", $string);
                $search_query[$query_split[0]] = urldecode($query_split[1]);
            } // foreach
            
            $search = new WP_Query($search_query);
        ?>
        
        <?php /* Start the Loop */ ?>
        <?php while ( $search->have_posts() ) : $search->the_post(); ?>
            <article>
                <div class="itemNews">
                    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                    <?php
                        $excerpt = get_the_excerpt();
                        echo '<p>' . trim_excerpt($excerpt,22) . ' ...</p>';
                    ?>
                </div>
            </article><!-- /news-item -->
        <?php endwhile; ?>

        <?php  if($search->max_num_pages > 1): ?>

            <div id="Pagination">
                <p>
                    <span>Page </span>
                    <?php
                    echo paginate_links(
                          array(
                              'base' => get_pagenum_link(1) . '%_%',
                              'format' => '&paged=%#%',
                              'prev_next' => False,
                              'current' => max( 1, get_query_var('paged') ),
                              'total' => $search->max_num_pages
                          )
                    );
                    ?>
                </p>
            </div> <!-- /Pagination -->

        <?php endif; ?>
    
    <?php else : ?>
    
            <header>
                <h1>Nothing Found</h1>
            </header>
            <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
    
    <?php endif; ?>

    </div><!-- #MainContent -->
    
    <?php get_sidebar('right'); ?> 

</div><!-- #content -->

<div class="sidebar-panel grey left">
    <?php if ( dynamic_sidebar('Left Info') ) : else : endif; ?>
</div>

<div class="sidebar-panel white right"></div>

<?php get_footer(); ?>