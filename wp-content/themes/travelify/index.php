<?= get_header() ?>
<section class="section hero">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <h1>Rasakan pengalaman liburan terbaik se-Indonesia dengan Travelify</h1>
                <p>Nikmati liburanmu dengan Travelify. Kami akan membuat liburanmu makin menyenangkan dengan program Travelicious!</p>
                <div class="row">
                    <div class="col-6">
                        <button class="btn btn-block btn-lg btn-pill btn-shadow btn-primary">Daftar Sekarang</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="sliders">
                    <div class="slider-image">
                        <img src="<?= get_bloginfo('stylesheet_directory') ?>/assets/images/spots/spots-1.png" alt="Spots 1">
                    </div>
                    <div class="slider-image">
                        <img src="<?= get_bloginfo('stylesheet_directory') ?>/assets/images/spots/spots-2.png" alt="Spots 1">
                    </div>
                    <div class="slider-image">
                        <img src="<?= get_bloginfo('stylesheet_directory') ?>/assets/images/spots/spots-4.png" alt="Spots 1">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class='section spots'>
    <div class="container">
        <div class="section-header">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 col-12">
                    <h1 class="section-title">Favorite Spots</h1>
                    <p class="section-description">Berikut merupakan tempat yang sering dan populer di program kami. Kalian bisa klik gambar dibawah untuk info lebih lanjut.</p>
                </div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-6 col-md-3">
                    <img src="<?= get_bloginfo('stylesheet_directory') ?>/assets/images/spots/spots-1.png" alt="Spots 1">
                </div>
                <div class="col-6 col-md-3">
                    <img src="<?= get_bloginfo('stylesheet_directory') ?>/assets/images/spots/spots-2.png" alt="Spots 1">
                </div>
                <div class="col-6 col-md-3">
                    <img src="<?= get_bloginfo('stylesheet_directory') ?>/assets/images/spots/spots-3.png" alt="Spots 1">
                </div>
                <div class="col-6 col-md-3">
                    <img src="<?= get_bloginfo('stylesheet_directory') ?>/assets/images/spots/spots-4.png" alt="Spots 1">
                </div>
            </div>
            <button class="btn btn-block btn-lg btn-link mt-2">Lihat Lainnya</button>
        </div>
    </div>
</section>
<section class="section home-articles">
    <div class="section-header">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 col-12">
                <h1 class="section-title">Articles</h1>
                <p class="section-description">Berikut adalah artikel-artikel yang dapat membantu anda dalam memilih tempat wisata.</p>
            </div>
        </div>
    </div>
    <div class="section-body">
        <div class="container">
            <div class="row">
            <?php  
            $posts = new WP_Query([
                'post_type' => 'post',
                'post_per_page' => 3,
                'orderby' => 'id',
                'order' => 'desc',
                'post_status' => 'publish'
            ]);
                
            if($posts->have_posts()) {
                while($posts->have_posts()) {
                    $posts->the_post(); ?>
                        <div class="col-md-4 col-12">
                            <div class="card">
                                <a href="<?= get_the_permalink() ?>"><img src="<?= get_the_post_thumbnail_url() ?>" alt="Image for <?= the_title() ?>" class='card-img-top'></a>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="<?= get_the_permalink() ?>"><?=  the_title() ?></a></h3>
                                    <p><?= substr(get_the_excerpt(),50) ?></p>
                                </div>
                                <div class="card-footer">
                                    <p class="article-details">Posted by <?= the_author_posts_link() ?> at <?= the_date() ?></p>
                                </div>
                            </div>
                        </div>
                <?php }
            }
            ?>
            </div>
            <a href="<?= get_page_uri(9) ?>" class="float-right mt-5">Lihat artikel lainnya ></a>
        </div>
    </div>
</section>
<?= get_footer() ?>