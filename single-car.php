<?php
/**
 * The template for displaying all single car posts
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
				 <img alt="page banner" class="center-block" src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/img/banners/inner-page-banner.jpg"><?php
			 }
		 ?>
	 </div>

	 <!-- navigation -->
	 <nav class="navbar navbar-default vehicle-details-nav">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle collapsed" data-target="#skoda1_vehicle-details-navbar" data-toggle="collapse" type="button"><span class="mobile-menu-label">View showroom menu</span> <i class="fa fa-th"></i></button>
			</div><!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="skoda1_vehicle-details-navbar">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="#">Overview</a>
					</li>
					<li>
						<a href="#">Features</a>
					</li>
					<li>
						<a href="#">360 View</a>
					</li>
					<li>
						<a href="#">Gallery</a>
					</li>
					<li>
						<a href="#">Vehicle Range</a>
					</li>
					<li>
						<a href="#">Contact Us</a>
					</li>
					<li>
						<a href="#">Back to showroom</a>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container -->
	 </nav>

	 <section class="skoda1_page-body-content skoda1_vehicle-details-content">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-7 col-md-push-5 col-sm-push-5">
					<div class="section-text">
						<h3 class="car-name skoda1_widget-title color-grey">Skoda Fabia</h3><span class="car-price">From $16,500</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec imperdiet quam, sagittis vulputate elit. <a href="#">Search Our Cars</a> quisque vitae rhoncus purs. Ut mattis vehicula varius. Mauris pretieum at risus eu ullamcorper.</p>
						<p>DOnec pulvinar elit a quam gravida lobortis. Vestibulum imperdiet, nulla ac pretium vehicula, metus metus tincidunt lacus, ut gravida est lorem et ante. Fusce vel erat tempor, aliquet dolor malesuada, consequat ligula.</p>
					</div>
				</div>
				<div class="col-md-5 col-sm-5 col-md-pull-7 col-sm-pull-7"><img alt="image" class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/img/vehicledetails-intro.jpg"></div>
			</div>
		</div>
		<div class="skoda1_features-content-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-md-push-6 col-sm-push-6">
						<div class="carousel slide" data-ride="carousel" id="skoda1_features-gallery">
							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<div class="item active"><img alt="features" class="center-block" src="<?php echo get_template_directory_uri(); ?>/img/vehicledetails-features.jpg"></div>
								<div class="item"><img alt="features" class="center-block" src="<?php echo get_template_directory_uri(); ?>/img/vehicledetails-features.jpg"></div>
							</div><!-- Controls -->
							<div class="skoda1_gallery-nav">
								<a class="left" data-slide="prev" href="#skoda1_features-gallery" role="button"><i class="fa fa-chevron-left"></i></a> <a class="right" data-slide="next" href="#skoda1_features-gallery" role="button"><i class="fa fa-chevron-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-md-pull-6 col-sm-pull-6">
						<div class="section-text">
							<h3 class="skoda1_widget-title color-default">Vehicle Features</h3>
							<div class="features-text">
								<span class="text-uppercase highlight"><strong>So much space</strong></span>
								<p>With up to 1,165 litres of space, whether it's the weekly shop, the annual holiday, or a trip to the hardwware store, the Fabia's boot won't be lacking the space you need.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="skoda1_car-view-section">
			<div class="container">
				<div class="section-text">
					<h3 class="skoda1_widget-title color-grey">360 view</h3>
				</div>
				<div class="skoda1_360-view"><a class="rotate-right" href="#"><img alt="" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/rotate-right.png"></a> <a class="rotate-left" href="#"><img alt="" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/rotate-left.png"></a> <img alt="" class="img-responsive center-block view-car-image" src="<?php echo get_template_directory_uri(); ?>/img/car-360.png"></div>
				<div class="skoda1_color-selection text-center">
					<ul class="list-unstyled list-inline">
						<li><span><strong>Other Colours</strong></span></li>
						<li>
							<a class="color color-one" href="#"></a>
						</li>
						<li>
							<a class="color color-two" href="#"></a>
						</li>
						<li>
							<a class="color color-three" href="#"></a>
						</li>
						<li>
							<a class="color color-four" href="#"></a>
						</li>
						<li>
							<a class="color color-five" href="#"></a>
						</li>
						<li>
							<a class="color color-six" href="#"></a>
						</li>
						<li>
							<a class="color color-seven" href="#"></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="skoda1_vehicle-gallery-nav">
			<div class="container">
				<h3 class="skoda1_widget-title">Gallery</h3><!-- Controls -->
				<div class="skoda1_gallery-nav">
					<a class="left" data-slide="prev" href="#skoda1_vehicle-gallery" role="button"><i class="fa fa-chevron-left"></i></a> <a class="right" data-slide="next" href="#skoda1_vehicle-gallery" role="button"><i class="fa fa-chevron-right"></i></a>
				</div>
				<div class="numslide"></div>
			</div>
		</div>
		<div class="carousel slide" data-ride="carousel" id="skoda1_vehicle-gallery">
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active"><img alt="gallery" class="center-block" src="<?php echo get_template_directory_uri(); ?>/img/gallery-image.jpg"></div>
				<div class="item"><img alt="gallery" class="center-block" src="<?php echo get_template_directory_uri(); ?>/img/gallery-image.jpg"></div>
				<div class="item"><img alt="gallery" class="center-block" src="<?php echo get_template_directory_uri(); ?>/img/gallery-image.jpg"></div>
			</div><!-- Controls -->
			 <a class="left carousel-control" data-slide="prev" href="#skoda1_vehicle-gallery" role="button"><span aria-hidden="true" class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span></a> <a class="right carousel-control" data-slide="next" href="#skoda1_vehicle-gallery" role="button"><span aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span></a>
		</div>
		<div class="skoda1_vehicle-range-section">
			<div class="container">
				<div class="section-text">
					<h3 class="skoda1_widget-title color-grey">Vehicle Range</h3>
				</div>
				<form class="row skoda1-form skoda1_vehicle-range-form">
					<div class="col-md-4 col-sm-4">
						<div class="form-group clearfix">
							<div class="form-input">
								<select class="form-control select-form-control" id="model_range">
									<option value="">
										All Models
									</option>
									<option value="">
										Option
									</option>
								</select>
							</div>
						</div>
						<div class="form-group clearfix">
							<div class="form-input">
								<select class="form-control select-form-control" id="door-count_range">
									<option value="">
										All Door Counts
									</option>
									<option value="">
										Option
									</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="form-group clearfix">
							<div class="form-input">
								<select class="form-control select-form-control" id="transmission_range">
									<option value="">
										All Transmissions
									</option>
									<option value="">
										Option
									</option>
								</select>
							</div>
						</div>
						<div class="form-group clearfix">
							<div class="form-input">
								<select class="form-control select-form-control" id="body-styles_range">
									<option value="">
										All Body Styles
									</option>
									<option value="">
										Option
									</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="results-text text-center">
							<span class="text-uppercase"><strong>Matching results</strong></span> <span class="count"><strong>15</strong></span>
						</div><button class="btn btn-primary btn-block" type="submit"><span>Update Results</span></button>
					</div>
				</form>
				<div class="skoda1_car-results">
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<!-- Car result item -->
							<div class="car-result-item">
								<div class="car-result-image">
									<img alt="image" class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/img/vehicledetails-results-image.jpg">
									<div class="result-overlay-wrap">
										<div class="car-result-overlay-info">
											<div class="car-result-details-label">
												<span><strong>Transmission</strong></span> <span><strong>Doors</strong></span>
											</div>
											<div class="car-result-details-value">
												<span>6 Sp Automatic</span> <span>5</span>
											</div>
											<div class="car-result-details-buttons">
												<span>More details</span> <span>Make an enquiry</span>
											</div>
										</div>
									</div>
								</div>
								<div class="row car-result-details">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<span>Skoda Fabia 77 TSI Ambition Wagon 5JF MY15 SC</span>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<p class="text-right"><span class="pricing"><strong>$16,500</strong></span> <span><strong>Drive Away</strong></span></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- Car result item -->
							<div class="car-result-item">
								<div class="car-result-image">
									<img alt="image" class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/img/vehicledetails-results-image.jpg">
									<div class="result-overlay-wrap">
										<div class="car-result-overlay-info">
											<div class="car-result-details-label">
												<span><strong>Transmission</strong></span> <span><strong>Doors</strong></span>
											</div>
											<div class="car-result-details-value">
												<span>6 Sp Automatic</span> <span>5</span>
											</div>
											<div class="car-result-details-buttons">
												<span>More details</span> <span>Make an enquiry</span>
											</div>
										</div>
									</div>
								</div>
								<div class="row car-result-details">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<span>Skoda Fabia 77 TSI Ambition Wagon 5JF MY15 SC</span>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<p class="text-right"><span class="pricing"><strong>$16,500</strong></span> <span><strong>Drive Away</strong></span></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- Car result item -->
							<div class="car-result-item">
								<div class="car-result-image">
									<img alt="image" class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/img/vehicledetails-results-image.jpg">
									<div class="result-overlay-wrap">
										<div class="car-result-overlay-info">
											<div class="car-result-details-label">
												<span><strong>Transmission</strong></span> <span><strong>Doors</strong></span>
											</div>
											<div class="car-result-details-value">
												<span>6 Sp Automatic</span> <span>5</span>
											</div>
											<div class="car-result-details-buttons">
												<span>More details</span> <span>Make an enquiry</span>
											</div>
										</div>
									</div>
								</div>
								<div class="row car-result-details">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<span>Skoda Fabia 77 TSI Ambition Wagon 5JF MY15 SC</span>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<p class="text-right"><span class="pricing"><strong>$16,500</strong></span> <span><strong>Drive Away</strong></span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<!-- Car result item -->
							<div class="car-result-item">
								<div class="car-result-image">
									<img alt="image" class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/img/vehicledetails-results-image.jpg">
									<div class="result-overlay-wrap">
										<div class="car-result-overlay-info">
											<div class="car-result-details-label">
												<span><strong>Transmission</strong></span> <span><strong>Doors</strong></span>
											</div>
											<div class="car-result-details-value">
												<span>6 Sp Automatic</span> <span>5</span>
											</div>
											<div class="car-result-details-buttons">
												<span>More details</span> <span>Make an enquiry</span>
											</div>
										</div>
									</div>
								</div>
								<div class="row car-result-details">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<span>Skoda Fabia 77 TSI Ambition Wagon 5JF MY15 SC</span>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<p class="text-right"><span class="pricing"><strong>$16,500</strong></span> <span><strong>Drive Away</strong></span></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- Car result item -->
							<div class="car-result-item">
								<div class="car-result-image">
									<img alt="image" class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/img/vehicledetails-results-image.jpg">
									<div class="result-overlay-wrap">
										<div class="car-result-overlay-info">
											<div class="car-result-details-label">
												<span><strong>Transmission</strong></span> <span><strong>Doors</strong></span>
											</div>
											<div class="car-result-details-value">
												<span>6 Sp Automatic</span> <span>5</span>
											</div>
											<div class="car-result-details-buttons">
												<span>More details</span> <span>Make an enquiry</span>
											</div>
										</div>
									</div>
								</div>
								<div class="row car-result-details">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<span>Skoda Fabia 77 TSI Ambition Wagon 5JF MY15 SC</span>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<p class="text-right"><span class="pricing"><strong>$16,500</strong></span> <span><strong>Drive Away</strong></span></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- Car result item -->
							<div class="car-result-item">
								<div class="car-result-image">
									<img alt="image" class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/img/vehicledetails-results-image.jpg">
									<div class="result-overlay-wrap">
										<div class="car-result-overlay-info">
											<div class="car-result-details-label">
												<span><strong>Transmission</strong></span> <span><strong>Doors</strong></span>
											</div>
											<div class="car-result-details-value">
												<span>6 Sp Automatic</span> <span>5</span>
											</div>
											<div class="car-result-details-buttons">
												<span>More details</span> <span>Make an enquiry</span>
											</div>
										</div>
									</div>
								</div>
								<div class="row car-result-details">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<span>Skoda Fabia 77 TSI Ambition Wagon 5JF MY15 SC</span>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<p class="text-right"><span class="pricing"><strong>$16,500</strong></span> <span><strong>Drive Away</strong></span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section class="skoda1_page-bottom-content">
			<div class="container">
				<div class="skoda1_page-bottom-content-inner">
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<h3 class="text-uppercase">Want to know more?</h3>
							<p><strong>Send Your Enquiry Online.</strong></p>
						</div>
						<div class="col-md-4 col-sm-4">
							<a class="btn btn-primary btn-block"><span>Send an enquiry</span></a>
						</div>
						<div class="col-md-4 col-sm-4">
							<a class="btn btn-primary btn-block"><span>Book a test drive</span></a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>

	 <?php endwhile;
 endif;?>


 <?php get_footer(); ?>
