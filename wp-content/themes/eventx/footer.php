 <section id="newsletter">
            <div class="container">
                <div class="row text-center">
                    <div class="section-header ">
                        <h3>Subscribe to a newsletter</h3>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6 ">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" name="" id="" class='email-newsletter' placeholder="Your email">
                                <button type="submit" class='button-newsletter'>Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            Copyright &copy; 2018 <?= get_bloginfo('name') ?>
                        </div>
                        <div class="col-md-6">
                            <div class="icons">
                                <?php 
                                $qicon = new WP_Query([
                                    'post_type' => "social-media",
                                ]);
                                if($qicon->have_posts()) {
                                    while($qicon->have_posts()) {
                                        $qicon->the_post(); ?>
                                        <a href="<?= get_field('url') ?>"><span class="dashicons <?= get_field('icon_code') ?>"></span></a>
                                    <?php }
                                }
                                
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="<?= get_stylesheet_directory_uri() ?>/assets/js/countdown.js"></script>
    <script src="<?= get_stylesheet_directory_uri() ?>/assets/js/main.js"></script>
    <script>
        let countdown = new Countdown;
        let date = "<?= get_option('the_date') ?>"
        let time = "<?= get_option('the_time') ?>"
        countdown.until(date+' '+time);
        setInterval(() => {
            document.getElementById('day').innerText = countdown.getRemainingDay();
            document.getElementById('hour').innerText = countdown.getRemainingHours();
            document.getElementById('minute').innerText = countdown.getRemainingMinutes();
            document.getElementById('second').innerText = countdown.getRemainingSeconds();
        }, 1000);
    </script>
</body>
</html>