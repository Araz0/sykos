<?php 

  function add_theme_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri() .'/style.css', array(), null, 'all' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), null, true);
  }

  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
  add_theme_support('title-tag');

  add_theme_support( 'post-thumbnails' );

  function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');

  // Remove p tags from category description
  remove_filter('term_description','wpautop');
  function register_my_menus(){
    register_nav_menus(
      array(
        'main-menu' => 'Main Menu',
        'footer-right' => 'Footer Right',
        'footer-left' => 'Footer Left'
      )
    );
  }
  add_action('init','register_my_menus');

  add_action( 'phpmailer_init', 'mailer_config', 10, 1);
  function mailer_config(PHPMailer $mailer){
    $mailer->IsSMTP();
    $mailer->Host = "localhost"; // your SMTP server
    $mailer->Port = 25;
    $mailer->SMTPDebug = 2; // write 0 if you don't want to see client/server communication in page
    $mailer->CharSet  = "utf-8";
  }
  function get_id_by_slug($page_slug) {
    $page = get_page_by_path($page_slug);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
  } 

  $role = get_role('editor'); 
  $role->add_cap('edit_theme_options');

  function filter_content_example($content) {
    $content = do_shortcode($content);
    return $content;
  }
  add_filter('the_content', 'filter_content_example');
?>
