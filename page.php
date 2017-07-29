<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ds-skoda
 */

get_header();

	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="page-banner">
			<?php
				$images = rwmb_meta( 'ds-page-banner-image', 'size=FULL' );
				//print_r($images);

				if ( !empty( $images ) ) {
					foreach ( $images as $image ) {
							echo '<img class="center-block" src="', esc_url( $image['url'] ), '"  alt="', esc_attr( $image['alt'] ), '"></a>';
					}
				} else { ?>
					<img alt="page banner" class="center-block" src="<?php echo get_template_directory_uri(); ?>/img/banners/inner-page-banner.jpg"><?php
				}
			?>
		</div>

		<div class="container skoda1_page-body-content">
		 <div class="row">

				<div class="col-md-8 col-sm-8 skoda1_intro-text">
				 <?php the_content(); ?>
			 </div>

			 <?php get_sidebar(); ?>

		 </div>
		</div>

		<?php endwhile;
	endif;?>

<?php
get_footer();
