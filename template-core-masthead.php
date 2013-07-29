			<header id="masthead">
				<h1><a href="<?php bloginfo( 'url' ); ?>"><b class="hide"><?php bloginfo( 'name' ); if ( $site_description ) echo " : $site_description"; ?></b></h1>
				<div id="header">
					<div id="smallLinks">
						<ul>
							<li><a href="<?php bloginfo( 'url' ); ?>/supporting-aym/make-a-donation/"><span class="highlight">Donate now</span></a></li>
							<li><a href="<?php bloginfo( 'url' ); ?>/faqs">FAQs</a></li>
							<li>Follow
								<ul id="socialLinks">
									<li><a href="<?php if (get_field('linked_in_url','options')) the_field('linked_in_url','options'); ?>" class="linkedin"><b class="hide">linkedin</b></a></li>
									<li><a href="<?php if (get_field('twitter_url','options')) the_field('twitter_url','options'); ?>" class="twitter"><b class="hide">twitter</b></a></li>
									<li><a href="<?php if (get_field('facebook_url','options')) the_field('facebook_url','options'); ?>" class="facebook"><b class="hide">facebook</b></a></li>
								</ul>
							</li>
							<li><a href="<?php bloginfo( 'url' ); ?>/contact-us">Contact Us</a></li>
						</ul>
					</div>
					<?php get_search_form(); ?>
				</div>
				<nav id="nav">
					<h6 class="hide">main navigation</h6>
					<form action="#" method="post" id="subscribe-form">
						<input type="text" value="Register for email updates" onblur="if(this.value == '') { this.value='Register for email updates'}" onfocus="if (this.value == 'Register for email updates') {this.value=''}" size="20" name="" id="email-updates">
						<button name="submit" type="submit">&nbsp;</button>
					</form>
                    <?php wp_nav_menu( array('menu' => 'main menu') ); ?>
				</nav>
	        </header>
