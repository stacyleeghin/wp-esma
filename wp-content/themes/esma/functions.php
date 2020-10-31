<?php
   function register_resource() {
       
   register_nav_menu('header-menu',__( 'Header Menu' ));

     //--- Register post types
     $args = array(
        'public'    => true,
        'label'     => 'Services',
    );
    register_post_type( 'service', $args );

   //  //projects animals
    $args = array(
       'public' => true,
       'label'  => 'Project',

    );
    register_post_type( 'project', $args);

    //custom taxonomy bird, dog, cat etc (type)

    $args = array(
       'label' => 'Type',
       'public' => true,
       'hierarchical' => true,
       'show_in_nav_menus' => true,
    );

    register_taxonomy('types', 'project', $arg);

   }
   add_action( 'init', 'register_resource' );
 
?>
