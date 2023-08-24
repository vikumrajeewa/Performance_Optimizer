<?php
/*
Plugin Name: Performance Optimizer
Description: Custom performance optimization features.
Version: 1.0
Author: vikum rajeewa 
*/

function performance_optimizer_enqueue_admin_scripts() {
    wp_enqueue_style('performance-optimizer-admin', plugins_url('admin.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'performance_optimizer_enqueue_admin_scripts');

