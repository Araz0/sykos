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
    <header class="page-hero" style="background-image: url('<?php echo $thumbnail_Link ?>');">
    <?php $dark_nav = false; include 'parts/nav.php'; ?>
    </header>
    <main class="page-contact">
        <h2 class="page__title"><?php echo get_the_title(); ?></h2>

        <section class="section-contact">
            <div class="section-contact__container">
                <form class="section-contact__container__form" action="" method="post">
                    <label for="name">Name:</label>
                    <input name="name" type="text"/>

                    <label for="email">Email:</label>
                    <input name="email" type="email"/>

                    <label for="phone">Telefonnummer:</label>
                    <input name="phone" type="tel"/>

                    <label for="message">Message:</label>
                    <textarea name="message" cols="30" rows="5"></textarea>

                    <button name="submitContact" type="submit" value="Submit">Senden</button>
                </form>
                <div class="section-contact__container__message">
                    <?php echo get_the_content(); ?>
                </div>
            </div>
        </section>
    </main>
    <?php include 'parts/footer.php'; ?>
</body>
<script src="<?php echo get_template_directory_uri().'/js/script.js' ?>"></script>
</html>