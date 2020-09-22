<?php  

/*
Plugin Name: Discount Countdown
Description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium obcaecati officia provident dicta, tempora aperiam voluptatem dolor reprehenderit voluptatibus unde at iusto, ab accusamus quo repellat exercitationem ipsam pariatur perferendis.
Version: 1.0
*/

// Add menu page and execute init
function discount_settings_page() {
    add_menu_page(
        'Discount Timer',
        'Discount Timer',
        'manage_options',
        'discount-timer-page',
        'discount_timer_html'
    );
    add_action('admin_init', 'discount_settings_init');
}
add_action('admin_page','discount_settings_page');

// Add settings section and register settings input
function discount_settings_init() {
    add_settings_section(
        'discount-section',
        'Discount Settings',
        '',
        'discount-timer-page'
    );
    register_setting(
        'discount-timer-page',
        'the_date'
    );

    add_settings_field(
        'the-date',
        'Tanggal', 
        'discount_timer_date_cb',
        'discount-timer-page',
        'discount-timer-section'
    );
    add_settings_field(
        'the-time',
        'Waktu', 
        'discount_timer_time_cb',
        'discount-timer-page',
        'discount-timer-section'
    );
}
function discount_timer_date_cb() {

}
function discount_timer_time_cb() {

}
function discount_timer_html() {
    if (!current_user_can('manage_options')) {
        return;
    }
    ?>
    <div class="wrap">
        <?php settings_errors();?>
        <form method="POST" action="options.php">
            <?php settings_fields('discount-timer-page');?>
            <?php do_settings_sections('discount-timer-page')?>
            <?php submit_button();?>
        </form>
    </div>
    <?php
}
add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'discount_timer_plugin_page_settings_link');
function discount_timer_plugin_page_settings_link($links) {
    $links[] = "<a href='".admin_url('options-general.php?page=save-the-date-page')."'>".__('Settings')."</a>";
}
?>
