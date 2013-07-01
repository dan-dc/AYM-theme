<?php
/**
 * The front/home page template file.
 */
get_header();
?>
			
<?php get_template_part( "template-core-masthead" ); ?>
	        
	        <section id="content" class="clearfix">
                <?php get_template_part( 'content' ); ?>
	        </section><!-- /content -->

<?php get_footer(); ?>
