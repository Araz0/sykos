<!DOCTYPE html>
<html lang="de">
<?php include 'parts/head.php'; ?>

<body>
    <!-- <?php wp_body_open(); ?> -->

    <header class="hero-home">
        <?php $dark_nav = false;
        include 'parts/nav.php'; ?>
        <img class="hero-home__logo" src="<?php echo get_template_directory_uri() ?>/media/SYKOS-logo-RGB-white.png" alt="SYKOS logo RGB white">
        <p class="hero-home__cite">Sie können die hohen Wellen des Meeres nicht ändern, so sehr Sie es versuchen.
            <br>Zielführender ist, zu lernen, wie man in schwierigen Situationen navigiert.
        </p>
    </header>
    <main>
        <section class="section-intro">
            <h2>Herzlich willkommen in der Welt von SYKOS</h2>
            <p>Ihre Projekte sind einer unruhigen See mit unerwartet hohen Wellen ausgesetzt? <br>In Zeiten tiefgreifender Veränderungen sind wesentliche Fertigkeiten hilfreich, um Lösungen zu finden und definierte Ziele zu erreichen.</p>
        </section>
        <section class="section-mission">
            <div class="section-mission__container">
                <h3>Unsere Mission</h3>
                <img src="<?php echo get_template_directory_uri() ?>/media/lighthouse-symbol.png" alt="abstract lighthouse symbol">
                <p>Wir begleiten Sie auf Ihrem Weg, und Sie bleiben auf Kurs.
                    <br>SYKOS ist zur Stelle, um in bewegten Zeiten anzupacken, wenn sich Hindernisse in den Weg stellen.
                    <br>Wir trainieren Sie, damit Sie auch unter Druck erfolgreich performen.
                </p>
            </div>
        </section>
        <section class="section-services">
            <div class="section-services__container">
                <h3>Unser Angebot für Sie</h3>
                <div class="section-services__options">
                    <?php
                    $services_uri1 = get_permalink(get_page_by_path('privatperson'));
                    $services_uri2 = get_permalink(get_page_by_path('unternehmen'));
                    ?>
                    <a class="section-services__options__entry" href="<?php echo esc_url($services_uri1); ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/media/privatperson.png" alt="privatperson illustration">
                        <span class="link">PRIVATPERSON</span>
                    </a>
                    <span class="section-services__options__seperator"></span>
                    <a class="section-services__options__entry" href="<?php echo esc_url($services_uri2); ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/media/unternehmen.png" alt="unternehmen illustration">
                        <span class="link">UNTERNEHMEN</span>
                    </a>
                </div>
            </div>
        </section>
        <section class="section-nameHover-home">
            <h3>Die vier Grundsäulen von</h3>
            <?php include 'parts/sykos_header.php'; ?>
            <h3>Ihr Partner auf dem Weg zum Erfolg. </h3>
        </section>
        <?php if (get_field('testimonials_shortcode')) : ?>
            <section class="section-testomonials">
                <?php echo do_shortcode(get_field('testimonials_shortcode')) ?>
                <!-- The dots/circles -->
                <!-- <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div> -->
            </section>
            <span class="seperator"></span>
        <?php endif; ?>

        <section class="section-inspiration">
            <div class="section-inspiration__story">
                <h4>Inspiring success</h4>
                <img src="<?php echo get_template_directory_uri() ?>/media/Podcasting.png" alt="illustration 2 personen on radio air">
                <div class="section-inspiration__story__desc">
                    <p>Impulse sind ein notwendiges Instrument für Weiterentwicklung. Sie geben neuen Denkansätzen genügend Raum und erleichtern eingefahrene Wege zu verlassen. In unserer Podcast-Reihe bieten wir Ihnen regelmäßig Inspiration. Wir interviewen Menschen, die trotz starkem Gegenwind, nahe dem Kentern, den Weg zurück auf Kurs geschafft haben. <br>Neugierig geworden? Nehmen Sie sich Zeit und lassen Sie sich inspirieren…
                    </p>
                    <div class="section-inspiration__story__links">
                        <a href="#" target="_blank"><?php include 'parts/socials/spotify.svg'; ?></a>
                        <a href="#" target="_blank"><?php include 'parts/socials/youtube.svg'; ?></a>
                        <a href="#" target="_blank"><?php include 'parts/socials/apple-music.svg'; ?></a>
                    </div>
                </div>
            </div>
            <div class="section-inspiration__story">
                <h4>Daily inspiration</h4>
                <img src="<?php echo get_template_directory_uri() ?>/media/Co-Founders.png" alt="illustration 2 handshaking on an idea">
                <div class="section-inspiration__story__desc">
                    <p>Profitieren Sie von neuen Perspektiven, überdenken Sie eingefahrene Denk- und Handlungsmuster. Holen Sie sich Ihre regelmäßige Motivation aus der SYKOS-Welt.<br>Folgen Sie uns auf:
                    </p>
                    <div class="section-inspiration__story__links">
                        <a href="https://mobile.twitter.com/s_y_k_o_s" target="_blank"><?php include 'parts/socials/twitter.svg'; ?></a>
                        <a href="https://www.instagram.com/tom.sykos/" target="_blank"><?php include 'parts/socials/instagram.svg'; ?></a>
                        <a href="https://www.facebook.com/SYKOS-100878469016042" target="_blank"><?php include 'parts/socials/facebook.svg'; ?></a>
                        <a href="https://www.linkedin.com/in/thomas-wieser-8ba8a515a/" target="_blank"><?php include 'parts/socials/linked-in.svg'; ?></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'parts/footer.php'; ?>
</body>
<script src="<?php echo get_template_directory_uri() . '/js/script.js' ?>"></script>

</html>