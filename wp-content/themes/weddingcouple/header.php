<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
 
    <meta charset="<?php bloginfo('charset'); ?>"> 
	    
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="author" content="Love Travel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--meta responsive-->
    
    <!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/main/html5.js"></script>
	<![endif]-->

    <?php global $redux_demo; ?>
    
    <?php include( get_template_directory() . '/include/header/favicons.php'); ?>

	
<?php wp_head(); ?>	  
</head>  
<body style="" id="start_nicdark_framework" <?php body_class(); ?>>



<?php if ($redux_demo['general_preloader'] == 1) { ?>
	<!--start preloader-->
	<div class="nicdark_preloader"><i class="<?php echo esc_attr($redux_demo['general_preloader_icon']); ?> nicdark_preloader_color"></i></div>
	<!--end preloader-->
<?php } ?>






<div style="" class="nicdark_site <?php if ( is_front_page() ) { echo "nicdark_front_page"; } ?> ">
	

	<?php if ($redux_demo['general_boxed'] == 0) { ?> <div class="nicdark_site_fullwidth_boxed nicdark_site_fullwidth nicdark_clearfix"> <?php } else { ?> <div class="nicdark_site_fullwidth_boxed nicdark_site_boxed nicdark_clearfix"> <?php }; ?>
    
    	<div class="nicdark_overlay"></div>

		<div class="nicdark_section nicdark_navigation nicdark_upper_level2">
		    
		    <!--decide fullwidth or boxed header-->
			<?php if ($redux_demo['header_boxed'] == 1) { ?> <div class='nicdark_menu_fullwidth_boxed nicdark_menu_boxed'> <?php }else{ ?> <div class='nicdark_menu_fullwidth_boxed nicdark_menu_fullwidth'> <?php } ?>
			
		    	
				<!--decide header style-->
				<?php if ($redux_demo['header_type'] == "type-2") { ?> 

					<?php include( get_template_directory() . '/include/header/navigation-2.php'); ?>


				<?php } else{ ?>

					<?php include( get_template_directory() . '/include/header/navigation-1.php'); ?>
				
				<?php } ?>
				<!--end style-->

		    	
		    </div>

		</div>
						


