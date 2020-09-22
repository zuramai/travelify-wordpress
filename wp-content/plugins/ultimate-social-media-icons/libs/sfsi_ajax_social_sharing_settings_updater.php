<?php
add_action( 'wp_ajax_update_sharing_settings', 'update_sharing_settings' );

function update_sharing_settings() {
	$option5  = unserialize(get_option('sfsi_section5_options',false));
	$option5['sfsi_custom_social_hide'] = $_POST['sfsi_custom_social_hide'];
	update_option('sfsi_section5_options',serialize($option5));
	echo true;
	wp_die(); // this is required to terminate immediately and return a proper response
}
?>