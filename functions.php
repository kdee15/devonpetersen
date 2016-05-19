<?php
    
    // Add RSS links to <head> section
    automatic_feed_links();



// A.2 CUSTOM CONTENT TYPES ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

    // A.2.1. PROJECTS ---------------------------------------------------------------------------------------------

    function artists() {
      $labels = array(
        'Title'              => _x( 'Artists', 'post type general name' ),
        'singular_name'      => _x( 'Artist', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'Artist' ),
        'add_new_item'       => __( 'Add New Artist' ),
        'edit_item'          => __( 'Edit Artist' ),
        'new_item'           => __( 'New Artist' ),
        'all_items'          => __( 'All Artists' ),
        'view_item'          => __( 'View Artist' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Artists'
      );

      $args = array(
        'labels'         => $labels,
        'description'   => 'A list of Artists',
        'public'        => true,
        'menu_position' => 4,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'taxonomies', 'categories', 'media', 'content' ),
        'has_archive'   => true,

      );
        
      register_post_type( 'artists', $args ); 
    }

    add_action( 'init', 'artists' );

    // A.2.1. End --------------------------------------------------------------------------------------------------

// A.2 END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++





    
    // Load jQuery
    if ( !is_admin() ) {
       wp_deregister_script('jquery');
       wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
       wp_enqueue_script('jquery');
    }
    
    // Clean up the <head>
    function removeHeadLinks() {
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => 'Sidebar Widgets',
            'id'   => 'sidebar-widgets',
            'description'   => 'These are widgets for the sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

?>