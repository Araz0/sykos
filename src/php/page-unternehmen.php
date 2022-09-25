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
    <main class="page limit-page-width">
        
        <section class="page-post">
            <h2 class="page__title"><?php echo get_the_title(); ?></h2>
        </section>
        <section class="section-abposts">
            <?php
                $references_query = new WP_Query('order=ASC&category_name=unternehmen');
                if ($references_query->have_posts()):
                while ($references_query->have_posts()) : $references_query->the_post(); 
                    $cite = get_field('cite');
                    $excerpt = get_the_excerpt();
                    $thumbnail_Link = get_template_directory_uri()."/media/home-hero-bk.jpeg";
                    $thumbnaul_alt = "page thumbnail image";
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                        $thumbnail_Link= get_the_post_thumbnail_url();
                        $thumbnaul_alt = get_the_post_thumbnail_caption();
                    }
                ?>
                <article class="section-abposts__post">
                    <a class="section-abposts__post__img" href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_Link; ?>" alt="<?php echo $thumbnaul_alt; ?>"></a>
                    <div class="section-abposts__post__content">
                        <a href="<?php the_permalink(); ?>"><h3 class="section-abposts__post__content__title"><?php the_title(); ?></h3></a>
                        <cite class="section-abposts__post__content__cite"><?php echo $cite; ?></cite>
                        <p class="section-abposts__post__content__text"><?php echo $excerpt; ?></p>
                    </div>
                </article>
                <?php endwhile;
                else: ?>
                <p>Erster Post demnächst...</p>
                <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            
        </section>
    </main>
    <?php include 'parts/footer.php'; ?>
</body>
<script src="<?php echo get_template_directory_uri().'/js/script.js' ?>"></script>
</html>