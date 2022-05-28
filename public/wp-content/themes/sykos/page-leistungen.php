<!DOCTYPE html>
<html lang="de">
    <?php include 'parts/head.php'; ?>
<body>
    <?php //wp_body_open();?>
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
    <main class="page">
        <h2 class="page__title"><?php echo get_the_title(); ?></h2>

        <section class="page-post">
            <?php echo get_the_content(); ?>
        </section>
        <section class="section-services">
            <div class="section-services__container">
                <h3>Unser angebot für Sie</h3>
                <div class="section-services__options">
                <?php 
                    $services_uri1 = get_permalink( get_page_by_path( 'privatperson' ) );
                    $services_uri2 = get_permalink( get_page_by_path( 'unternehmen' ) );
                    ?>
                    <a class="section-services__options__entry" href="<?php echo esc_url( $services_uri1 ); ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/media/privatperson.png" alt="privatperson illustration">
                        <span class="link">PRIVATPERSON</span>
                    </a>
                    <span class="section-services__options__seperator"></span>
                    <a class="section-services__options__entry" href="<?php echo esc_url( $services_uri2 ); ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/media/unternehmen.png" alt="unternehmen illustration">
                        <span class="link">UNTERNEHMEN</span>
                    </a>
                </div>
            </div>
        </section>
    </main>
    <?php include 'parts/footer.php'; ?>
</body>
<script src="<?php echo get_template_directory_uri().'/js/script.js' ?>"></script>
</html>