<?php 
require get_template_directory() . '/inc/comments-helper.php';


add_theme_support( 'menus' );
add_theme_support( 'custom-logo');
add_theme_support( 'post-thumbnails' );
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}
function my_excerpt_length($length){
    return 30;
}
add_filter('excerpt_length', 'my_excerpt_length');

function new_excerpt_more( $more ) {
    return "<a href='".get_the_permalink()  ."'> Read More..</a>";
}
add_filter( 'excerpt_more', 'new_excerpt_more');
function themename_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Secondary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-2',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'themename_widgets_init' );
?>
