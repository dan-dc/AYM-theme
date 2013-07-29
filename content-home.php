<?php
/**
 * The template for displaying the content all the front/home page.
 */
 
// cache post id's

$howWeHelp = get_post(56);
$ourProgrammes = get_post(58);
$supportAym = get_post(59);
$getTheVideoPage = get_post(362);

?>

		        <div id="Slider">
                <? $rows = get_field('hero_slides');
				if($rows):
					$count = 1;
					while(has_sub_field('hero_slides')):
						$image = wp_get_attachment_image_src(get_sub_field('image'),'slider');
						$imageSrc = $image[0];
					 	$imageWidth = $image[1];
					 	$imageHeight = $image[2];
					 	$text = get_sub_field('text'); 
						$black_white = get_sub_field('black_white'); 
						?>
                        <div class="slide">
                            <div class="slide-text <? if ( $black_white == 'White' ) echo 'whiteTxt'; ?>">
                            <? echo $text; ?>
                            </div>
                            <img src="<? echo $imageSrc ?>" width="<? echo $imageWidth ?>" height="<? echo $imageHeight ?>" />
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
                    <? 	$aymVideo = new WP_Query($getTheVideoPage);
						while($aymVideo->have_posts()) : $aymVideo->the_post(); ?>
                        <? if ( get_field('video_embed_code') ) : ?>
                            <a class="aymVideoLink" href="#showVideo"><? the_post_thumbnail('footer-links'); ?></a>
                            <h3><a class="aymVideoLink" href="#showVideo"><? the_title() ?></a></h3>
                            <p><? the_excerpt() ?></p>
                            <p class="readmore"><a class="aymVideoLink" href="#showVideo">Watch Video.</a></p>
                            <div style="display:none" class="video-container">
                                <?
								// the user has to paste in the entire youtube/vimeo code 
								// in the back end of WP for this to work, the id #showVideo
								// which the activation links call is added via jQuery in main.js
								the_field('video_embed_code');
								?>
                            </div>                            
                            <? endif; ?>
					<?	endwhile; ?>
	                </article>
	                
	                <article>
                    	<? /* need to think about how to make this part dynamic */ ?>
	                	<a href=""><img src="<?php bloginfo("template_url"); ?>/img/home-promo.png" width="310" height="87" alt="2013 Awards"/></a>    
	                </article>

	        	</div>
	        	
	        	<footer>
	        		<h4>Organisations we work with</h4>
	        		<a href="/~aym//about-us/organisations-we-work-with/"><img src="<?php bloginfo("template_url"); ?>/img/group-logos-1.png" width="980" height="61" alt="AYM partner logos"/></a>
	        	</footer>
