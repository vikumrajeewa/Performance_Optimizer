<?php
/*
Plugin Name: Performance Optimizer
Description: Custom performance optimization features.
Version: 1.0
Author: vikum rajeewa 
*/

//step 1 
function performance_optimizer_enqueue_admin_scripts() {
    wp_enqueue_style('performance-optimizer-admin', plugins_url('admin.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'performance_optimizer_enqueue_admin_scripts');

//step 2 

function performance_optimizer_menu_page() {
    add_menu_page(
        'Performance Optimizer',
        'Performance Optimizer',
        'manage_options',
        'performance-optimizer',
        'performance_optimizer_admin_page'
    );
}
add_action('admin_menu', 'performance_optimizer_menu_page');
