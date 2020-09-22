<?= get_header() ?>
<div class="page">
    <div class="container">
        <div class="page-header">
            <h1 class="page-title"><?= the_title() ?></h1>
        </div>
        <div class="page-content">
            <?= the_content() ?>
        </div>
    </div>
</div>
<?= get_footer() ?>