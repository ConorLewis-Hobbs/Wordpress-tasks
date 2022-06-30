<?php
function dynamic_title(){
//adds dynamic title tag support. Wordpress manages the title tags itself
add_theme_support("title-tag");
add_theme_support("custom-logo");
}

add_action("after_setup_theme", "dynamic_title");
//sets the possible locations for the nav menu. 
function menus(){
    $locations = array(
        "primary" => "desktop primary left sidebar",
        "foorer" => "footer menu items",
    );
    register_nav_menus($locations);
}

add_action("init","menus");


//function links to the syle sheet
function conor_register_styles(){
    //line below pulls version from the style sheet
    $version = wp_get_theme()->get( "version" );
    // Gets the function gets the first part of the path to the css directory, the next part shows the specfic location.
    //the array section is to make sure bootstrap is loaded first since the css relies on bootstrap. Version is the version of css.
    wp_enqueue_style("conor-style", get_template_directory_uri() . "/theme-template/style.css", array("conor-bootstrap"), "$version", "all");
    //external style sheets for the two below
    wp_enqueue_style("conor-bootstrap", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), "4.4.1", "all");
    wp_enqueue_style("conor-fontawsome","https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "5.13.0", "all");
}
//adds the styles and the scripts to the index.php
add_action("wp_enqueue_scripts", "conor_register_styles");

//adds the scripts to index.php
function conor_register_scripts(){

    wp_enqueue_script("conor-jquery", "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), "3.4.1", "true");
    wp_enqueue_script("conor-popper", "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), "16.0", "true");
    wp_enqueue_script("conor-bootstrap", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), "4.4.1", "true");
    //same as css style sheet. make sure the file path is right
    wp_enqueue_script("conor-main", get_template_directory_uri() . "/assets/js/main.js", array(), "1.0", "true");
}

?>