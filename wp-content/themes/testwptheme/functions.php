<?php

function conor_register_styles(){
    $version = wp_get_theme()->get( "version" );
    wp_enqueue_style("conor-style", get_template_directory_uri() . "/theme-template/style.css", array("conor-bootstrap"), "$version", "all");
    wp_enqueue_style("conor-bootstrap", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), "4.4.1", "all");
    wp_enqueue_style("conor-fontawsome","https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "5.13.0", "all");
}

add_action("wp_enqueue_scripts", "conor_register_styles");

?>