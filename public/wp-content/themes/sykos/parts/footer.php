<footer class="footer">
    <img class="footer__logo" src="<?php echo get_template_directory_uri() ?>/media/SYKOS-logo-RGB-white.png" alt="SYKOS logo RGB white">
    <ul class="footer__menu-pages">
        <?php
        //   this is to display a menu with full control over its items.
        $menu_name = 'footer-left';
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menuitems = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));

        foreach ($menuitems as $item) :
            $id = get_post_meta($item->ID, '_menu_item_object_id', true);
            $page = get_page($id);
            $link = get_page_link($id); ?>

            <li><a href="<?php echo $link; ?>"><?php echo $page->post_title; ?></a></li>
        <?php endforeach; ?>
    </ul>
    <div class="footer__menu-right">
        <ul>
            <?php
            //   this is to display a menu with full control over its items.
            $menu_name = 'footer-right';
            $locations = get_nav_menu_locations();
            $menu = wp_get_nav_menu_object($locations[$menu_name]);
            $menuitems = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));

            foreach ($menuitems as $item) :
                $id = get_post_meta($item->ID, '_menu_item_object_id', true);
                $page = get_page($id);
                $link = get_page_link($id); ?>

                <li><a href="<?php echo $link; ?>"><?php echo $page->post_title; ?></a></li>
            <?php endforeach; ?>

        </ul>
        <div class="footer__socials">
            <a href="https://mobile.twitter.com/s_y_k_o_s" target="_blank"><?php include 'socials/twitter.svg'; ?></a>
            <a href="https://www.instagram.com/tom.sykos/" target="_blank"><?php include 'socials/instagram.svg'; ?></a>
            <a href="https://www.facebook.com/SYKOS-100878469016042" target="_blank"><?php include 'socials/facebook.svg'; ?></a>
            <a href="https://www.linkedin.com/in/thomas-wieser-8ba8a515a/" target="_blank"><?php include 'socials/linked-in.svg'; ?></a>
            <!-- <br> -->
            <!-- <a href="#" target="_blank"><?php include 'socials/spotify.svg'; ?></a> -->
            <!-- <a href="#" target="_blank"><?php include 'socials/youtube.svg'; ?></a> -->
            <!-- <a href="#" target="_blank"><?php include 'socials/apple-music.svg'; ?></a> -->
        </div>
    </div>
    <?php
    wp_footer();
    ?>
</footer>