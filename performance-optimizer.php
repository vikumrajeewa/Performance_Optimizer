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

// step 3 Admin Page Callback Function

function performance_optimizer_admin_page() {
    if (!current_user_can('manage_options')) {
        return;
    }

    // Handle form submission and settings update here

    ?>
    <div class="wrap">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <form method="post" action="">
            <!-- Add your optimization settings fields here -->
            <?php submit_button('Save Settings'); ?>
        </form>
    </div>
    <?php
}
