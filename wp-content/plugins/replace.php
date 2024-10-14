<?php
/**
 * Plugin Name: Replace WordPress with Forked Word
 * Plugin URI: https://forkedword.com
 * Description: Replaces all occurrences of "WordPress" with "Forked Word" throughout the system output, excluding user-generated content and license.txt.
 * Version: 1.0
 * Author: ForkedWord Team
 * License: GPL2
 */

// Global function to replace 'WordPress' with 'Forked Word' in system output
function replace_wordpress_in_output($output) {
    // Replace "WordPress" with "Forked Word" in all system-generated output
    return str_replace('WordPress', 'Forked Word', $output);
}

// Apply the filter to key output areas in the system, but avoid user-generated content
add_filter('the_title', 'replace_wordpress_in_output'); // Titles
add_filter('wp_title', 'replace_wordpress_in_output');  // Page titles
add_filter('bloginfo', 'replace_wordpress_in_output');  // Site-wide metadata
add_filter('the_generator', 'replace_wordpress_in_output'); // Meta tags
add_filter('admin_footer_text', 'replace_wordpress_in_output'); // Admin footer
add_filter('widget_text', 'replace_wordpress_in_output'); // Widget text
add_filter('wp_nav_menu_items', 'replace_wordpress_in_output'); // Navigation menus
add_filter('login_message', 'replace_wordpress_in_output'); // Login page messages

// Override wp_mail() to ensure email outputs replace 'WordPress' with 'Forked Word'
function replace_wordpress_in_emails($args) {
    $args['message'] = str_replace('WordPress', 'Forked Word', $args['message']);
    return $args;
}
add_filter('wp_mail', 'replace_wordpress_in_emails');

// Modify admin dashboard header
add_filter('admin_bar_menu', function ($wp_admin_bar) {
    foreach ($wp_admin_bar->get_nodes() as $node) {
        $node->title = str_replace('WordPress', 'Forked Word', $node->title);
        $wp_admin_bar->add_node($node);
    }
}, 999);

// Replace 'WordPress' with 'Forked Word' in the generator tag
function replace_wordpress_in_meta_tag($generator) {
    return str_replace('WordPress', 'Forked Word', $generator);
}
add_filter('the_generator', 'replace_wordpress_in_meta_tag');
