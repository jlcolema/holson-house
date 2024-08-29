<!doctype html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<!--[if IE ]>

		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />

	<![endif]-->

	<?php

		if (is_search())

			echo '<meta name="robots" content="noindex, nofollow" />';

	?>

	<title>

		<?php if ( is_page( 'home' ) ) { ?>

			<?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?>

		<?php } elseif ( is_page( 'about' ) || is_page( 'portfolio' ) || is_page( 'what-we-do' ) || is_page( 'work-with-us' ) ) { ?>

			<?php the_title(); ?> | <?php bloginfo( 'name' ); ?>

		<?php } elseif ( is_category() ) { ?>

			<?php single_cat_title(); ?> | Blog | <?php bloginfo( 'name' ); ?>

		<?php } elseif ( is_single() ) { ?>

			<?php the_title(); ?> | Blog | <?php bloginfo( 'name' ); ?>

		<?php } elseif ( is_tax() ) { ?>

			<?php single_cat_title(); ?> | Portfolio | <?php bloginfo( 'name' ); ?>

		<?php } elseif ( is_search() ) { ?>

			Search Results | <?php bloginfo( 'name' ); ?>

		<?php } else { ?>

			Blog | <?php bloginfo( 'name' ); ?>

		<?php } ?>

	</title>

	<meta name="title" content="" />

	<meta name="description" content="<?php bloginfo( 'description' ); ?>" />

	<meta name="author" content="" />

	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?>" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/a/img/favicon.png" />

	<link rel="apple-touch-icon" href="<?php bloginfo( 'template_directory' ); ?>/a/img/touch-icon.png" />

	<link type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/a/css/screen.css" rel="stylesheet" media="screen, projection" />

	<link type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/a/css/print.css" rel="stylesheet" media="print" />

	<link type="text/css" href='https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,700,700italic|Oswald:400,700' rel="stylesheet" media="screen, projection" />

	<meta name="twitter:card" content="" />
	<meta name="twitter:site" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:description" content="" />
	<meta name="twitter:image" content="<?php bloginfo( 'template_directory' ); ?>/a/img/twitter-icon.png" />
	<meta name="twitter:url" content="" />

	<meta name="og:title" content="" />
	<meta name="og:description" content="" />
	<meta name="og:url" content="" />
	<meta name="og:image" content="<?php bloginfo( 'template_directory' ); ?>/a/img/og-icon.png" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>

</head>

<body <?php body_id(); ?> <?php body_class(); ?>>

	<header id="header" role="banner">

		<div class="wrap">

			<div id="logo">

				<div class="inner-logo">

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">

						<?php bloginfo( 'name' ); ?>

					</a>

				</div>

			</div>

			<nav id="nav" role="navigation">

				<div class="toggle">

					<span>Menu</span>

				</div>

				<?php $nav_options = array(

					'theme_location'	=> 'primary',
					'menu'				=> '',
					'container'			=> '',
					'container_class'	=> '',
					'container_id'		=> '',
					'menu_class'		=> 'menu',
					'menu_id'			=> '',
					'echo'				=> true,
					'fallback_cb'		=> 'wp_page_menu',
					'before'			=> '',
					'after'				=> '',
					'link_before'		=> '',
					'link_after'		=> '',
					'items_wrap'		=> '<ul>%3$s</ul>',
					'depth'				=> '',
					'walker'			=> ''

				); ?>

				<?php wp_nav_menu( $nav_options ); ?>

			</nav>

		</div>

	</header>

	<main id="content" role="main">

		<div class="wrap">