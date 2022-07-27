<!DOCTYPE html>
<html lang="de">
    <?php include 'parts/head.php'; ?>
    <?php 
    if(isset($_POST['submitContact'])){
        $to = 'alhamdnai.araz@gmail.com';
        $subject = 'The subject';
        $body = 'The email body content';
        $headers[] = 'From: Me Myself <alhamdnai.araz@gmail.com>';
        // $headers[] = 'Cc: John Q Codex <jqc@wordpress.org>';
        // $headers[] = 'Cc: iluvwp@wordpress.org'; // note you can just use a simple email address
        $headers[] = 'Content-Type: text/html; charset=UTF-8';
        
        wp_mail( $to, $subject, $body, $headers );
    }
    
    ?>
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
    <header class="header-about">
        <?php $dark_nav = true; include 'parts/nav.php'; ?>
    </header>
    <main class="page-contact">
        <h2 class="page__title">Kommen wir ins Gespräch!</h2>
        <?php
            $section_background_Link = get_template_directory_uri()."/media/home-hero-bk.jpeg";
            if (get_field('form_section_background')) {
                $section_background_Link = get_field('form_section_background')['url'];
            }
        ?>
        <section class="section-contact"> <!-- style="background-image: url('<?php echo $section_background_Link ?>');" -->
            <div class="section-contact__container">
                <?php if( get_field('contact_form_shortcode') ): ?>
                    <?php echo do_shortcode( get_field('contact_form_shortcode') ) ?>
                <?php endif; ?>
                <div class="section-contact__container__message">
                    <?php echo get_the_content(); ?>
                    <h3>Kontaktinformationen: </h3>
                    <p>
                        <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 22px;margin-bottom: -4px;margin-right: 8px;">
                            <path d="M20.3296 21.48L22.5696 19.24C22.8713 18.942 23.2531 18.7381 23.6684 18.6529C24.0838 18.5677 24.515 18.6049 24.9096 18.76L27.6396 19.85C28.0385 20.0119 28.3804 20.2882 28.6224 20.6441C28.8645 21 28.9957 21.4196 28.9996 21.85V26.85C28.9973 27.1428 28.9358 27.4321 28.8187 27.7004C28.7016 27.9688 28.5315 28.2107 28.3185 28.4116C28.1055 28.6124 27.854 28.7681 27.5792 28.8692C27.3044 28.9704 27.0121 29.0148 26.7196 29C7.58965 27.81 3.72965 11.61 2.99965 5.40999C2.96576 5.10553 2.99672 4.79734 3.09049 4.5057C3.18427 4.21407 3.33873 3.94559 3.54371 3.71793C3.7487 3.49027 3.99956 3.3086 4.2798 3.18486C4.56004 3.06112 4.86331 2.99812 5.16965 3H9.99965C10.4307 3.00127 10.8514 3.13146 11.2078 3.37382C11.5643 3.61619 11.84 3.95963 11.9996 4.36L13.0896 7.09C13.2499 7.48306 13.2908 7.91464 13.2072 8.33081C13.1236 8.74698 12.9192 9.12929 12.6196 9.43L10.3796 11.67C10.3796 11.67 11.6696 20.4 20.3296 21.48Z" fill="white"></path>
                        </svg>
                        +43 664 144 57 68
                    </p>
                    <p>
                        <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.3297 6.00001C32.1933 5.98596 32.056 5.98596 31.9196 6.00001H3.91965C3.74019 6.00277 3.56193 6.02968 3.38965 6.08001L17.8396 20.47L32.3297 6.00001Z" fill="white"/>
                            <path d="M33.8097 7.39001L19.2497 21.89C18.875 22.2625 18.3681 22.4716 17.8397 22.4716C17.3113 22.4716 16.8044 22.2625 16.4297 21.89L1.99969 7.50001C1.95533 7.66306 1.93181 7.83106 1.92969 8.00001V28C1.92969 28.5304 2.1404 29.0392 2.51547 29.4142C2.89055 29.7893 3.39925 30 3.92969 30H31.9297C32.4601 30 32.9688 29.7893 33.3439 29.4142C33.719 29.0392 33.9297 28.5304 33.9297 28V8.00001C33.9217 7.79167 33.8812 7.58585 33.8097 7.39001V7.39001ZM5.29969 28H3.90969V26.57L11.1797 19.36L12.5897 20.77L5.29969 28ZM31.9097 28H30.5097L23.2197 20.77L24.6297 19.36L31.8997 26.57L31.9097 28Z" fill="white"/>
                        </svg>
                        office@sykos.net
                    </p>
                </div>
            </div>
        </section>
    </main>
    <?php include 'parts/footer.php'; ?>
</body>
<script src="<?php echo get_template_directory_uri().'/js/script.js' ?>"></script>
</html>