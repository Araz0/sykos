<!DOCTYPE html>
<html lang="en">
    <?php include 'parts/head.php'; ?>
<body>
    <?php //wp_body_open();?>
    <header class="hero-home">
        <nav class="navbar">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Philosophie</a></li>
                <li><a href="">SYKOS</a></li>
                <li><a href="">Kooperation</a></li>
                <li><a href="">Termine</a></li>
                <li><a href="">Kontakt</a></li>
            </ul>
        </nav>
        <img class="hero-home__logo" src="<?php echo get_template_directory_uri() ?>/media/SYKOS-logo-RGB-white.png" alt="SYKOS-logo-RGB-white">
        <cite class="hero-home__cite">Sie können die hohen Wellen des Meeres nicht ändern, so sehr Sie es versuchen. Zielführender ist, zu lernen, wie man in schwierigen Situationen navigiert</cite>
    </header>
    <main>
        <section class="section-intro">
            <h2>Herzlich willkommen in der Welt von SYKOS</h2>
            <p>Ihre Projekte sind einer unruhigen See mit unerwartet hohen Wellen ausgesetzt? <br>In Zeiten tiefgreifender Veränderungen sind wesentliche Fertigkeiten hilfreich, um Lösungen zu finden und definierte Ziele zu erreichen.</p>
        </section>
        <section class="section-mission">
            <h3>Unsere Mission</h3>
            <p>Wir begleiten Sie auf Ihrem Weg, und Sie bleiben auf Kurs. SYKOS ist zur Stelle, um in bewegten Zeiten anzupacken, wenn sich Hindernisse in den Weg stellen. Wir trainieren Sie, damit Sie auch unter Druck erfolgreich performen.</p>
        </section>
    </main>
    <?php include 'parts/footer.php'; ?>
</body>
<script src="<?php echo get_template_directory_uri().'/js/script.js' ?>"></script>
</html>