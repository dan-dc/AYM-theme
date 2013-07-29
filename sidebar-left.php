	        	<aside id="LeftSidebar" class="sidebar">
	        	    <h4 class="hide">Sidebar Navigation</h4>        	    

	        	    <?php
                        
                        if(is_search()) { // Search Page
                            // not displaying anything
                        }
                        else
                        {
                            if(($post->ID == "4")  or ($post->post_parent == '4') or ($post->post_type == 'people')) { // 4 == About us
                                wp_nav_menu(array('menu' => 'about us menu'));
                            }
                            if(($post->ID == "58")  or ($post->post_parent == '58') or ($post->post_parent == '96') or ($post->post_parent == '97') or ($post->post_parent == '98')or ($post->post_parent == '99')) { // 58 == What we offer
                                wp_nav_menu(array('menu' => 'what we offer menu'));
                            }
                            if(($post->ID == "56")  or ($post->post_parent == '56')) { // 56 == How we help
                                wp_nav_menu(array('menu' => 'how we help menu'));
                            }
                            if(($post->ID == "59")  or ($post->post_parent == '59') or ($post->post_parent == '105')) { // 59 == Supporting AYM, 105 == Appeals
                                wp_nav_menu(array('menu' => 'supporting aym menu'));
                            }
                            if(($post->ID == "27")  or ($post->post_parent == '27') or ($post->post_type == 'post') or ($post->post_type == 'contributors_blog')) { // 27 == News
                                wp_nav_menu(array('menu' => 'news menu'));
                            }
                            if(($post->ID == "115")  or ($post->post_parent == '115') or ($post->post_type == 'musicians_stories')) { // 115 == Musicians Stories
                                wp_nav_menu(array('menu' => 'musicians stories menu'));
                            }
                            if(($post->ID == "117")  or ($post->post_parent == '117') or ($post->post_type == 'aym_angels')) { // 117 == AYM Angels
                                wp_nav_menu(array('menu' => 'aym angels menu'));
                            }
                            
                           if((is_page_template('template-page-news.php')) or (is_archive() and !(get_post_type() == 'gallery')) or ($post->post_type == 'post')) { ?>
                                <nav>
                                    <header>
                                        <h5>News Archive</h5>
                                    </header>
                                    <ul class="menu">
                                        <?php wp_get_archives('type=monthly&limit=12'); ?>
                                    </ul>
                                </nav>
                            <?php  } ?>
                        <?php } ?>
                        
	        	    
	        	</aside><!-- left-sidebar -->
