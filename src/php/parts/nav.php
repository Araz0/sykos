<nav class="navbar">
    <?php 
        if ($dark_nav) {
        ?>
            <a class="navbar__logo" href="/"><img src="<?php echo get_template_directory_uri() ?>/media/lighthouse-symbol.png" alt="abstract lighthouse symbol"></a>
        <?php 
        }else{
        ?>
            <a class="navbar__logo" href="/"><img src="<?php echo get_template_directory_uri() ?>/media/lighthouse-symbol-white.png" alt="abstract lighthouse symbol"></a>
        <?php 
        }
    ?>
    <svg class="navbar__burger_menu" onclick="toggleBurgerMenu()" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 48 37.1" xml:space="preserve">
        <path d="M43.6,7H4.4C3.1,7,2.1,6,2.1,4.7s1-2.3,2.3-2.3h39.3c1.3,0,2.3,1,2.3,2.3S44.9,7,43.6,7z" />
        <path d="M43.6,20.9H4.4c-1.3,0-2.3-1-2.3-2.3c0-1.3,1-2.3,2.3-2.3h39.3c1.3,0,2.3,1,2.3,2.3 C45.9,19.8,44.9,20.9,43.6,20.9z" />
        <path d="M43.6,34.7H4.4c-1.3,0-2.3-1-2.3-2.3c0-1.3,1-2.3,2.3-2.3h39.3c1.3,0,2.3,1,2.3,2.3 C45.9,33.7,44.9,34.7,43.6,34.7z" />
    </svg>
    <ul class="navbar__menu">
        <?php
            //   this is to display a menu with full control over its items.
            $menu_name = 'main-menu';
            $locations = get_nav_menu_locations();
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );

            foreach ( $menuitems as $item ):
                $id = get_post_meta( $item->ID, '_menu_item_object_id', true );
                $page = get_page( $id );
                $link = get_page_link( $id ); ?>
        
                <li><a href="<?php echo $link; ?>"><?php echo $page->post_title; ?></a></li>
        <?php endforeach; ?>
    </ul>

</nav>