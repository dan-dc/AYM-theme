			<header id="masthead">
				<h1><a href="<?php bloginfo( 'url' ); ?>"><b class="hide"><?php bloginfo( 'name' ); if ( $site_description ) echo " : $site_description"; ?></b></h1>
				<div id="header">
					<div id="smallLinks">
						<ul>
							<li><a href="<?php bloginfo( 'url' ); ?>/faqs">FAQs</a></li>
							<li>Follow
								<ul id="socialLinks">
									<li><a href="" class="linkedin"><b class="hide">linkedin</b></a></li>
									<li><a href="" class="twitter"><b class="hide">twitter</b></a></li>
									<li><a href="" class="facebook"><b class="hide">facebook</b></a></li>
								</ul>
							</li>
							<li><a href="<?php bloginfo( 'url' ); ?>/contact-us">Contact Us</a></li>
						</ul>
					</div>
					<form action="#" method="post" id="search-form" class="clearfix">
						<input type="text" size="20" name="" id="search" value="Search">
						<button name="submit" type="submit">&nbsp;</button>
					</form>
				</div>
				<nav id="nav">
					<h6 class="hide">main navigation</h6>
					<form action="#" method="post" id="subscribe-form">
						<input type="text" size="20" name="" id="email-updates" value="Register for email updates">
						<button name="submit" type="submit">&nbsp;</button>
					</form>
                    <?php wp_nav_menu( array('menu' => 'main menu') ); ?>
				</nav>
	        </header>
