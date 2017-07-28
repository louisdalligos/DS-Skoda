<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ds-skoda
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="suzuki1_sidebar col-md-4 col-md-push-2">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>

<div class="col-md-2 col-md-pull-10">
	<div class="suzuki1_side-menu list-group">
		<a class="list-group-item active" href="#">Service</a> <a class="list-group-item" href="#">Parts</a> <a class="list-group-item" href="#">Warranty</a> <a class="list-group-item" href="#">FAQ</a>
	</div>
</div>
