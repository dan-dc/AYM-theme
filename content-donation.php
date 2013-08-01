<?php
/**
 * The template for displaying the content on the Donation Page.
 */
?>
		    	    <header>
						<? if(has_post_thumbnail()) { the_post_thumbnail('hero'); } ?>
                        <h1><? the_title(); ?></h1>
		            </header>
					<? edit_post_link('Edit Page'); ?>
					<? the_content(); ?>
                    <div id="ways-to-donate">
					<? $rows = get_field('donation_type');
                    if($rows):
                        while(has_sub_field('donation_type')):
                            $logo = wp_get_attachment_image_src(get_sub_field('logo'),'donation_logo');
                            $logoSrc = $logo[0];
                            $text = get_sub_field('text');
                            $link = get_sub_field('link'); ?>
                        <div class="donate-wrap clearfix">
                            <div class="image">
                            <? if( has_sub_field('logo') && $link ) { ?>
                                <a href="<? echo $link; ?>" target="_blank"><img src="<? echo $logoSrc; ?>" /></a>
                            <? } else { ?>
                                <img src="<? echo $logoSrc; ?>" />
							<? } ?>
                            </div>
                            <div class="text">
                            <?
							echo $text;
							if ($link) { ?>
                                <a href="<? echo $link; ?>" class="readMore" target="_blank"><span>read more</span></a>
                            <? } ?>
                            </div>
                        </div>
					<?	endwhile;
                    endif; ?>
                    
                    
                    
                    
                    
                    
                    
                    </div>
