<?php 

// include 'taxfunction.php';
include 'metafunction.php';
include 'breadcrumb.php';

//function load_style_script() {
    // wp_enqueue_script('jquery-1', 'http://code.jquery.com/jquery-1.11.0.min.js');
    // wp_enqueue_script('jquery-mig', get_template_directory_uri() . '/js/jquery-migrate-1.2.1.min.js');
    // wp_deregister_script('jquery');
    // wp_enqueue_script( 'jquery' );
    // wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-1.11.0.min.js');
    // wp_enqueue_script('jquery-mig', 'https://code.jquery.com/jquery-migrate-1.2.1.min.js');
    // wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.js');
    // wp_enqueue_script('javascript', get_template_directory_uri() . '/js/js.js');
    // wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
//}


add_action('wp_enqueue_scripts', 'load_style_script');

add_theme_support('post-thumbnails');
// add_theme_support('custom-fields');


add_action( 'after_setup_theme', function() { 
	register_nav_menus( [
        'page_menu' => 'Меню страниц',
        'category_menu' => 'Меню рубрик',
	] );
} );

// register_sidebars(2, array(
//     'name' => 'Виджеты сайдбара %d',
//     'id' => 'sidebar',
//     'description' => 'Здесь размещайте виджеты'
// ));

add_action( 'init', 'manager' );
function manager() {
    register_post_type('manager', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-admin-users',
      'labels' => array(
          'name' => 'Менеджеры',
          'all_items' => 'Все менеджеры',
          'add_new' => 'Добавить нового',
          'add_new_item' => 'Добавить менеджера'         
        )
    ));
}

add_action( 'init', 'installment' );
function installment() {
    register_post_type('installment', array(
      'has_archive' => true,
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-cart',
      'labels' => array(
          'name' => 'Рассрочка',
          'all_items' => 'Все преимущества',
          'add_new' => 'Добавить преимущество',
          'add_new_item' => 'Добавить преимущество'         
        ),
        'has_archive' => true
    ));
}

add_action( 'init', 'reviews' ); 
function reviews() {
    register_post_type('reviews', array(
      'public' => true,
      'supports'  => array ('title', 'editor'),
      'menu_icon' => 'dashicons-format-quote',
      'labels' => array(
          'name' => 'Отзывы',
          'all_items' => 'Все отзывы',
          'add_new' => 'Добавить отзыв',
          'add_new_item' => 'Добавить новый'         
      )
    ));
}

add_action( 'init', 'cities' ); 
function cities() {
    register_post_type('cities', array(
      'public' => true,
      'supports'  => array ('title'),
      'menu_icon' => 'dashicons-location-alt',
      'labels' => array(
          'name' => 'Города',
          'all_items' => 'Все города',
          'add_new' => 'Добавить город',
          'add_new_item' => 'Добавить новый'         
      )
    ));
}

add_action( 'init', 'facade' ); 
function facade() {
    register_post_type('facade', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-format-image',
      'labels' => array(
          'name' => 'Материал фасады',
          'all_items' => 'Все материалы',
          'add_new' => 'Добавить новый',
          'add_new_item' => 'Добавить новый'         
      )
    ));
}

add_action( 'init', 'contact' ); 
function contact() {
    register_post_type('contact', array(
      'public' => true,
      'supports'  => array ('title', 'editor'),
      'menu_icon' => 'dashicons-location-alt',
      'labels' => array(
          'name' => 'Контакты',
          'all_items' => 'Все контакты',
          'add_new' => 'Добавить новый',
          'add_new_item' => 'Добавить контакт'
          
      )
    ));
}

add_action( 'init', 'galery' ); 
function galery() {
    register_post_type('galery', array(
      'public' => true,
      'supports'  => array ('title', 'thumbnail'),
      'menu_icon' => 'dashicons-format-gallery',
      'labels' => array(
          'name' => 'Галерея',
          'all_items' => 'Все публикации',
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить публикацию'
          
      )
    ));
}

?>