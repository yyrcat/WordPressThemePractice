<?php
    functions yyr_theme_styles(){
    wp_enqueue_style('foundation_css',get_template_diractory_uri().'/css/foundations.css');
     wp_enqueue_style('normalize_css',get_template_diractory_uri().'/css/normalize.css');
     wp_enqueue_style('normalize_css','http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic');
    wp_equeue_style('main_css',get_template_directory_uri.'/style.css');
    }
add_action('wp_enqueue_scripts'.'yyr_theme_styles');

function yyr_theme_js(){
    wp_enqueue_script('modernizr_js',get_template_uri().'/js/modernizr.js','','',false);
//倒数第三个参数is an array of dependents,which are dependent on jQuery.倒数第二个是版本号，最后一个是true/false,whether want to put this in the footer.
 wp_enqueue_script('foundation_js',get_template_uri().'/js/foundation.js','array('jquery')','',true);
 wp_enqueue_script('main_js',get_template_uri().'/js/modernizr.js','array('jquery','foundation_js')','',true);
add_action('wp_enqueue_script','yyr_theme_js');
}
?>