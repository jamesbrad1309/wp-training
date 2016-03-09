<?php
if ( function_exists('acf_add_options_page') )
{
	acf_add_options_page(array(
		'page_title'	=> 'Theme General Settings',
		'menu_title'	=> 'Theme General Settings',
		'menu_slug'		=> 'theme_general_settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title'	=> 'Social Section Settings',
		'menu_title'	=> 'Social Section',
		'menu_slug'		=> 'social',
		'parent_slug'	=> 'theme_general_settings'
	));
}
?>