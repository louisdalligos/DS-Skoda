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

	<!-- trade in form -->
	<section class="skoda1_page-bottom-heading visible-xs">
		<h4 class="heading-message text-center">Submit an enquiry now!</h4>
	</section>
	<section class="skoda1_page-bottom-content">
		<div class="container">
			<div class="skoda1_page-bottom-content-inner">
				<h3 class="skoda1_widget-title text-center">Trade in valuation form</h3>
				<form class="skoda1-form skoda1-tradein-form">
					<fieldset>
						<legend>Personal Details</legend>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="valuation-form-name">Full Name<span class="required">*</span></label> <input class="form-control input-sm" id="valuation-form-name" placeholder="" type="text">
								</div>
								<div class="form-group">
									<label for="valuation-form-phone">Phone</label> <input class="form-control input-sm" id="valuation-form-phone" placeholder="" type="text">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="valuation-form-email">Email<span class="required">*</span></label> <input class="form-control input-sm" id="valuation-form-email" placeholder="" type="email">
								</div>
							</div>
						</div>
					</fieldset>
					<fieldset class="no-margin-bottom">
						<legend>Vehicle Details</legend>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="valuation-form-make">Make<span class="required">*</span></label> <input class="form-control input-sm" id="valuation-form-make" placeholder="" type="text">
								</div>
								<div class="form-group">
									<label for="valuation-form-year">Year<span class="required">*</span></label> <input class="form-control input-sm" id="valuation-form-year" placeholder="" type="text">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="valuation-form-model">Model<span class="required">*</span></label> <input class="form-control input-sm" id="valuation-form-model" placeholder="" type="text">
								</div>
								<div class="form-group">
									<label for="valuation-form-km">Kilometers<span class="required">*</span></label> <input class="form-control input-sm" id="valuation-form-km" placeholder="" type="text">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<label for="valuation-form-comment">Comments<span class="required">*</span></label>
								<textarea id="valuation-form-comment"></textarea>
							</div>
							<div class="col-md-6 col-sm-6 col-md-offset-6 col-sm-offset-6">
								<button class="btn btn-primary btn-block" type="submit"><span>Submit My Enquiry</span></button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</section>
<?php
get_footer();
