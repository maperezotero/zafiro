<?php
/**
 * Zafiro custom helper functions
 * 
 * @package zafiro
 * @since 1.0.0
 */

 /**
  * Footer columns option from Customizer
  */
function zafiro_footer_columns ( $columns = 4 ) {

	switch( $columns ) {
		case 3:
			?>
				<div class="col-sm-6 col-md-4"><?php dynamic_sidebar( 'footer-sidebar-1' ); ?></div>
				<div class="col-sm-6 col-md-4"><?php dynamic_sidebar( 'footer-sidebar-2' ); ?></div>
				<div class="col-sm-6 col-md-4"><?php dynamic_sidebar( 'footer-sidebar-3' ); ?></div>
			<?php
			break;		
		case 2:
			?>
				<div class="col-sm-6 col-md-6"><?php dynamic_sidebar( 'footer-sidebar-1' ); ?></div>
				<div class="col-sm-6 col-md-6"><?php dynamic_sidebar( 'footer-sidebar-2' ); ?></div>
			<?php
			break;
		default:
			?>
				<div class="col-sm-6 col-md-3"><?php dynamic_sidebar( 'footer-sidebar-1' ); ?></div>
				<div class="col-sm-6 col-md-3"><?php dynamic_sidebar( 'footer-sidebar-2' ); ?></div>
				<div class="col-sm-6 col-md-3"><?php dynamic_sidebar( 'footer-sidebar-3' ); ?></div>
				<div class="col-sm-6 col-md-3"><?php dynamic_sidebar( 'footer-sidebar-4' ); ?></div>
			<?php
	}

}