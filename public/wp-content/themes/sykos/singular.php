<!DOCTYPE html>
<html lang="de">
    <?php include 'parts/head.php'; ?>
<body>
<!-- <?php wp_body_open();?> -->
    <?php
            $thumbnail_Link = get_template_directory_uri()."/media/home-hero-bk.jpeg";
            $thumbnaul_alt = "page thumbnail image";
            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                $thumbnail_Link= get_the_post_thumbnail_url();
                $thumbnaul_alt = get_the_post_thumbnail_caption();
            }
        ?>
    <header class="page-hero" style="background-image: url('<?php echo $thumbnail_Link ?>');">
    <?php $dark_nav = false; include 'parts/nav.php'; ?>
    </header>
    <main class="page limit-page-width">
        <h2 class="page__title"><?php echo get_the_title(); ?></h2>
        <section class="page-post">
            <?php echo get_the_content(); ?>
            <?php if( get_field('page_shortcode') ): ?>
                <?php echo do_shortcode( get_field('page_shortcode') ) ?>
            <?php endif; ?>
        </section>
    </main>
    <?php include 'parts/footer.php'; ?>
</body>
<script src="<?php echo get_template_directory_uri().'/js/script.js' ?>"></script>
</html>