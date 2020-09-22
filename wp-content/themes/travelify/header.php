<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelify</title>
    <link rel="stylesheet" href="<?= get_bloginfo('stylesheet_directory') ?>/assets/css/base.css">
    <link rel="stylesheet" href="<?= get_bloginfo('stylesheet_directory') ?>/assets/css/style.css">
</head>
<body>
    <div id="app">
        <header>
            <div class="discount">
                <div class="container">
                    <p class="text-center">
                        00:00:00 Left To Get Discount. Get Now!
                    </p>
                </div>
            </div>
            <div class="container">
                    <nav class="navbar">
                        <div class="navbar-brand">
                            <a href="index.php">
                            <?= get_custom_logo() ?>
                            </a>
                        </div>
                        <?php 
                        echo wp_nav_menu([
                            'menu' => 2
                        ]) ?>
                        <!-- <ul class="navbar-nav">
                            <li class='nav-item active'><a href="index.php" class='nav-link'>Home</a></li>
                            <li class='nav-item'><a href="index.php" class='nav-link'>About</a></li>
                            <li class='nav-item'><a href="index.php" class='nav-link'>Tours</a></li>
                            <li class='nav-item'><a href="index.php" class='nav-link'>Blog</a></li>
                            <li class='nav-item'><a href="index.php" class='nav-link'>Contact</a></li>
                        </ul> -->
                    </nav>
            </div>
        </header>
    