<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ds-skoda
 */

?>

  <footer>
  	<div class="skoda1_widget-area">
  		<div class="container">
  			<div class="skoda1_widget-overlay-bg">
  				<div class="col-md-6 col-sm-6 column-widget-1">
  					<div class="row">
  						<div class="col-xs-6 col-sm-6 col-md-6 address-widget">
  							<div class="widget-inner">
  								<i class="fa fa-map-marker"></i>
  								<address>
  									<?php echo get_theme_mod('site_address'); ?>
  								</address>
  							</div>
  						</div>
  						<div class="col-xs-6 col-sm-6 col-md-6 phone-widget">
  							<div class="widget-inner">
  								<i class="fa fa-phone"></i>
                  <span><?php echo get_theme_mod('site_contact_number'); ?></span>
  							</div>
  						</div>
  					</div>
            <!-- Add the extra clearfix for only the required viewport -->
  					<div class="row">
  						<div class="col-xs-6 col-sm-6 col-md-6 email-widget">
  							<div class="widget-inner">
  								<i class="fa fa-envelope"></i>
                  <a class="visible-md visible-lg" href="mailto:<?php echo get_theme_mod('site_email'); ?>"><?php echo get_theme_mod('site_email'); ?></a>
                  <a class="visible-xs visible-sm" href="<?php echo get_theme_mod('site_email'); ?>">Email Us</a>
  							</div>
  						</div>
  						<div class="col-xs-6 col-sm-6 col-md-6 schedule-widget">
  							<div class="widget-inner">
  								<i class="fa fa-check-circle-o"></i>
                  <?php echo get_theme_mod('site_schedule'); ?>
  							</div>
  						</div>
  					</div>
  				</div>
  				<div class="col-md-6 col-sm-6 column-widget-2 hidden-xs">
  					<h3 class="skoda1_widget-title">About Us</h3>
  					<?php echo get_theme_mod('site_about_desc'); ?>
  				</div>
  			</div>
  		</div>
  	</div>
  	<div class="skoda1_footer-bottom container">
  		<div class="row">
  			<div class="col-md-9 col-sm-9">
  				<p class="skoda1-copyright">&copy; 2015 <?php bloginfo( 'name' ); ?></p>
          <?php
						wp_nav_menu( array(
							'theme_location' => 'menu-2',
							'menu_id'        => 'footer-menu',
							'container'      => 'p',
							'menu_class' => 'footer-menu'
						) );
					?>
  				<p class="dealer_link"><a href="#">Dealer Website</a> by Dealer Solutions</p>
  			</div>
  			<div class="col-md-3 col-sm-3 skoda1_footer-social-links-wrap">
  				<div class="skoda1_footer-social">
  					<a href="<?php echo get_theme_mod('facebook_link'); ?>"><i class="fa fa-facebook"></i></a>
            <a href="<?php echo get_theme_mod('twitter_link'); ?>"><i class="fa fa-twitter"></i></a>
            <a href="<?php echo get_theme_mod('youtube_link'); ?>"><i class="fa fa-youtube"></i></a>
  				</div>
  			</div>
  		</div>
  	</div>
  </footer>

<?php wp_footer(); ?>

</body>
</html>
