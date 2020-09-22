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


?>
