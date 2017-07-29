<?php
/**
 * Template Name: Contact
 *
 * @package ds-skoda
 *
 */

 get_header();

   if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

     <div class="page-banner skoda1_contact-page-map">
       <div class="container map-wrapper">
         <div class="row">
           <div class="gmap3" id="skoda1_dealer-gmap"></div>
         </div>
       </div>
       <div class="container">
         <div class="row">
           <div class="col-md-6 col-sm-6">
             <a class="btn btn-primary btn-block" href="#"><span>Enlarge Map</span></a>
           </div>
           <div class="col-md-6 col-sm-6">
             <a class="btn btn-primary btn-block" href="#"><span>Get Directions</span></a>
           </div>
         </div>
       </div>
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

 <?php get_footer(); ?>
