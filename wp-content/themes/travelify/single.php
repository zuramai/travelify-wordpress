<?= get_header();
the_post()?>
<div class="page">
    <div class="container">
        <div class="page-header">
            <h1 class="page-title"><?= the_title() ?></h1>
            <p class="article-details">Posted by <?= the_author_posts_link() ?> at <?= get_the_date() ?></p>
        </div>
        <div class="single-thumbnail">
            <?= the_post_thumbnail('original') ?>
        </div>
        <div class="page-content">
            <?= the_content() ?>
        </div>

        <?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
    </div>
</div>
<?= get_footer() ?>