<?php
/**
 * Template Name: Home
 *
 * @package ds-skoda
 *
 */

 get_header();

   if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

     <div class="skoda_home-banner page-banner">
       <?php
         $images = rwmb_meta( 'ds-banner-slider-image', 'size=FULL' );

         //print_r($images);

         if ( !empty( $images ) ) { ?>

           <div class="carousel-inner"><?php
           $count = 0;

           foreach ( $images as $image ) {
             $count++; ?>

             <div class="item <?php if($count == 1){echo ' active';} ?>">
               <img class="centered-img" src="<?php echo esc_url( $image['url'] ) ?>"  alt="<?php echo esc_attr( $image['alt'] )?>">
             </div><!-- end item -->

           <?php } ?>
         </div><!-- end carousel inner --><?php
         }
       ?>
     </div>

     <!-- search vehicle form -->
     <div class="container">
      <form class="skoda1_quick-search-form skoda1-form">
        <h3 class="skoda1_widget-title">Search our vehicles</h3>
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <div class="form-group clearfix">
              <div class="form-label">
                <label class="control-label" for="make_target">Make</label>
              </div>
              <div class="form-input">
                <select class="form-control select-form-control" id="make_target">
                  <option value="">
                    Please Select...
                  </option>
                  <option value="">
                    Option
                  </option>
                </select>
              </div>
            </div>
            <div class="form-group clearfix">
              <div class="form-label">
                <label class="control-label" for="model_target">Model</label>
              </div>
              <div class="form-input">
                <select class="form-control select-form-control" id="model_target">
                  <option value="">
                    Please Select...
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
              <div class="form-label">
                <label class="control-label" for="body_target">Body</label>
              </div>
              <div class="form-input">
                <select class="form-control select-form-control" id="body_target">
                  <option value="">
                    Please Select...
                  </option>
                  <option value="">
                    Option
                  </option>
                </select>
              </div>
            </div>
            <div class="form-group clearfix">
              <div class="form-label">
                <label>Price</label>
              </div>
              <div class="form-input">
                <div class="slider" id="price-range"></div><span id="min-price"></span> <span id="max-price"></span>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <button class="btn btn-primary btn-block" type="submit"><span>Search Now!</span></button>
          </div>
        </div>
      </form>
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
   endif; ?>

   <!-- car gallery carousel -->
   <section class="car-gallery skoda1_page-bottom-content">
   	<div class="container">
   		<div class="skoda1_page-bottom-content-inner">
   			<h3 class="skoda1_widget-title text-center">Currently in stock</h3>

        <!-- Car Gallery -->
   			<div class="owl-carousel owl-theme" id="skoda1_car-gallery">

          <?php

            $args = array(
              'post_type'     => 'car',
              'post_status'   => 'publish'
            );

            $car_price = rwmb_meta( 'ds-car-price' );
    				print_r($car_price);

            $cars = new WP_Query( $args );

            if( $cars->have_posts() ) : while( $cars->have_posts() ) : $cars->the_post(); ?>
       				<div class="item active">
       					<div class="skoda1_car-image">
                  <?php
                    $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
                  ?>
                  <img alt="Skoda" class="img-responsive" src="<?php echo $image; ?>">
                </div>

       					<div class="skoda1_car-sale-mini-info bold-text">
       						<span class="car-name"><?php echo get_the_title(); ?></span>
                  <span class="car-price"><?php echo rwmb_meta( 'ds-car-price' ); ?></span>
                  <a class="btn btn-primary btn-block" href="#"><span>View Details</span></a>
       					</div>
       				</div><!-- end item --><?php
              endwhile;
              wp_reset_postdata();
            endif; ?>



   			</div><!-- end owl-carousel -->

   			<div class="skoda1_car-gallery-nav">
   				<a class="prev"><img alt="Previous" src="<?php echo get_template_directory_uri(); ?>/img/gallery-nav-prev.png"></a>
          <a class="next"><img alt="Next" src="<?php echo get_template_directory_uri(); ?>/img/gallery-nav-next.png"></a>
   			</div>

   		</div><!-- end skoda1_page-bottom-content-inner -->
   	</div><!-- end container -->
   </section>

 <?php get_footer(); ?>
