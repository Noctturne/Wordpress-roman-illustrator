<?php

//-- Scripts y Estilos
function roman_scripts_styles(){
    // - NORMALIZE
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    //BOOTSTRAP
    wp_enqueue_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css");
    wp_enqueue_script('bootstrapJS', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", array('jquery'));

    // - GOOGLE FONTS
    wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@400;600;700&display=swap', array(), '1.0.0');

    // - STYLES
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');

    //MASONRY
    wp_enqueue_script('masonryJS', get_template_directory_uri() . '/js/masonry.pkgd.js', array('jquery'));

    //To Top Button
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/topbutton.js', array( 'jquery' ));

    // - SCRIPTS
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ));

}
add_action('wp_enqueue_scripts', 'roman_scripts_styles'); 

// - Imagen destacada
add_theme_support('post-thumbnails');

// - Let WordPress manage the document title.
add_theme_support( 'title-tag' );

//-- Menús de navegación
function roman_menus(){
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'romanillustrator'),
        'social-menu' => __("Social Menu", 'romanillustrator')
    ));
}
add_action('init', 'roman_menus');

// - Filter categories
function filter_projects() {
    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 4;
    $catSlug = $_POST['category'];
  
    $ajaxposts = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => $ppp,
        'category_name' => $catSlug,
        'order' => 'desc',
    ]);
    $response = '';
  
    if($ajaxposts->have_posts()) {
        while($ajaxposts->have_posts()) : $ajaxposts->the_post();
            $response .= get_template_part(  'template-parts/loop', 'blog');
        endwhile;
    } else {
      $response = 'empty';
    }
  
    echo $response;
    exit;
  }
  add_action('wp_ajax_filter_projects', 'filter_projects');
  add_action('wp_ajax_nopriv_filter_projects', 'filter_projects');















 











