<?php
/**
 * Plugin Name: MailChimp List Subscription
 * Plugin URI: http://appifywp.com
 * Description: Add emails to a MailChimp list
 * Version: 0.1
 * Author: Cory Shaw
 * Author URI: http://userkind.com
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * Add function to widgets_init that'll load our widget.
 * @since 0.1
 */
add_action( 'widgets_init', 'example_load_widgets' );

/**
 * Register our widget.
 * 'MailChimp_List_Signup_Form' is the widget class used below.
 *
 * @since 0.1
 */
function example_load_widgets() {
	register_widget( 'MailChimp_List_Signup_Form' );
}

/**
 * Example Widget class.
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 * @since 0.1
 */
class MailChimp_List_Signup_Form extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function MailChimp_List_Signup_Form() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'example', 'description' => __('Add an email subscription form to your site powered by MailChimp so you can notify people when you launch.', 'example') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 250, 'height' => 350, 'id_base' => 'example-widget' );

		/* Create the widget. */
		$this->WP_Widget( 'example-widget', __('AppifyWP MailChimp List Signup Form', 'example'), $widget_ops, $control_ops );
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );


		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$name = $instance['name'];
		$key = $instance['key'];

		/* Before widget (defined by themes). */
		

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $key && $name ) {
		  if ( $title ) {
		    echo '<div class="regWidget cf"><h3>'.$title.'</h3>';
		  }
		  $formtastic = '<form id="MCsignup" action="#" method="get"><div class="cf"><input type="text" name="email" id="email" placeholder="name@gmail.com"/><a class="fancy_button addMailListBtn" style="background:#555;" href="javascript: void(0);"><span>Signup</span></a><input name="thekey" type="hidden" value="'.$key.'" id="thekey"/><input name="lname" type="hidden" value="'.$name.'" id="lname"/><input type="hidden" name="submitpath" class="submitpath" value="'.get_bloginfo('template_directory').'"/></div><div id="response"></div></form>';
			echo $formtastic;
			echo '</div>';
    }
		/* After widget (defined by themes). */
		
	}

	/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['key'] = strip_tags( $new_instance['key'] );
		$instance['name'] = strip_tags( $new_instance['name'] );

		return $instance;
	}

	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */
		
		$instance = wp_parse_args( (array) $instance ); ?>

		<!-- Widget Title: Text Input -->
  <p>
  	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title', 'hybrid'); ?></label>
  	<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:210px;" />
  </p>


		<p>
			<label for="<?php echo $this->get_field_id( 'key' ); ?>"><?php _e('MailChimp API Key (123456789-us2)', 'hybrid'); ?></label>
			<input id="<?php echo $this->get_field_id( 'key' ); ?>" name="<?php echo $this->get_field_name( 'key' ); ?>" value="<?php echo $instance['key']; ?>" style="width:210px;" />
		</p>

		<!-- Your Name: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'name' ); ?>"><?php _e('MailChimp List Unique ID:', 'example'); ?></label>
			<input id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" value="<?php echo $instance['name']; ?>" style="width:210px;" />
		</p>

		

	<?php
	}
}

?>