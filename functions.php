<?php

// use class bootstrap nav walker for fix the nav menu
require_once('classes/bootstrap-nav-walker.php');

// function to load styles css
function load_css_and_js(){

	wp_enqueue_script('jquery');
	wp_enqueue_style('bootstrap-style' , get_template_directory_uri().'/assets/css/bootstrap.css' , false , '1.0' , 'all');
	wp_enqueue_style('main-style' , get_template_directory_uri().'/assets/css/main.css' , false , '1.0' , 'all');
	wp_enqueue_style('fontawesome-style' , get_template_directory_uri().'/assets/css/all.css' , false , '1.0' , 'all');
	wp_enqueue_script('bootstrap-script' , get_template_directory_uri().'/assets/js/bootstrap.js' , 'jquery' , '1.0' , 'true');
	wp_enqueue_script('fontawesome-script' , get_template_directory_uri().'/assets/js/all.js' , 'jquery' , '1.0' , 'true');
	wp_enqueue_script('custom-script' , get_template_directory_uri().'/assets/js/script.js' , 'jquery' , '1.0' , 'true');
}
add_action('wp_enqueue_scripts' , 'load_css_and_js');

// add custom favicon
function load_favicon() { ?>
	<link rel="shortcut icon" href="<?php echo bloginfo('stylesheet_directory') ?>/assets/images/icon.png" >
<?php }
add_action('wp_head', 'load_favicon');

// add theme supports for menus
add_theme_support('menus');
// add theme support for featured image thumbnails
add_theme_support( 'post-thumbnails');
// add theme support for widget
add_theme_support('widgets');

// register sidebars
function my_sidebars(){

    // register page sidebar
    register_sidebar(
            array(
                'name'          => 'Page Sidebar',
                'id'            => 'page-sidebar',
                'before_title'  => '<h4 class="text-success">',
                'after_title'   => '</h4>',
                'before_widget' => '<div style="background-color: #e3f2fd;" class="dev">',
                'after_widget'  => '</div>'
            )
    );

	// register blog sidebar
	register_sidebar(
		array(
			'name'         => 'Blog Sidebar',
			'id'           => 'blog-sidebar',
			'before_title' => '<h4 class="text-success">',
			'after_title'  => '</h4>',
            'before_widget'=> '<ul class="list-group list-group-flush">',
            'after_widget' => '</ul>'
		)
	);
}
add_action('widgets_init' , 'my_sidebars');


// Menus
register_nav_menus(

        array(
                'main-menu' => 'Main Menu Location',
                 'top-right-menu' => 'Right Menu Location',
                 'top-left-menu' => 'Left Menu Location',
                 'footer-menu' =>'Footer Menu Location'
        )

);

// custom images sizes
add_image_size('blog-large',800 , 400 ,true);
add_image_size('blog-small',300 , 200 ,true);



