<?php
/*
Plugin Name: PluginZ
Description: PluginZ counts
Version: 1.0.0
Author: Taha Uygun
*/

if(!defined('ABSPATH')){
  exit;
}

require_once(plugin_dir_path(__FILE__).'/includes/pluginZ-scripts.php');

require_once(plugin_dir_path(__FILE__).'/includes/pluginZ-class.php');

function register_pluginz(){
  register_widget('PluginZ_Widget');
}
add_action('widgets_init', 'register_pluginZ');