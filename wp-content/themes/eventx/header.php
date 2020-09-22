<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventX</title>
    <link rel='stylesheet' href='http://localhost/wordpress/lksn_2019/wp-admin/load-styles.php?c=1&amp;dir=ltr&amp;load%5B%5D=dashicons&amp;ver=5.2.5' type='text/css' media='all' />
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/base.css">
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/style.css">
</head>
<body>
    <div id="app">
        <header class="<?= (is_front_page() ? 'header-front-page' : 'header-biasa') ?>">
            <nav class='d-flex justify-content-between'>
                <div class="nav-brand">
                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/logo.png" alt="" class="logo">
                </div>
                <?= wp_nav_menu() ?>
                <!-- <ul class="nav-menu">
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>Home</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>About Us</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>Schedule</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>Ticketing</a>
                    </li>
                </ul> -->
            </nav>
        </header>