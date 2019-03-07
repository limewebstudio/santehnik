<?php
 add_action( 'wp_enqueue_scripts','theme_styles' );

   function theme_styles(){
    	wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css'  );
    	wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout.css'  );
    }





//function mytheme_enqueue_style() {
	//wp_enqueue_style( 'wp-style', get_stylesheet_uri() ); 
	//wp_enqueue_style( 'wp-bootstrap', get_template_directory_uri() . './assets/css/bootstrap.min.css' );
	//wp_enqueue_style( 'wp-mystyle', get_template_directory_uri() . './assets/css/mystyle.css' );
//}
//add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_style' );
 
?>





