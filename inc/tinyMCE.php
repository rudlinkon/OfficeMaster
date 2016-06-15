<?php
// Hooks your functions into the correct filters
function my_add_mce_button() {
	// check user permissions
	if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
		return;
	}
	// check if WYSIWYG is enabled
	if ( 'true' == get_user_option( 'rich_editing' ) ) {
		add_filter( 'mce_external_plugins', 'office_master_tinymce_plugin' );
		add_filter( 'mce_buttons', 'office_master_register_mce_button' );
	}
}
add_action('admin_head', 'my_add_mce_button');

// Declare script for new button
function office_master_tinymce_plugin( $plugin_array ) {
	$plugin_array['ebit_first_button'] = get_template_directory_uri() .'/js/office-master-mce-button.js';
	$plugin_array['ebit_second_button'] = get_template_directory_uri() .'/js/office-master-mce-button.js';
	return $plugin_array;
}

// Register new button in the editor
function office_master_register_mce_button( $buttons ) {
	array_push( $buttons, 'ebit_first_button' );
	array_push( $buttons, 'ebit_second_button' );
	return $buttons;
}