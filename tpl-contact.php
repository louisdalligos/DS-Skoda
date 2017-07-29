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

   <section class="skoda1_page-bottom-heading visible-xs">
   	<h4 class="heading-message text-center">Send a message today!</h4>
   </section>
   
   <section class="skoda1_page-bottom-content">
   	<div class="container">
   		<div class="skoda1_page-bottom-content-inner">
   			<h3 class="skoda1_widget-title text-center">General enquiry form</h3>
   			<form class="skoda1-form skoda1-enquiry-form">
   				<fieldset>
   					<legend>Personal Details</legend>
   					<div class="row">
   						<div class="col-md-6 col-sm-6">
   							<div class="form-group">
   								<label for="enquiry-form-name">Full Name<span class="required">*</span></label> <input class="form-control input-sm" id="enquiry-form-name" placeholder="" type="text">
   							</div>
   							<div class="form-group">
   								<label for="enquiry-form-phone">Phone</label> <input class="form-control input-sm" id="enquiry-form-phone" placeholder="" type="text">
   							</div>
   							<div class="form-group">
   								<label for="enquiry-form-postcode">Postcode<span class="required">*</span></label> <input class="form-control input-sm" id="enquiry-form-postcode" placeholder="" type="text">
   							</div>
   						</div>
   						<div class="col-md-6 col-sm-6">
   							<div class="form-group">
   								<label for="enquiry-form-email">Email<span class="required">*</span></label> <input class="form-control input-sm" id="enquiry-form-email" placeholder="" type="email">
   							</div>
   							<div class="form-group">
   								<label for="enquiry-form-suburb">Suburb<span class="required">*</span></label> <input class="form-control input-sm" id="enquiry-form-suburb" placeholder="" type="email">
   							</div>
   						</div>
   					</div>
   				</fieldset>
   				<fieldset class="no-margin-bottom">
   					<legend>Comments</legend>
   					<div class="row">
   						<div class="col-md-12 col-sm-12">
   							<label for="enquiry-form-comment">Comments<span class="required">*</span></label>
   							<textarea id="enquiry-form-comment"></textarea>
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
 <?php get_footer(); ?>
