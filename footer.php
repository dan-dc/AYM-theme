	        <div id="push">&nbsp;</div>

		</div> <!-- /wrapper -->
        
		<footer id="footer">
        	<nav>
        		<h6 class="hide">site map</h6>
                <?php wp_nav_menu( array( 'menu' => 'footer menu' ) ); ?>

        		<div class="right-column">
        			<p>
        				<strong>Contact us</strong><br/>
        				T. <?php if (get_field('telephone_number','options')) the_field('telephone_number','options'); else echo 'XXXXXXX'; ?><br/>
        				E. <a href="<? if (get_field('email_address','options')) echo 'mailto:' . get_field('email_address','options'); ?>"><? if (get_field('email_address','options')) the_field('email_address','options'); else echo 'XXXXXXX'; ?><br/></a>
        			</p>
        			<p>
        				<strong><?php bloginfo('name'); ?></strong><br/>
						<? if (get_field('address','options')) the_field('address','options'); else echo 'Please enter address in the site options tab'; ?>
					</p>
        			<p>
        				Charity <?php if (get_field('charity_no','options')) the_field('charity_no','options'); else echo 'XXXXXXX'; ?><br/>
                        Company <?php if (get_field('company_no','options')) the_field('company_no','options'); else echo 'XXXXXXX'; ?>
					</p>
        		</div>
        	</nav>
        	
        	<section id="signoff">
        		<h6><?php bloginfo( 'name' ); ?> <a href="<?php echo get_admin_url(); ?>">©</a> <?php echo date('Y'); ?> &mdash; All Rights Reserved  |  AYM photos donated and © <a href="http://www.edwardwebb.com/">Edward Webb</a></h6>
        		<div class="right-column">
	        		<h6>Website by <a href="http://www.design-culture.co.uk/">Design Culture</a></h6>
        		</div>
        	</section>
        </footer>


<!--	scripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php bloginfo("template_url"); ?>/js/core/jquery-1.10.1.min.js"><\/script>')</script>
        <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/fancybox/jquery.fancybox.css">
        <script src="<?php bloginfo("template_url"); ?>/js/main.js"></script>
        <script src="<?php bloginfo("template_url"); ?>/js/twitter/jquery.tweet.js"></script>
        <script src="<?php bloginfo("template_url"); ?>/js/plugins.js"></script>
        <script src="<?php bloginfo("template_url"); ?>/js/jquery.fancybox.pack.js"></script>
<!--	    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle.all.min.js"></script>-->

<!--	google analytics -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
