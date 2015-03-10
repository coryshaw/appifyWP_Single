<?php
class ControlPanel {
  function ControlPanel() {
    add_action('admin_menu', array(&$this, 'admin_menu'));
    add_action('admin_head', array(&$this, 'admin_head'));
 
    if (function_exists('register_sidebar'))
        register_sidebar(array('name' => 'Sidebar'));

	if (!is_array(get_option('appify')))
	  add_option('appify', $this->default_settings);
	$this->options = get_option('appify');

  }
 
  function admin_menu() {
    add_theme_page('Theme Control Panel', 'Appify Theme Settings', 'edit_themes', "Appify", array(&$this, 'optionsmenu'));
  }
 
  function admin_head() {
    echo '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/css/controlpanel.css" type="text/css" media="screen" />';
  }
 
function optionsmenu() {
  if ($_POST['ss_action'] == 'save') {
    $this->options["display_blog_title"] = isset($_POST['cp_displayblogtitle']) ? 1 : 0;
    $this->options["appify_bg_color"] = $_POST['appify_bg_color'];
    update_option('appify', $this->options);
    echo '<div class="updated fade" id="message" style="background-color: rgb(255, 251, 204); width: 600px; margin-left: 20px"><p>Settings <strong>saved</strong>.</p></div>';
  }

  echo '<form action="" method="post" class="themeform">';
  echo '<input type="hidden" id="ss_action" name="ss_action" value="save">';
  echo '<input type="checkbox" name="cp_displayblogtitle" id="cp_displayblogtitle"'.($this->options["display_blog_title"] == 1 ? ' checked' : '').' /><label style="margin-left: 5px;" for="cp_displayblogtitle">Display Blog Title</label><br />';
  echo 'Background Color: <input class="widefat" style="text-align: right; width: 65px" name="appify_bg_color" id="appify_bg_color" type="text" value="'.$this->options["Background Color"].'" />';
  echo '<p class="submit"><input type="submit" value="Save Changes" name="cp_save"/></p>';
  echo '</form>';
}


var $default_settings = Array(
  'display_blog_title' => 1,
  'appify_bg_color' => '#1b1d1d'
);


}
?>