<?php
/**
 * Sample implementation of Custom Widgets feature
 *
 *
 * @package ds-skoda
 */

class Sidebar_CTA_Widget extends WP_Widget {

  // setup widget name, description, etc..
  public function __construct() {

   $widget_opts = array(
     'classname' => 'skoda1_cta-block clearfix',
     'description' => 'CTA box widget'
   );

   parent::__construct( 'skoda1_sidebar_cta', 'Sidebar CTA', $widget_opts );

  }

  // back-end display of the widget
  public function form( $instance ) { ?>
    <p>
      <label for="">CTA Name</label>
      <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" class="widefat">
    </p>
    <p>
      <label for="">Description</label>
      <input type="text" name="<?php echo $this->get_field_name('cta_desc'); ?>" value="<?php echo $instance['cta_desc']; ?>" class="widefat">
    </p>
    <p>
      <label for="">CTA Link Text</label>
      <input type="text" name="<?php echo $this->get_field_name('cta_link_text'); ?>" value="<?php echo $instance['cta_link_text']; ?>" class="widefat">
    </p>
    <p>
      <label for="">CTA URL</label>
      <input type="text" name="<?php echo $this->get_field_name('cta_url'); ?>" value="<?php echo $instance['cta_url']; ?>" class="widefat">
    </p>
    <p>
      <button id="cta_bg_img" class="button button-secondary">Set background image</button>
      <input type="hidden" name="<?php echo $this->get_field_name('cta_bg_img_url'); ?>" value="<?php echo $instance['cta_bg_img_url']; ?>" class="cta_bg_link" />
      <div class="image_show">
        <img id="<?php echo $this->id; ?>" src="<?php echo $instance['cta_bg_img_url']; ?>" height="auto" alt="">
      </div>
    </p><?php
  }

  // front-end display of the widget
  public function widget( $args, $instance ) {
    echo $args['before_widget'];
    echo $args['before_title'].$instance['title'].$args['after_title'];
    ?>

    <div class="cta-block-content">
      <h4 class="bold-text"><?php echo $instance['title']; ?></h4>
      <span><?php echo $instance['cta_desc']; ?></span>
      <a class="bold-text" href="<?php echo $instance['cta_url']; ?>"><?php echo $instance['cta_link_text']; ?> &raquo;</a>
    </div>

    <img alt="<?php echo $instance['title'] ; ?>" class="pull-right" src="<?php echo $instance['cta_bg_img_url']; ?>">

    <?php echo $args['after_widget']; }
  }

  add_action( 'widgets_init', function() {
    register_widget( 'Sidebar_CTA_Widget' );
  });

 ?>
