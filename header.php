<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?><!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->
<!-- Mobile viewport optimisation -->
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
<head id="<?php echo of_get_option('meta_headid'); ?>" data-template-set="html5-reset-wordpress-theme">
	<meta charset="<?php bloginfo('charset'); ?>">
	<!-- Always force latest IE rendering engine (even in intranet) -->
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<?php
		if (is_search())
			echo '<meta name="robots" content="index, follow" />';
	?>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
	<!--Google will often use this as its description of your page/site. Make it good.-->
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<?php
		if (true == of_get_option('meta_author'))
			echo '<meta name="author" content="' . of_get_option("meta_author") . '" />';
		if (true == of_get_option('meta_google'))
			echo '<meta name="google-site-verification" content="' . of_get_option("meta_google") . '" />';
	?>
	<meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">
	<?php
		/*
			j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag
			 - device-width : Occupy full width of the screen in its current orientation
			 - initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
			 - maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
			 - minimal-ui = iOS devices have minimal browser ui by default
		*/
		if (true == of_get_option('meta_viewport'))
			echo '<meta name="viewport" content="' . of_get_option("meta_viewport") . ' minimal-ui" />';


		/*
			These are for traditional favicons and Android home screens.
			 - sizes: 1024x1024
			 - transparency is OK
			 - see wikipedia for info on browser support: http://mky.be/favicon/
			 - See Google Developer docs for Android options. https://developers.google.com/chrome/mobile/docs/installtohomescreen
		*/
		if (true == of_get_option('head_favicon')) {
			echo '<meta name=”mobile-web-app-capable” content=”yes”>';
			echo '<link rel="shortcut icon" sizes=”1024x1024” href="' . of_get_option("head_favicon") . '" />';
		}


		/*
			The is the icon for iOS Web Clip.
			 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4 retina display (IMHO, just go ahead and use the biggest one)
			 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
			 - Transparency is not recommended (iOS will put a black BG behind the icon) -->';
		*/
		if (true == of_get_option('head_apple_touch_icon'))
			echo '<link rel="apple-touch-icon" href="' . of_get_option("head_apple_touch_icon") . '">';
	?>
	<!--[if lte IE 7]>
	<link href="<?php echo get_template_directory_uri(); ?>/iehacks.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!-- concatenate and minify for production -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
	<!-- Lea Verou's Prefix Free, lets you use only un-prefixed properties in yuor CSS files -->
	<!--<script src="<?php //echo get_template_directory_uri(); ?>/_/js/prefixfree.min.js"></script>-->
	<!--shiv-->
		<!--[if lt IE 9]>
	<script src=".<?php echo get_template_directory_uri(); ?>/_/js/html5shiv.js"></script>
	<![endif]-->
	<!-- This is an un-minified, complete version of Modernizr.
		 Before you move to production, you should generate a custom build that only has the detects you need. -->
	<script src="<?php echo get_template_directory_uri(); ?>/_/js/modernizr-2.8.0.dev.js"></script>
	<!-- Application-specific meta tags -->
	<?php
		// Windows 8
		if (true == of_get_option('meta_app_win_name')) {
			echo '<meta name="application-name" content="' . of_get_option("meta_app_win_name") . '" /> ';
			echo '<meta name="msapplication-TileColor" content="' . of_get_option("meta_app_win_color") . '" /> ';
			echo '<meta name="msapplication-TileImage" content="' . of_get_option("meta_app_win_image") . '" />';
		}

		// Twitter
		if (true == of_get_option('meta_app_twt_card')) {
			echo '<meta name="twitter:card" content="' . of_get_option("meta_app_twt_card") . '" />';
			echo '<meta name="twitter:site" content="' . of_get_option("meta_app_twt_site") . '" />';
			echo '<meta name="twitter:title" content="' . of_get_option("meta_app_twt_title") . '">';
			echo '<meta name="twitter:description" content="' . of_get_option("meta_app_twt_description") . '" />';
			echo '<meta name="twitter:url" content="' . of_get_option("meta_app_twt_url") . '" />';
		}

		// Facebook
		if (true == of_get_option('meta_app_fb_title')) {
			echo '<meta property="og:title" content="' . of_get_option("meta_app_fb_title") . '" />';
			echo '<meta property="og:description" content="' . of_get_option("meta_app_fb_description") . '" />';
			echo '<meta property="og:url" content="' . of_get_option("meta_app_fb_url") . '" />';
			echo '<meta property="og:image" content="' . of_get_option("meta_app_fb_image") . '" />';
		}
	?>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab|Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body <?php body_class(); ?> data-spy="scroll" data-target=".top-spy">
<div id="slogan" class="ym-wrapper">
	<div class="ym-wbox">
		<h4><?php wp_title( '|', true, 'right' ); ?></h4>
	</div>
</div>
<!-- HEADER -->
  <header id="head-top" class="blue-middle">
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container ym-wbox">
									<div class="ym-grid linearize-level-1">
										<!--logo-->
										  <div class="ym-g25 ym-gl">
														<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
															<img class="flexible" src="<?php echo get_template_directory_uri(); ?>/images/logoak.png"/>
														</a>
												</div>
											<!--menu-->
												<div class="ym-g75 ym-gr">
														<div id="naverwrapper" class="ym-gl">
															<?php
																				wp_nav_menu(array(
																	'menu' => 'Main Navigation',
																	'container_id' => 'cssmenu',
																	'walker' => new CSS_Menu_Maker_Walker()
																				));
																?>
														</div>
															<div id="nav-trigger">
													<span>Menu</span>
									</div>
									<nav id="nav-mobile">
										<?php
																				wp_nav_menu();
																?>
									</nav>
																<div id="dilla" class="ym-gr">
																		<a id="join" href="#foot-sec" style="margin-top:20px;"> Contacts</a>
																</div>
												</div><!--/.menu-->
									</div>
        </div>
      </div>
    </div>
</header>
<!-- / HEADER -->