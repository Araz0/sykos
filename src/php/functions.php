<?php

function add_theme_scripts()
{
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), null, 'all');
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');
add_theme_support('title-tag');

add_theme_support('post-thumbnails');

function cc_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// Remove p tags from category description
remove_filter('term_description', 'wpautop');
function register_my_menus()
{
  register_nav_menus(
    array(
      'main-menu' => 'Main Menu',
      'footer-right' => 'Footer Right',
      'footer-left' => 'Footer Left'
    )
  );
}
add_action('init', 'register_my_menus');

function get_id_by_slug($page_slug)
{
  $page = get_page_by_path($page_slug);
  if ($page) {
    return $page->ID;
  } else {
    return null;
  }
}

$role = get_role('editor');
$role->add_cap('edit_theme_options');

function filter_content_example($content)
{
  $content = do_shortcode($content);
  return $content;
}
add_filter('the_content', 'filter_content_example');

function new_excerpt_more($output)
{
  return $output . '<p class="section-abposts__post__content__text"><a href="' . get_permalink() . '">' . 'Mehr lesen...' . '</a></p>';
}
add_filter('get_the_excerpt', 'new_excerpt_more');

show_admin_bar(false);

add_theme_support('wp-block-styles');
add_theme_support('align-wide');
add_theme_support('editor-styles');
add_theme_support('responsive-embeds');
