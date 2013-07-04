<?php
/**
 * The template for displaying the content on the contact page.
 */
?>
		    	    <header>
                        <h1><?php the_title(); ?></h1>
		            </header>
					<?php edit_post_link('Edit Page'); ?>
					<?php the_content(); ?>

                    <form action="" id="contact-form" name="contact-form" method="post" class="clearfix">
                        <label>Name <span class="highlight">*</span></label>
                        <input id="name" name="name" value="" size="30" maxlength="60" type="text" class="formData" />
                        <label>Email <span class="highlight">*</span></label>
                        <input id="email" name="email" value="" size="30" maxlength="80" type="text" class="formData" />
                        <label id="commentsLabel">Comments<span class="highlight"> *</span></label>
                        <textarea id="comments" name="comments" cols="26" rows="5" class="formData"></textarea>
                        <footer>
                        	<div class="send-arrow">
		                        <input id="submit" value="Send" type="submit" />
                        		<div class="buttonBG"></div>
	                        </div>
	                        <p class="caption">*Please note ALL fields are required.</p>
	                        <p class="highlight errors"></p>
                        </footer>
                     </form>
