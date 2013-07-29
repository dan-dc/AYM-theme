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
                        
                        <fieldset>
                            <legend>Required fields:</legend>
                            <label for="typeofenquiry">Type of enquiry <span class="highlight">*</span></label>
                            <select name="typeofenquiry" id="typeofenquiry">
                                <option value="Funding Support/Awards">Funding Support/Awards</option>
                                <option value="Making a Donation">Making a Donation</option>
                                <option value="Events">Events</option>
                                <option value="Other">Other</option>
                            </select>
                            
                            <label for="name">Name <span class="highlight">*</span></label>
                            <input id="name" name="name" value="" size="30" maxlength="60" type="text" class="formData" />
                            
                            <label for="email">Email <span class="highlight">*</span></label>
                            <input id="email" name="email" value="" size="30" maxlength="80" type="text" class="formData" />
                        </fieldset>
                        
                        <fieldset>
                            <legend>Non required fields:</legend>
                            <label for="phone">Phone number </label>
                            <input id="phone" name="phone" value="" size="30" maxlength="80" type="text" class="formData" />
                            
                            <label for="organisation">Your Organisation</label>
                            <input id="organisation" name="organisation" value="" size="30" maxlength="80" type="text" class="formData" />
                            
                            <label for="address">Address</label>
                            <input id="address" name="address" value="" size="30" maxlength="80" type="text" class="formData" />
                            
                            <label for="towncity">Town/City</label>
                            <input id="towncity" name="towncity" value="" size="30" maxlength="80" type="text" class="formData" />
                            
                            <div class="twoCol">
                                <label for="postcode">Post Code</label>
                                <input id="postcode" name="postcode" value="" size="30" maxlength="80" type="text" class="formData" />
                                
                                <label for="country" class="second">Country</label>
                                <input id="country" class="second" name="country" value="" size="30" maxlength="80" type="text" class="formData" />
                            </div>
                        </fieldset>
                        
                        <fieldset>
                            <label id="yourMessageLabel" for="comments">Your message<span class="highlight"> *</span></label>
                            <textarea id="yourmessage" name="yourmessage" cols="26" rows="5" class="formData"></textarea>
                            
                            <footer>
                                <div class="send-arrow">
                                    <input id="submit" value="Send" type="submit" />
                                    <div class="buttonBG"></div>
                                </div>
                                <p class="caption"><span class="highlight">*</span>These fields are required.</p>
                                <p class="highlight errors"></p>
                            </footer>
                        </fieldset>
                     </form>
                     
                     <p style="float:left; width:50%;">Hester Cockcroft (Director) or Caroline Harvie (Administrator) can be contacted as follows:</p>
                     <p style="float:right; width:40%;">Awards for Young Musicians<br />
                        Box 2754<br />
                        Bristol BS4 9DA<br />
                        <span class="highlight">E</span>: enquiries@a-y-m.org.uk<br />
                        <span class="highlight">T</span>: 0117 9049906
                    </p>
