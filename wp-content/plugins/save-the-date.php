<?php
/* 
Plugin Name: Save The Date
Author: Ahmad Saugi
Description: Plugin for creating Save The Date 
*/
function my_settings_page() {
    add_menu_page(
        'Save the Date', // title of the settings page
        'Save The Date', // title of the submenu
        'manage_options', // capability of the user to see this page
        'save-the-date-page', // slug of the settings page
        'save_the_date_html' // callback function when rendering the page
    );
    add_action('admin_init', 'my_settings_init');
}
add_action('admin_menu', 'my_settings_page');

function my_settings_init() {
    add_settings_section(
        'my-settings-section', // id of the section
        'My Settings', // title to be displayed
        '', // callback function to be called when opening section, currently empty
        'save-the-date-page' // page on which to display the section
    );
    register_setting(
        'save-the-date-page', // option group
        'the_date'
    );
    register_setting(
        'save-the-date-page', // option group
        'the_time'
    );

    add_settings_field(
        'the-date', // id of the settings field
        'Tanggal', // title
        'save_the_date_cb', // callback function
        'save-the-date-page', // page on which settings display
        'my-settings-section' // section on which to show settings
    );
    add_settings_field(
        'the-time', // id of the settings field
        'Waktu', // title
        'save_the_date_waktu_cb', // callback function
        'save-the-date-page', // page on which settings display
        'my-settings-section' // section on which to show settings
    );
}
function save_the_date_cb() {
    $the_date = esc_attr(get_option('the_date', ''));
    ?>

    <div id="titlediv">
        <input id="title" type="date" name="the_date" value="<?php echo $the_date; ?>">
    </div>
<?php
}

function save_the_date_waktu_cb() {
    $the_time = esc_attr(get_option('the_time', ''));
    ?>

    <div id="titlediv">
        <input id="title" type="time" name="the_time" value="<?php echo $the_time; ?>">
    </div>
<?php
}

add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'save_the_date_plugin_page_settings_link');
function save_the_date_plugin_page_settings_link( $links ) {
	$links[] = '<a href="' .
		admin_url( 'options-general.php?page=save-the-date-page' ) .
		'">' . __('Settings') . '</a>';
	return $links;
}

function save_the_date_html() {
  // check user capabilities
    if (!current_user_can('manage_options')) {
        return;
    }
    ?>
    <div class="wrap">
        <?php settings_errors();?>
        <form method="POST" action="options.php">
            <?php settings_fields('save-the-date-page');?>
            <?php do_settings_sections('save-the-date-page')?>
            <?php submit_button();?>
        </form>
    </div>
    <?php

}
