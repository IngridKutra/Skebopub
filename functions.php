<?php


    function thumbnails(){
        add_theme_support('post-thumbnails');
    }
        add_action('init','thumbnails');

    function add_theme_scripts() {
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' ); 
    }
        add_action('wp_enqueue_scripts', 'add_theme_scripts');

      
        add_filter('body_class','background_images');
        function background_images($classes) {
        
            $background_class = 'background_img';
        
            $classes[] = $background_class;
        
            return $classes;
        }
     

    function local_register_sidebars() {

        register_sidebar(
            array(
                'id' => 'share_buttons',
                'name' => __( 'Share buttons' ),
                'description' => __( 'Share buttons' ),
                'before_widget' => '<div id="" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widgettitle">',
                'after_title' => '</h3>',
            )
            );
    }

    add_action( 'widgets_init', 'local_register_sidebars');

?>
