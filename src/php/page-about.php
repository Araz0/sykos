<!DOCTYPE html>
<html lang="de">
    <?php include 'parts/head.php'; ?>
<body>
    <?php //wp_body_open();?>
    <header class="header-about">
        <?php $dark_nav = true; include 'parts/nav.php'; ?>
    </header>
    <main>
        <section class="section-nameHover-about">
        <?php include 'parts/sykos_header.php'; ?>
        </section>
        <section class="section-bio">
            <div class="section-bio__container">
                <img src="<?php echo get_template_directory_uri() ?>/media/placeholders/about_img_1.png" alt="Tom Sykos image 1" class="section-bio__container__img1">
                <div class="section-bio__container__bio_text">
                    <h2 class="section-bio__container__bio_text__header">
                        Thomas Weiser
                    </h2>
                    <p class="section-bio__container__bio_text__desc">
                    An About Us page helps your company make a good first impression, and is critical for building customer trust and loyalty. Which is why we've created this free, easy-to-use tool that lets you instantly generate a custom About Us page for your store.
                    </p>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/media/placeholders/about_img_2.png" alt="Tom Sykos image 2" class="section-bio__container__img2">
                <img src="<?php echo get_template_directory_uri() ?>/media/placeholders/about_img_3.png" alt="Tom Sykos image 3" class="section-bio__container__img3">
            </div>
        </section>
        <span class="seperator"></span>
        <section class="section-team">
            <h2 class="section-team__header">Kooperation</h2>
            <p class="section-team__text">In Kooperation mit folgenden selbständigen Beratern, Trainern und Coaches:</p>
            <div class="section-team__members_container">
                <div class="section-team__members_container__member">
                    <img src="<?php echo get_template_directory_uri() ?>/media/placeholders/team-member.png" alt="sykos team member" class="section-team__members_container__member__img">
                    <p class="section-team__members_container__member__name">Tanja Lettner</p>
                    <span class="section-team__members_container__member__title">Trainer</span>
                </div>
            </div>
        </section>
    </main>
    <?php include 'parts/footer.php'; ?>
</body>
<script src="<?php echo get_template_directory_uri().'/js/script.js' ?>"></script>
</html>