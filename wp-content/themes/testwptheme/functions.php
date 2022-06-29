<?php
function dynamic_title(){
//adds dynamic title tag support
add_theme_support("title-tag");
}

add_action("after_setup_theme", "dynamic_title");

function menus(){
    $locations = array(
        "primary" => "desktop primary left sidebar",
        "foorer" => "footer menu items",
    );
    register_nav_menus($locations);
}

add_action("init","menus");

function conor_register_styles(){
    $version = wp_get_theme()->get( "version" );
    wp_enqueue_style("conor-style", get_template_directory_uri() . "/theme-template/style.css", array("conor-bootstrap"), "$version", "all");
    wp_enqueue_style("conor-bootstrap", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), "4.4.1", "all");
    wp_enqueue_style("conor-fontawsome","https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "5.13.0", "all");
}

add_action("wp_enqueue_scripts", "conor_register_styles");

function conor_register_scripts(){

    wp_enqueue_script("conor-jquery", "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), "3.4.1", "true");
    wp_enqueue_script("conor-popper", "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), "16.0", "true");
    wp_enqueue_script("conor-bootstrap", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), "4.4.1", "true");
    wp_enqueue_script("conor-main", get_template_directory_uri() . "/assets/js/main.js", array(), "1,0", "true");
}

add_action("wp_enqueue_scripts", "conor_register_scripts");

?>