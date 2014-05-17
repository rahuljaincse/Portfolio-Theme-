<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if !IE]><!--> <html <?php  language_attributes();      ?>> <!--<![endif]-->
    

        <head>
            
            <meta charset="<?php bloginfo('charset'); ?>">
            
                <title><?php  wp_title('|',TRUE,'right');?><?php bloginfo ('name'); ?></title>
                
                <meta name="description" content= " <?php bloginfo ('description'); ?>">
                
                <meta name="author" content="Rahul Jain">

                <!-- Mobile Specific Meta -->
                
                <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

                <!-- Stylesheets -->

                <link type="text/css" rel="stylesheet" href=" <?php bloginfo ('stylesheet_url'); ?>" />

      

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600,300italic,600italic' rel='stylesheet'>
	<link href='http://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet'> <!--for google fonts-->	

<?php wp_head(); ?>
        
</head>

<body>
    
<!-- HEADER -->
	
	
	<header class="main-header align-center section-content">
            <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php print IMAGES ;?>\logo.png" alt="<?php  bloginfo ('name');?>" /></a>
		
     <nav class="main-nav">
          <?php 
                    wp_nav_menu(array('theme_location'=>'main-menu',
                        'container' => '',
                        'menu_class'=>'inline'));
                    ?>
			
                </nav>
                </header>
