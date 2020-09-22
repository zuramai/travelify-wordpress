<?= get_header() ?>
<div class="page">
    <div class="container">
        <div class="page-header">
        </div>
        <div class="page-content">
            <div class="articles">

                <?php  
                $posts = new WP_Query([
                    'post_per_page' => 5,
                    'post_type' => 'post',
                    'post_status' => 'publish'
                ]);
                while($posts->have_posts()) {
                    $posts->the_post(); 
                    ?>
                    
                    <div class="row mt-5">
                        <div class="col-md-4 col-12">
                            <?= the_post_thumbnail('medium-large') ?>
                        </div>
                        <div class="col-md-8 col-12">
                            <h3 class='article-title'><a href="<?= the_permalink() ?>"><?= the_title() ?></a></h3>
                            <p class="article-details">Posted by <?= the_author_posts_link() ?> at <?= the_date() ?></p>
                            <?= the_excerpt() ?>
                        </div>
                    </div>

                    <?php 
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?= get_footer() ?>