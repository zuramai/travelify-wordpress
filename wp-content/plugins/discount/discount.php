<?php  

/*
Plugin Name: Discount Countdown
Description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium obcaecati officia provident dicta, tempora aperiam voluptatem dolor reprehenderit voluptatibus unde at iusto, ab accusamus quo repellat exercitationem ipsam pariatur perferendis.
Version: 1.0
*/
function discount_add_settings_page_init() {
    add_menu_page(
        'Discount Settings', // Menu Title
        'Discount Settings', // Menu Display Name
        'manage_options', // Default
        'discount-plugin-page', // Settings Slug Page
        'discount_render_plugin_settings_page' // HTML Return Function 
    );
    add_action( 'admin_init', 'discount_register_settings' );
}
add_action('admin_menu', 'discount_add_settings_page_init');    

// Markup
function discount_render_plugin_settings_page() {
    ?>
    <h1>Discount Settings</h1>
    <form action="options.php" method="post">
        <?php 
        settings_fields( 'discount-plugin-page' );
        do_settings_sections( 'discount-plugin-page' ); // Page Slug
        ?>
        <input name="submit" class="button button-primary" type="submit" value="<?php esc_attr_e( 'Save' ); ?>" />
    </form>
    <?php
}

function discount_register_settings() {
    add_settings_section('datetime-section', 'Datetime Settings', '','discount-plugin-page');

    register_setting('discount-plugin-page', 'the_date');
    register_setting('discount-plugin-page', 'the_time');
    
    add_settings_field('the-date', 'Date', 'discount_plugin_setting_date_callback', 'discount-plugin-page','datetime-section');
    add_settings_field('the-time', 'Time', 'discount_plugin_setting_time_callback', 'discount-plugin-page','datetime-section');
}

function discount_plugin_setting_date_callback() {
    $value = get_option('the_date',''); ?>
    <input id="discount_plugin_setting_date" type="date" name="the_date" value="<?= $value ?>">
    <?php
}
function discount_plugin_setting_time_callback() {
    $value = get_option('the_time',''); ?>
    <input id="discount_plugin_setting_date" type="time" name="the_time" value="<?= $value ?>">
    <?php
}

add_shortcode('discountCountdown', 'get_discount_time_countdown');
function get_discount_time_countdown($attr) {
    $targetDate = get_option('the_date','');
    $targetTime = get_option('the_time','');
    $targetDateTime = $targetDate." ".$targetTime;
    
    if($attr['plain-text']) { ?>
        <span>
            <span id="target-datetime" data-datetime="<?= $targetDateTime ?>"></span>
            <span id="countdown-days" data-value="0">0d:</span>
            <span id="countdown-hours" data-value="0">0h:</span>
            <span id="countdown-minutes" data-value="0">0m:</span>
            <span id="countdown-seconds" data-value="0">0s</span>
        </span>
    <?php }
}



function countdownjs_callback() {
    wp_enqueue_script('countdownjs', plugins_url('/countdown.js', __FILE__), [], false, true);
    // wp_enqueue_script('countdownjs', plugins_url('/countdown.js', __FILE__), [''], false, true);
}
// Init JS Script
add_action('wp_enqueue_scripts','countdownjs_callback');

?>