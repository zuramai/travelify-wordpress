<?php get_header();
the_post() ?>
<div class="detail">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="title">
                    <h3><?= the_title() ?></h3>
                </div>
                <div class="subtitle d-flex justify-content-between">
                    <p class="category">Category: <?= the_category(',') ?></p>
                    <p class="category text-right"><?= the_date() ?></p>
                </div>
                <div class="thumbnail">
                    <img src="<?= the_post_thumbnail_url() ?>" class='thumbnail' alt="" srcset="">
                </div>
                <div class="content">
                    <?= the_content() ?>
                </div>
            </div>
        </div>
    </div>
</div>