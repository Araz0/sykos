<!DOCTYPE html>
<html lang="de">
    <?php include 'parts/head.php'; ?>
<body>
    <?php //wp_body_open();?>
    <header class="header-about">
        <?php $dark_nav = true; include 'parts/nav.php'; ?>
    </header>
    <main>
        <h2 class="page-title"><?php echo get_the_title(); ?></h2>
        <section class="section-nameHover-about">
        <?php include 'parts/sykos_header.php'; ?>
        </section>
        <section class="section-bio">
            <div class="section-bio__container">
                <?php 
                $img1_path = get_template_directory_uri()."/media/placeholders/about_img_1.png";
                $img2_path = get_template_directory_uri()."/media/placeholders/about_img_2.png";
                $img3_path = get_template_directory_uri()."/media/placeholders/about_img_3.png";
                if (get_field('about_image_1')) {
                    $img1_path = get_field('about_image_1');
                }
                if (get_field('about_image_2')) {
                    $img2_path = get_field('about_image_2');
                }
                if (get_field('about_image_3')) {
                    $img3_path = get_field('about_image_3');
                }
                ?>
                <img src="<?php echo $img1_path ?>" alt="Tom Sykos image 1" class="section-bio__container__img1">
                <div class="section-bio__container__bio_text">
                    <h2 class="section-bio__container__bio_text__header">
                        Thomas Wieser
                    </h2>
                    <p class="section-bio__container__bio_text__desc">
                        <?php echo get_the_content(); ?>
                    </p>
                </div>
                <img src="<?php echo $img2_path ?>" alt="Tom Sykos image 2" class="section-bio__container__img2">
                <img src="<?php echo $img3_path ?>" alt="Tom Sykos image 3" class="section-bio__container__img3">
            </div>
        </section>
        <span class="seperator"></span>
        <section class="section-team">
                <?php 
                    $coop_title = "Kooperation";
                    $coop_text = "In Kooperation mit folgenden selbständigen Beratern, Trainern und Coaches:";
                    if (get_field('kooperation_title')) {
                        $coop_title = get_field('kooperation_title');
                    }
                    if (get_field('kooperation_text')) {
                        $coop_text = get_field('kooperation_text');
                    }

                ?>
            <h2 class="section-team__header"><?php echo $coop_title; ?></h2>
            <p class="section-team__text"><?php echo $coop_text; ?></p>
            <div class="section-team__members_container">
                <svg class="section-team__members_container__SYKOS_Name" data-name="SYKOS Name" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 628.41 155.38">
                    <path d="M45.7,155.18c-14.53-.85-30.49-4.9-43.43-17.12-3.3-3.12-3.41-6.5-1-10.17.45-.69.78-1.45,1.19-2.16,6.84-11.84,10.08-10.27,18.2-4a53.28,53.28,0,0,0,27.09,11,19.49,19.49,0,0,0,22-20.8c-.46-7.08-5.66-11.5-10.9-14.56-10.35-6-21.48-10.71-32.08-16.34C18.42,76.63,10.92,71.13,5.9,62.72-4.12,46-.79,18.15,19.71,7.53c23.15-12,45.54-8.42,67,4.73,4.82,3,5.18,6.74,2,11.73C81,36.29,81,36.31,68.11,29.81c-7.38-3.73-14.74-7.3-23.42-6.7-7.64.53-13.75,3.65-17.58,10.24-4.17,7.18-1.31,17.74,6.81,22.29C45.66,62.2,57.94,67.78,70,73.83A52.94,52.94,0,0,1,89.32,89.55c13.61,18.37,9,45.5-11.38,57.58C68.25,152.87,60.25,155.08,45.7,155.18Z" transform="translate(0.4 0.2)" />
                    <path d="M164.11,56.29c12.06-17,23.58-33.37,35.39-49.55A10.74,10.74,0,0,1,206.25,3c4.93-.57,10-.22,15-.16s7.42,3.38,4.8,7.83c-3.64,6.21-7.92,12.07-12.08,18-11.94,16.91-24,33.74-35.88,50.7a11.85,11.85,0,0,0-1.91,6.33c-.14,19.83-.07,39.66-.09,59.49,0,6.8-1.23,8-8.16,8-19.37.09-16,.73-16.11-15.82-.15-17,.08-34-.15-51a15.48,15.48,0,0,0-2.5-8.16c-13.64-19.73-27.52-39.3-41.32-58.93a66.69,66.69,0,0,1-5.15-7.78c-2.61-5.13-.52-8.54,5-8.62,4.5-.06,9,.21,13.49-.08,3.82-.25,6,1.41,8.08,4.43C140.64,23.47,152.22,39.58,164.11,56.29Z" transform="translate(0.4 0.2)" />
                    <path d="M270.25,61.33c9.36-9.83,18.65-19.76,28.12-29.49,9.07-9.3,18.3-18.45,27.57-27.54a6.34,6.34,0,0,1,4-1.39A133,133,0,0,1,345.4,3c2.12.19,5.27,1.53,5.84,3.11.74,2,.06,5.32-1.27,7.18-2.38,3.34-5.7,6-8.64,9C331.09,32.5,320.76,42.66,310.63,53c-6.49,6.64-12.68,13.56-19.3,20.68A38.73,38.73,0,0,0,294,77.4c12.11,13.16,24.32,26.22,36.36,39.45q11.5,12.63,22.53,25.71c1.26,1.49,2.17,4.46,1.52,6.06-.77,1.89-3.29,4.12-5.23,4.3a98.74,98.74,0,0,1-17.95.07c-5.63-.51-8-6-11.41-9.5-6.61-6.9-12.53-14.46-18.87-21.61-10.29-11.61-20.68-23.11-31.59-35.28-.14,1.79-.33,3.1-.33,4.41q0,26.24,0,52.48c0,6.88-2.76,9.51-9.58,9.69-15.17.41-16.93-.3-16.82-16.53.28-41.48.09-83,.09-124.45,0-7.78,1.57-9.36,9.16-9.36h8c7.45,0,9.12,1.67,9.14,9.42,0,14.83,0,29.65,0,44.48v3.93Z" transform="translate(0.4 0.2)" />
                    <path d="M437.49.84c42-1.35,77.38,33.78,77.16,77.06S482.64,156,435.27,155c-44.06-1-75.06-33.47-75.28-77.14C359.76,34.49,394.93-.63,437.49.84Zm52.14,76.79c1.25-27.84-24.42-51.52-50.24-52.73-29.16-1.37-53.83,26.27-54.68,50.36-1.1,31.17,24.23,55.41,52.4,55.38C465.88,130.62,490.94,106.31,489.63,77.63Z" transform="translate(0.4 0.2)" />
                    <path d="M578.87-.2c14.42.2,27.06,4.85,39,12.06,4.27,2.58,5.37,6.5,3.09,11a17.15,17.15,0,0,1-1,1.67c-6.44,9.75-7.47,13.19-20.11,5.34-7.33-4.56-15.5-7.42-24.39-6.67-6.82.57-12.88,2.95-16.55,9.19-4.82,8.16-1.92,18.26,7.75,24.19a172.3,172.3,0,0,0,22.5,11.13C600.93,72.78,612,78.87,620.26,89a33.26,33.26,0,0,1,7.64,19.42c.59,11.16-.88,21.44-8.91,30.37a47.35,47.35,0,0,1-28.33,15.33c-20.21,3.42-38.43-1.55-54.8-13.83-5.8-4.36-6.52-6.64-3.12-12.7.16-.29.35-.56.51-.86,6.61-11.84,7.91-12.29,18.75-4.75a66.24,66.24,0,0,0,25.63,10.78c9.2,1.76,22.36-6.56,23.74-15.76,1.23-8.23-3-14.64-9.77-18.67a268.3,268.3,0,0,0-25.36-13c-11.1-5.1-21.71-11-28.33-21.52-13.83-22-4.69-50.54,20.35-59.73C564.77,1.61,572,1.15,578.87-.2Z" transform="translate(0.4 0.2)" />
                </svg>
                <div class="section-team__members_container__member">
                    <img src="<?php echo get_template_directory_uri() ?>/media/team/team-member1.jpg" alt="sykos team member" class="section-team__members_container__member__img">
                    <p class="section-team__members_container__member__name">Magdalena Schusterbauer</p>
                    <span class="section-team__members_container__member__title">Mentalcoach</span>
                </div>
                <div class="section-team__members_container__member">
                    <img src="<?php echo get_template_directory_uri() ?>/media/team/team-member2.jpg" alt="sykos team member" class="section-team__members_container__member__img">
                    <p class="section-team__members_container__member__name">Peter Beingrübel</p>
                    <span class="section-team__members_container__member__title">Unternehmensberater, Coach & Trainer</span>
                </div>
                <div class="section-team__members_container__member">
                    <img src="<?php echo get_template_directory_uri() ?>/media/team/team-member3.jpg" alt="sykos team member" class="section-team__members_container__member__img">
                    <p class="section-team__members_container__member__name">Carina Gloss</p>
                    <span class="section-team__members_container__member__title">Coach und Trainerin für erhöhte Wahrnehmung, Resilienz & Persönlichkeitsentwicklung </span>
                </div>
                <div class="section-team__members_container__member">
                    <img src="<?php echo get_template_directory_uri() ?>/media/team/team-member4.jpg" alt="sykos team member" class="section-team__members_container__member__img">
                    <p class="section-team__members_container__member__name">Markus Kugler</p>
                    <span class="section-team__members_container__member__title">Coach</span>
                </div>
                <div class="section-team__members_container__member">
                    <img src="<?php echo get_template_directory_uri() ?>/media/team/team-member5.jpg" alt="sykos team member" class="section-team__members_container__member__img">
                    <p class="section-team__members_container__member__name">Tanja Lettner</p>
                    <span class="section-team__members_container__member__title">Trainerin</span>
                </div>
            </div>
        </section>
    </main>
    <?php include 'parts/footer.php'; ?>
</body>
<script src="<?php echo get_template_directory_uri().'/js/script.js' ?>"></script>
</html>