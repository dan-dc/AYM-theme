<!DOCTYPE html>

<!--	//////////////////////////////////////////////////////////-->
<!--	                                                   		//-->
<!--	Copyright <?php echo date('Y') ?> AWARDS FOR YOUNG MUSICIANS          		//-->
<!--	http://www.a-y-m.org/         					   		//-->
<!--	All rights reserved                                		//-->
<!--	                                                   		//-->
<!--	Coded by Dan Moe & Ruyman Rodriguez @ Design Culture	//-->
<!--	http://www.design-culture.co.uk                    		//-->      
<!--	                                                   		//-->
<!--	//////////////////////////////////////////////////////////-->

<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>
<!--	meta -->    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="author" content="Dan Moe &amp; Ruyman Rodriguez">
        <meta name="description" content="">

<!--	styles -->        
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

<!--	modernizr -->        
        <script src="<?php bloginfo("template_url"); ?>/js/core/modernizr-2.6.2.min.js"></script>

        <title><?php
            // Print the <title> tag based on what is being viewed.
            global $page, $paged;
			
            wp_title( '|', true, 'right' );

            // Add the blog description for the home/front page.
            $site_description = get_bloginfo( 'description', 'display' );
            if ( $site_description )
                echo "$site_description | ";
				
            // Add the blog name.
            bloginfo( 'name' );
        
            ?></title>

    </head>

    <body <?php body_class(); ?>>
    	
        <!--[if lt IE 9]>
            <p class="oldbrowser">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
		<div id="wrapper">