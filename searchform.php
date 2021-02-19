<?php 
/**
 * Template for displaying the search form on widget.
 * 
 * @package zafiro
 * @since 1.0.0
 */
?>

<form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
	<span class="screen-reader-text"><?php esc_html_e( 'Search', 'zafiro' ); ?></span>
		<input class="search-field" type="search" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder', 'zafiro' ); ?>" value="<?php echo get_search_query(); ?>"  name="s">
	</label>
	<button class="search-submit" type="submit">
		<svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"/></svg>
	</button>
</form>
