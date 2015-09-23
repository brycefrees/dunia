<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php bloginfo('name'); ?> <?php wp_title(' : '); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!--Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800' rel='stylesheet' type='text/css'>

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>
	
	   <style>
	   
	   .menu-fall-2014-additions-container, .menu-fall-2013-additions-3-container, .menu-all-collections-container, .menu-fall-2013-preview-container, .menu-summer-2014-container, .menu-fall-2014-container, .menu-spring-2015-container, .menu-summer-2015-container, .menu-fall-20145.archive-title-container, .menu-spring-2014-preview-container {
    float: left;
    font-size: 0.6em;
    width: 90%;
}
.menu-fall-2014-additions-container ul, .menu-fall-2013-additions-3-container ul, .menu-all-collections-container ul, .menu-fall-2013-preview-container ul, .menu-summer-2014-container ul, .menu-fall-2014-container ul, .menu-spring-2015-container ul, .menu-summer-2015-container ul, .menu-fall-2015.archive-title-container ul, .menu-spring-2014-preview-container ul {
    margin: 0 0 20px;
}
.menu-fall-2014-additions-container ul li,.menu-fall-2013-additions-3-container ul li, .menu-all-collections-container ul li, .menu-fall-2013-preview-container ul li, .menu-summer-2014-container ul li, .menu-fall-2014-container ul li, .menu-spring-2015-container ul li, .menu-summer-2015-container ul li, .menu-fall-20145.archive-title-container ul li, .menu-spring-2014-preview-container ul li {
    display: inline;
    margin: 0 10px 0 0;
}
.menu-fall-2014-additions-container ul li a, .menu-fall-2013-additions-3-container ul li a, .menu-all-collections-container ul li a, .menu-fall-2013-preview-container ul li a, .menu-summer-2014-container ul li a, .menu-fall-2014-container ul li a, .menu-spring-2015-container ul li a, .menu-summer-2015-container ul li a, .menu-fall-20145.archive-title-container ul li a, .menu-spring-2014-preview-container ul li a {
    background-color: #EFEFEF;
    line-height: 4em;
    padding: 10px;
    text-decoration: none;
}
	   </style>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">

					<a href="<?php echo home_url(); ?> ">
						<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
					</a>

					<!-- if you'd like to use the site description you can un-comment it below -->
					<?php // bloginfo('description'); ?>

				</div> <!-- end #inner-header -->

				<nav role="navigation">
						<?php bones_main_nav(); ?>

					</nav>

			</header> <!-- end header -->

			
    				<?php if(function_exists('bcn_display') && !is_front_page()) {
    					echo '<div class="breadcrumbs">';
        				bcn_display();
        				echo '</div>';
    				}?>
			
