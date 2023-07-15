<?php 

// function my_theme_scripts() {
//     // Enqueue main stylesheet
//     wp_enqueue_style('my-theme-style', get_stylesheet_uri());
//     // Enqueue main JavaScript file
//     wp_enqueue_script('my-theme-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
// }

// add_action('wp_enqueue_scripts', 'my_theme_scripts');


function my_theme_enqueue_scripts() {
    wp_enqueue_script('jquery'); // Enqueue jQuery (if needed)

    // // Enqueue custom JS files
    // wp_enqueue_script('custom-js1', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
    // wp_enqueue_script('custom-js2', get_template_directory_uri() . '/js/plugins.js', array(), '1.0', true);
    wp_enqueue_script('custom-js3', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0', true);
    wp_enqueue_script('custom-js4', get_template_directory_uri() . '/vendor/nice-select/js/jquery.nice-select.min.js', array(), '1.0', true);
    wp_enqueue_script('custom-js5', get_template_directory_uri() . '/vendor/magnific-popup/js/jquery.magnific-popup.min.js', array(), '1.0', true);
    wp_enqueue_script('custom-js6', get_template_directory_uri() . '/vendor//slick/js/slick.min.js', array(), '1.0', true);
    wp_enqueue_script('custom-js7', get_template_directory_uri() . '/vendor/odometer/js/odometer.min.js', array(), '1.0', true);
    wp_enqueue_script('custom-js8', get_template_directory_uri() . '/vendor/images-loaded/imagesloaded.pkgd.min.js', array(), '1.0', true);
    wp_enqueue_script('custom-js9', get_template_directory_uri() . '/vendor/isotope/isotope.pkgd.min.js', array(), '1.0', true);
    wp_enqueue_script('custom-js10', get_template_directory_uri() . '/vendor/gsap/gsap.min.js', array(), '1.0', true);
    wp_enqueue_script('custom-js11', get_template_directory_uri() . '/vendor/gsap/ScrollTrigger.min.js', array(), '1.0', true);
    wp_enqueue_script('custom-js12', get_template_directory_uri() . '/vendor/gsap/ScrollToPlugin.min.js', array(), '1.0', true);
    wp_enqueue_script('custom-js13', get_template_directory_uri() . '/vendor/gsap/ScrollSmoother.min.js', array(), '1.0', true);
    wp_enqueue_script('custom-js14', get_template_directory_uri() . '/vendor/viewport/viewport.jquery.js', array(), '1.0', true);
    wp_enqueue_script('custom-js15', get_template_directory_uri() . '/vendor/wow/wow.min.js', array(), '1.0', true);
    wp_enqueue_script('custom-js16', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
    // wp_enqueue_script('custom-js17', get_template_directory_uri() . '/js/plugins.js', array(), '1.0', true);
    // Add more JS files as needed

}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');


// function my_theme_enqueue_scripts() {
//     // Enqueue custom JS file for the footer
//     wp_enqueue_script('custom-footer-js', get_template_directory_uri() . '/js/custom-footer.js', array('jquery'), '1.0', true);
// }

// add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');



function my_theme_enqueue_styles() {
    // Enqueue custom CSS files
   
    wp_enqueue_style('custom-css2', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0');
    wp_enqueue_style('custom-css3', get_template_directory_uri() . '/vendor/font-awesome/css/all.min.css', array(), '1.0');
    wp_enqueue_style('custom-css4', get_template_directory_uri() . '/vendor/glyphter/css/photodit.css', array(), '1.0');
    wp_enqueue_style('custom-css5', get_template_directory_uri() . '/vendor/nice-select/css/nice-select.css', array(), '1.0');
    wp_enqueue_style('custom-css6', get_template_directory_uri() . '/vendor/magnific-popup/css/magnific-popup.css', array(), '1.0');
    wp_enqueue_style('custom-css6', get_template_directory_uri() . '/vendor/slick/css/slick.css', array(), '1.0');
    wp_enqueue_style('custom-css7', get_template_directory_uri() . '/vendor/odometer/css/odometer.css', array(), '1.0');
    wp_enqueue_style('custom-css8', get_template_directory_uri() . '/vendor/animate/animate.min.css', array(), '1.0');
    wp_enqueue_style('custom-css1', get_template_directory_uri() . '/css/main.css', array(), '1.0');
    // Add more CSS files as needed
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');





?>