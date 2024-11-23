<?php //without end tag


//theme Support

add_theme_support( 'post-thumbnails' );



function broxy_enqueue_stylesheet(){

     // CSS Bootstrap
wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
// JS Bootstrap
wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    

     wp_enqueue_style('broxy-stylesheet',get_stylesheet_uri());
     wp_style_add_data('broxy-stylesheet','rtl','replace');
}
add_action('wp_enqueue_scripts','broxy_enqueue_stylesheet');



function broxy_register_menues(){
     
     register_nav_menus(array('main-menu'=>'Main Menu'));
}
add_action('init','broxy_register_menues');

function broxy_register_widgets(){

     $sidebar=array(
          'name'=>'Sidebar',
          'id'=>'sidebar',
          'before_widget'=>'<div id="%1$s" class="widget card broxy-widget %2$s">',
          'after_widget'=>'</div>',
          'before_title'=>'<h4>',
          'after_title'=>'</h4>'
     );
    register_sidebar($sidebar);



     $footer1=array(
          'name'=>'Footer Column 1',
          'id'=>'footer1',
          'before_widget'=>'<div id="%1$s" class="widget broxy-widget %2$s">',
          'after_widget'=>'</div>',
          'before_title'=>'<h4>',
          'after_title'=>'</h4>'
     );
     register_sidebar($footer1);

     $footer2=array(
          'name'=>'Footer Column 2',
          'id'=>'footer2',
          'before_widget'=>'<div id="%1$s" class="widget broxy-widget %2$s">',
          'after_widget'=>'</div>',
          'before_title'=>'<h4>',
          'after_title'=>'</h4>'
     );
     register_sidebar($footer2);


     $footer3=array(
          'name'=>'Footer Column 3',
          'id'=>'footer3',
          'before_widget'=>'<div id="%1$s" class="widget broxy-widget %2$s">',
          'after_widget'=>'</div>',
          'before_title'=>'<h4>',
          'after_title'=>'</h4>'
     );
     register_sidebar($footer3);
}
add_action('widgets_init','broxy_register_widgets');