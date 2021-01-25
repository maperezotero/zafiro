<?php
/**
 * Displays the site navigation.
 * 
 * @package zafiro
 * @since 1.0.0
 */
?>
<nav id="site-navigation" class="main-navigation">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		)
	);
	?>
</nav><!-- #site-navigation -->