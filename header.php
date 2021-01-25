<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zafiro
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'zafiro' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="container">
			<div class="row align-items-center">

				<div class="col-md-4">
					<?php get_template_part( 'template-parts/header/site-branding' ); ?>
				</div><!-- .col-md-4 -->

				<div class="col-md-8">
					<?php get_template_part( 'template-parts/header/site-nav' ); ?>
				</div><!-- .col-md-8 -->

			</div><!-- row -->
		</div><!-- .container -->

	</header><!-- #masthead -->
