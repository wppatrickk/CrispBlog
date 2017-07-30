<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="profile" href="http://gmpg.org/xfn/11" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'crispblog' ); ?></a>

	<div id="header" class="site-header" role="banner">
		<div class="inner">
			<div id="social">
				<?php if (get_theme_mod('crispblog_facebook')) { ?>
				<a href="<?php echo get_theme_mod('crispblog_facebook'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<?php } ?>
				<?php if (get_theme_mod('crispblog_twitter')) { ?>
				<a href="<?php echo get_theme_mod('crispblog_twitter'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<?php } ?>
				<?php if (get_theme_mod('crispblog_pinterest')) { ?>
				<a href="<?php echo get_theme_mod('crispblog_pinterest'); ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
				<?php } ?>
				<?php if (get_theme_mod('crispblog_gplus')) { ?>
				<a href="<?php echo get_theme_mod('crispblog_gplus'); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
				<?php } ?>
				<?php if (get_theme_mod('crispblog_instagram')) { ?>
				<a href="<?php echo get_theme_mod('crispblog_instagram'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<?php } ?>
				<?php if (get_theme_mod('crispblog_youtube')) { ?>
				<a href="<?php echo get_theme_mod('crispblog_youtube'); ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
				<?php } ?>
			</div>

			<div id="mobile-slide">
				<a href="#"><span class="icon-bar"><span class="icon-bars"></span></span></a>
			</div>

			<div class="mobile-clear"></div>
			
			<div id="menu">
				<?php wp_nav_menu( array('theme_location' => 'header_menu' )); ?>
				<div class="clear"></div>
			</div>

			<div class="clear"></div>
		</div>
	</div><!-- #masthead -->

	<div id="logo">
		<div class="inner">
			<?php if (get_theme_mod('crispblog_logo')) { ?>
				<a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_theme_mod('crispblog_logo'); ?>" alt="<?php bloginfo('name'); ?>" /></a>
			<?php } else { ?>
				<?php if (is_home() || is_category()) { ?>
					<h1><a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo('name'); ?></a></h1>
				<?php } else { ?>
					<h2><a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo('name'); ?></a></h2>
				<?php } ?>
				<p><?php bloginfo('description'); ?></p>
			<?php } ?>
		</div>
	</div>

	<div id="container" <?php if (get_theme_mod('crispblog_archive_layout', 'full_width') != 'full_width') { ?>class="has-sidebar"<?php } ?>>

		<div class="inner">
