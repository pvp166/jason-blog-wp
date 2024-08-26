<?php
// Include the custom login API file
require get_template_directory() . '/login-endpoint.php';
require get_template_directory() . '/protected_post-endpoint.php';
require get_template_directory() . '/buy-product.php';

function add_cors_http_header(){
header("Access-Control-Allow-Origin: * ");
}
add_action('init','add_cors_http_header');
