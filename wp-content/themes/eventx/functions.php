<?php

register_post_type('social-media', [
    'label' => "Social Media",
    'description' => "Social Media accounts to be displayed on footer",
    'supports' => ['title'],
    'public' => true,
    'menu_icon' => 'dashicons-facebook'
]);

add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
function load_dashicons_front_end() {
  wp_enqueue_style( 'dashicons' );
}

function sponsors_sidebar() {
    register_sidebar([
        'id' => 'sponsors-sidebar',
        'name' => 'Sponsor Sidebar',
        'description' => 'Sidebar for display sponsors',
        'before_widget' => "<li class='the-sponsor'>",
        "after_widget" => "</li>"
    ]);
}

function buy_ticket() {
    add_menu_page('Buy Your Tickets', 'Buy Your Tickets', 'manage_options', 'buy-your-ticket-page', 'buy_ticket_page');
}

function buy_ticket_init() {
    register_setting('buy-your-ticket-page','buy_ticket_url');
    add_settings_section('buy-ticket-section','Buy Ticket URL','','buy-your-ticket-page');
    add_settings_field('buy-ticket-url','Buy Ticket URL', 'buy_ticket_cb','buy-your-ticket-page', 'buy-ticket-section');
}


function buy_ticket_cb() {
    $link = esc_attr(get_option('buy_ticket_url'));
    ?>
    <input type="text" name="buy_ticket_url" value="<?= $link ?>" id="">
    <?php
}

function buy_ticket_page() { ?>
<form action="options.php" method="post">
    <h2>Buy Tickets</h2>
    <?php 
    settings_fields('buy-your-ticket-page');
    do_settings_sections('buy-your-ticket-page');
    submit_button();
    ?>
</form>
<?php }

add_action('widgets_init', 'sponsors_sidebar');
add_action('admin_menu','buy_ticket');
add_action('admin_init','buy_ticket_init');
?>