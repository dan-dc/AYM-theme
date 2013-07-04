                <?
				$rows = get_field('related_links');
				if($rows):
				?>
                
		        <div id="ThumbLinks">
                <?	while(has_sub_field('related_links')):
                    $pageLink = get_sub_field('page_link'); ?>
                    
                    <a href="<?php get_permalink( $pageLink->ID ); ?>">
                        <article>
                            <?php if(has_post_thumbnail($pageLink->ID)) echo get_the_post_thumbnail($pageLink->ID, 'footer-links'); ?>
                            <h4><?php echo get_the_title( $pageLink->ID ); ?></h4>
                            <?
                            /* PREFERRED USAGE BELOW, NOT ENOUGH INFO AT THIS STAGE TO TELL HOW THIS WILL WORK
                            <hgroup>
                                <h4>Case Study</h4> <- Title
                                <h4>Sarah Smith</h4> <- Unknown at present
                            </hgroup>
                            */
                            ?>
                        </article>
                    </a>
                    
				<?	endwhile; ?>
	        	    </div>
				<? endif; ?>
				