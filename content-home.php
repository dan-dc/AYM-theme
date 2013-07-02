<?php
/**
 * The template for displaying the content all the front/home page.
 */
 
// cache post id's

$howWeHelp = get_post(425);
$ourProgrammes = get_post(428);
$supportAym = get_post(431);

?>

		        <div id="Slider">
                <? $rows = get_field('hero-slides');
				if($rows):
					while(has_sub_field('hero-slides')):
						$image = wp_get_attachment_image_src(get_sub_field('image'),'slider');
						$imageSrc = $image[0];
					 	$text = get_sub_field('text'); 
						$black_white = get_sub_field('black_white'); 
						?>
                        <div class="slide">
                            <div class="slide-text <? if ( $black_white == 'White' ) echo 'whiteTxt'; ?>">
                            <? echo $text; ?>
                            </div>
                            <img src="<? echo $imageSrc ?>" />
                        </div>
				<?	endwhile;
				endif; ?>

		        </div><!-- / slider -->
		        
		        <header id="TopContent" class="clearfix featured-posts">
		        	
					<h1 class="hide">Awards for Young Musicians</h1>

	                <article>
	                	<h2><a href="<?php echo get_permalink($howWeHelp); ?>"><? echo $howWeHelp->post_title; ?></a></h2>
						<? if ( has_excerpt( $howWeHelp ) ) : ?>
                            <p><?php echo $howWeHelp->post_excerpt; ?></p>
                        <? else : ?>
                            <p><? echo strip_shortcodes(wp_trim_words( $howWeHelp->post_content, 55, '' )); ?></p>
                        <? endif; ?>                        
                        <p class="readmore"><a href="<?php echo get_permalink($howWeHelp); ?>">Read more.</a></p>
	                </article>
	                
	                <article>
	                	<h2><a href="<?php echo get_permalink($ourProgrammes); ?>"><? echo $ourProgrammes->post_title; ?></a></h2>
						<? if ( has_excerpt( $ourProgrammes ) ) : ?>
                            <p><?php echo $ourProgrammes->post_excerpt; ?></p>
                        <? else : ?>
                            <p><? echo strip_shortcodes(wp_trim_words( $ourProgrammes->post_content, 55, '' )); ?></p>
                        <? endif; ?>                        
                        <p class="readmore"><a href="<?php echo get_permalink($ourProgrammes); ?>">Read more.</a></p>
	                </article>
	                
	                <article>
	                	<h2><a href="<?php echo get_permalink($supportAym); ?>"><? echo $supportAym->post_title; ?></a></h2>
						<? if ( has_excerpt( $supportAym ) ) : ?>
                            <p><?php echo $supportAym->post_excerpt; ?></p>
                        <? else : ?>
                            <p><? echo strip_shortcodes(wp_trim_words( $supportAym->post_content, 55, '' )); ?></p>
                        <? endif; ?>                        
                        <p class="readmore"><a href="<?php echo get_permalink($supportAym); ?>">Read more.</a></p>
	                </article>
	                
	            </header>
            
	        	<div id="BottomContent" class="clearfix featured-posts">
	        		
	                <article>
                    <? 	$latestNews = new WP_Query('cat=1&showposts=1');
						while($latestNews->have_posts()) : $latestNews->the_post(); ?>
                            <a href="<? the_permalink() ?>"><? the_post_thumbnail('footer-links'); ?></a>
                            <h3><a href="<? the_permalink() ?>">News</a></h3>
                            <p><? the_title() ?></p>
                            <p class="readmore"><a href="<? the_permalink() ?>">Read more.</a></p>
					<?	endwhile; ?>
	                </article>
	                
	                <article>
	        	        <a href=""><img src="<?php bloginfo("template_url"); ?>/img/imgThumbLink01.jpg" width="130" height="87" alt="AYM"></a>
	                	<h3><a href="">AYM on film</a></h3>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><a href="#">Watch Video.</a></p>	    
	                </article>
	                
	                <article>
                    	<? /* need to think about how to make this part dynamic */ ?>
	                	<a href=""><img src="<?php bloginfo("template_url"); ?>/img/home-promo.png" alt="2013 Awards"/></a>    
	                </article>

	        	</div>
	        	
	        	<footer>
	        		<h4>Organisations we work with</h4>
	        		<a href=""><img src="<?php bloginfo("template_url"); ?>/img/group-logos-1.png" alt="AYM partner logos"/></a>
	        	</footer>
