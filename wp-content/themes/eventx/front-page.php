<?php echo get_header() ?>
        <section id="header">
            <div class="container">
                <h1>Lorem ipsum dolor sit amet!</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, ea corporis. Praesentium et quod unde officiis necessitatibus quae eaque, voluptate dolorum nam velit sapiente placeat.</p>
            </div>
        </section>
        <section id="save-the-date">
            <div class="row">
                <div class="col-md-5">
                    <h3 id="stdtext">SAVE THE DATE</h3>
                    <div class="warna"></div>
                </div>
                <div class="col-md-7 d-inline-flex">
                    <div class="per-date ">
                        <div class="kotak-date">
                            <h3 id='day'>70</h3>
                            <div class="kotak-keterangan">
                                Days
                            </div>
                        </div>
                    </div>
                    <div class="per-date ">
                        <div class="kotak-date">
                            <h3 id='hour'>15</h3>
                            <div class="kotak-keterangan">
                                Hours
                            </div>
                        </div>
                    </div>
                    <div class="per-date ">
                        <div class="kotak-date">
                            <h3 id='minute'>52</h3>
                            <div class="kotak-keterangan">
                                Minutes
                            </div>
                        </div>
                    </div>
                    <div class="per-date ">
                        <div class="kotak-date">
                            <h3 id='second'>30</h3>
                            <div class="kotak-keterangan">
                                Seconds
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <ul class="floating-sidebar">
            <h3>Our Sponsors</h3>
            <?=  dynamic_sidebar('sponsors-sidebar') ?>
        </ul>
        <div class="toggler-sidebar" id='toggler-sidebar'>
            <span class="dashicons dashicons-arrow-left-alt2"></span>
            <p class="text">Our Sponsors</p>
        </div>
        <section id="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/rock-concert-PBZ2JSW.jpg" alt="" srcset="" class='img-banner'>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-6">
                        <div class="section-header">
                            <h3>EventX, The Best Event Will Held in 2020</h3>
                        </div>
                        <div class="section-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed congue, elit ac efficitur venenatis, eros lacus convallis
                            enim, sit amet auctor elit nibh id augue. Integer dignissim, purus ut interdum euismod</p>
                        </div>
    
                    </div>
                </div>
            </div>
        </section>
        <section id="featured">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-header">
                            <h3>Our Featured Artists</h3>
                            <div class="warna"></div>
                        </div>
                        <div class="section-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed congue, elit ac efficitur venenatis, eros lacus convallis
                            enim, sit amet auctor elit nibh id augue. Integer dignissim, purus ut interdum euismod</p>
                            <p>Phasellus ac libero nibh. Sed eu neque at arcu molestie aliquet in et erat. Suspendisse sit amet nisi elementum ipsum
                            congue volutpat vel quis enim</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="slider">
                            <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/artists/Armin-van-buuren.jpg" alt="" class='img-slider'>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="buy-tickets">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-header">
                            <h3>Get Your Ticket!</h3>
                        </div>
                        <div class="section-body">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat impedit, minima explicabo neque odit dolor omnis, est dolorum vero unde.</p>
                        </div>
                    </div>
                    <div class="col-md-6 pt-10">
                        <div class="float-right">
                            <a href='<?= get_option('buy_ticket_url') ?>' class='btn btn-outline-white'>Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="news">
            <div class="container">
                <div class="section-header">
                    <h3 class='text-center'>News</h3>
                    <div class="warna-pendek mx-auto mt-3"></div>
                </div>
                <div class="section-body">
                    <div class="row">
                        <?php  
                        
                        $query = new WP_Query([
                            'post_per_page' => 3,
                            'post_type' => 'post',
                            'post_status' => 'publish'
                        ]);

                        if($query->have_posts()) {
                            while($query->have_posts()) {
                                $query->the_post(); ?>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <a href="<?= the_permalink() ?>"><img src="<?= the_post_thumbnail_url()  ?>" alt="" class="card-img-top"></a>
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <h4><a href='<?= the_permalink() ?>'><?= the_title() ?></a></h4>
                                                </div>
                                                <div class="card-description">
                                                    <?= substr(get_the_excerpt(), 0, 150) ?>.. <a href='#'>Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                        }
                        ?>
                        
                    </div>
                </div>
            </div>
        </section>

       <?= get_footer() ?>