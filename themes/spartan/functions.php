<?php
    
    // Add RSS links to <head> section
    automatic_feed_links();

    // A.1.0.5. Wordpress Menu

    register_nav_menus( array(  
    'primary' => __( 'Primary Navigation', 'spartan' )
    ) );

    // A.1.0.5. Wordpress Menu

    // A.1.0.6. Wordpress Stuff
    
    add_theme_support( 'post-thumbnails' ); 

// A.2 CUSTOM CONTENT TYPES ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

    // A.2.1. FIXTURES ---------------------------------------------------------------------------------------------

    function fixtures() {
      $labels = array(
        'Title'              => _x( 'Fixtures', 'post type general name' ),
        'singular_name'      => _x( 'Fixture', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'Fixture' ),
        'add_new_item'       => __( 'Add New Fixture' ),
        'edit_item'          => __( 'Edit Fixture' ),
        'new_item'           => __( 'New Fixture' ),
        'all_items'          => __( 'All Fixtures' ),
        'view_item'          => __( 'View Fixture' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Fixtures'
      );

      $args = array(
        'labels'         => $labels,
        'description'   => 'A list of Fixtures',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'taxonomies', 'categories', 'media', 'content' ),
        'has_archive'   => true,

      );
        
      register_post_type( 'fixtures', $args ); 
    }

    add_action( 'init', 'fixtures' );

    // A.2.1. End --------------------------------------------------------------------------------------------------

    // A.2.1. RESULTS ---------------------------------------------------------------------------------------------

    function events() {
      $labels = array(
        'Title'              => _x( 'Events', 'post type general name' ),
        'singular_name'      => _x( 'Event', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'Event' ),
        'add_new_item'       => __( 'Add New Event' ),
        'edit_item'          => __( 'Edit Event' ),
        'new_item'           => __( 'New Event' ),
        'all_items'          => __( 'All Events' ),
        'view_item'          => __( 'View Event' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Events'
      );

      $args = array(
        'labels'         => $labels,
        'description'   => 'A list of Events',
        'public'        => true,
        'menu_position' => 7,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'taxonomies', 'categories', 'media', 'content' ),
        'has_archive'   => true,

      );
        
      register_post_type( 'events', $args ); 
    }

    add_action( 'init', 'events' );

    // A.2.1. End --------------------------------------------------------------------------------------------------

// A.2 END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// A.3 TEMPLATE CUSTOMISATION +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

	// A.1.0.1. REGISTER SIDEBAR

	function social_sidebar_widgets_init() {

		register_sidebar( array(
			'name' => 'social sidebar widget',
			'id' => 'social_sidebar',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="rounded">',
			'after_title' => '</h2>',
		) );
	}

	add_action( 'widgets_init', 'social_sidebar_widgets_init' );

	// A.1.0.1. END

	// A.1.0.2. Twitter Widget
		
	function arphabet_widgets_init() {

		register_sidebar( array(
			'name' => 'twitter widget',
			'id' => 'twitter',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="rounded">',
			'after_title' => '</h2>',
		) );
	}

	add_action( 'widgets_init', 'arphabet_widgets_init' );

	// A.1.0.2. Twitter Widget

// A.3 END ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    
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