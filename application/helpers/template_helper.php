<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

function admin_theme_locations(){
		$CI =& get_instance();
		$theme_location = $CI->template->get_theme_path();
		return base_url().$theme_location;
}
function theme_locations(){
		$CI =& get_instance();
		$theme_location = $CI->career_template->get_theme_path();
		return base_url().$theme_location;
}
