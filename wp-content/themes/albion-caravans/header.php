<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
<meta charset="utf-8">

<title><?php wp_title(); ?></title>

<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
<!--[if IE]>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<![endif]-->
<?php // set /favicon.ico for IE10 win ?>
<meta name="msapplication-TileColor" content="#d3492f">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
<meta name="google-site-verification" content="p4rDaQEf7byTmOFr1JZHDRti2dzvxHkRY2VCMYyKwbo" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<script type="text/javascript"
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQEwBxG84x8EoqhZqPYe1KbLaMr1wVi5I">
</script>

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	
	<header class="page-header">
		<div class="row">
			<div class="small-12 columns">
				<h1><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>
				<p><?php bloginfo('description'); ?></p>
			</div>
		</div>
	</header>
	
	<div class="sub-head">
		<div class="row">
			<div class="small-12 columns">
				<?php 
				
					$address = get_field('sub_header_address', $page-316);
					$email = get_field('sub_header_email', $page-316);
					$phone = get_field('sub_header_phone_number', $page-316); 
				
				?>
				<ul class="header-contacts">
					<li class="address"><?php echo $address; ?></li>
					<li class="email"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
					<li class="phone"><?php echo $phone; ?></li>
				</ul>
			
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
	
	<nav class="main-nav">
		<div class="row">
			<div class="small-12 columns">
				<div class="toggle-wrap">
					<div class="toggle">Menu<span></span></div>
					
					<ul class="social-header">
						<li><a href="https://www.facebook.com/AlbionCaravan" target="_blank"><span class="icon-facebook3 icon"></span></a></li>
						<li><a href="https://twitter.com/albioncaravans" target="_blank"><span class="icon-twitter3 icon"></span></a></li>
						<li><a href="https://plus.google.com/u/0/+SFowleralbion-caravans/posts" target="_blank"><span class="icon-google-plus3 icon"></span></a></li>
					</ul>
				</div>
				
				<?php wp_nav_menu( array( 'menu' => 'Main Menu', 'container_class' => 'main-menu' ) ); ?>
			</div>
		</div>
	</nav>
	
	
			
			
