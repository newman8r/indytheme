<?php
wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css',false,'1.1','all');


function themename_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Front page top left', 'The Indy V1' ),
        'id'            => 'primary',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Bottom of Article', 'The Indy V1' ),
        'id'            => 'article-bottom',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'themename_widgets_init' );

?>
