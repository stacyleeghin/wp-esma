<?php
   function register_resource() {
       
   register_nav_menu('header-menu',__( 'Header Menu' ));

     //--- Register post types
     $args = array(
        'public'    => true,
        'label'     => 'Services',
    );
    register_post_type( 'service', $args );

    //projects

    $arg = array(
       'public' => true,
       'label' => 'Projects'
       'menu_icon' => 'dashicons-buddicons-buddypress-logo'
    );
    register_post_type('project', $args);

    //--Custom Taxonomy
    $arg = array(
       'label' => 'Type',
       'public' => true,
       'hierarchical' => true,
       'show_in_nav_menu'=> true,
    );
    register_taxonomy

    )


   }
   add_action( 'init', 'register_resource' );
 
?>
