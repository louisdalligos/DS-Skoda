<?php
/**
 * Template Name: Home
 *
 * @package ds-skoda
 *
 */
 
 get_header();

   while ( have_posts() ) : the_post(); ?>

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

   <?php endwhile; // End of the loop.
   ?>

 <?php get_footer(); ?>
