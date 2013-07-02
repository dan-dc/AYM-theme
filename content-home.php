<?php
/**
 * The template for displaying the content all the front/home page.
 */
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
	                	<h2><a href="">How we help</a></h2>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipis icing elit. Ut, facilis quisquam autem atque illum quo aliquam explicabo consequatur ullam soluta ea qui id ratione eaque omnis nihil perspiciatis?<br><a href="#">Read more.</a></p>	    
	                </article>
	                
	                <article>
	                	<h2><a href="">Our Programmes</a></h2>
	                    <p>Lorem ipsum dolor sit amet, consectetur nibh adip iscing elit. Phasellus in gravida quam, et tristique libero. Aenean pharetra odio odio, vel facilisis lacus suscipit sit amet. Aenean hendrerit, metus eu suscipit euismod, nibh tellus dapibus lectus, sed dapibus augue ante id risus. Phasellus in gravida quam, et tristique libero. <br><a href="#">Read more.</a></p>	    
	                </article>
	                
	                <article>
	                	<h2><a href="">Supporting AYM</a></h2>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, facilis quisquam autem atque illum quo aliquam explicabo consequatur ullam soluta ea qui id ratione eaque omnis nihil perspiciatis nesciunt?<br><a href="#">Read more.</a></p>	    
	                </article>
	                
	            </header>
            
	        	<div id="BottomContent" class="clearfix featured-posts">
	        		
	                <article>
	        	        <img src="img/imgThumbLink02.jpg" width="130" height="87" alt="News">
	                	<h3><a href="">News</a></h3>
	                    <p>A community of support: Volunteering in progress <br><a href="#">Read more.</a></p>	    
	                </article>
	                
	                <article>
	        	        <img src="img/imgThumbLink01.jpg" width="130" height="87" alt="AYM">
	                	<h3><a href="">AYM on film</a></h3>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><a href="#">Read more.</a></p>	    
	                </article>
	                
	                <article>
	                	<a href=""><img src="img/home-promo.png" alt="2013 Awards"/></a>    
	                </article>

	        	</div>
	        	
	        	<footer>
	        		<h4>Organisations we work with</h4>
	        		<a href=""><img src="<?php bloginfo("template_url"); ?>/img/group-logos-1.png" alt="AYM partner logos"/></a>
	        	</footer>
