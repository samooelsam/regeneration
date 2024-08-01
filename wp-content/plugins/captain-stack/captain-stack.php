<?php
/**
 * Plugin Name: Captain Stack
 * Plugin URI: https://contentcaptain.io
 * Description: Inserts a Captain stack JavaScript code into the header of each blog post. Allows enabling or disabling on a per-post basis.
 * Version: 1.2
 * Author: Denys Kravchenko
 * Author URI: https://contentcaptain.io
 */

// Hook for adding admin menus
add_action('admin_menu', 'growth_js_header_plugin_menu');

// Action for adding meta box
add_action('add_meta_boxes', 'growth_js_header_meta_box_add');

// Action on saving post
add_action('save_post', 'growth_js_header_save_postdata');

// Hook for adding the JavaScript to the header
add_action('wp_head', 'growth_js_header_inject_js');

// Function to add a meta box
function growth_js_header_meta_box_add() {
    add_meta_box('custom-js-header', 'Captain JS Header Settings', 'growth_js_header_meta_box_cb', 'post', 'side', 'high');
}

// Callback function to output the meta box HTML
function growth_js_header_meta_box_cb($post) {
    // Retrieve the current value of our custom field
    $value = get_post_meta($post->ID, '_growth_js_header_disable', true);
    ?>
    <p>
        <label for="growth_js_header_disable">Disable Captain Stack:</label>
        <input type="checkbox" name="growth_js_header_disable" id="growth_js_header_disable" value="yes" <?php checked($value, 'yes'); ?> />
    </p>
    <?php
}

// Save the meta box data
function growth_js_header_save_postdata($post_id) {
    // Check if our nonce is set and verify it.
    if (!isset($_POST['growth_js_header_meta_box_nonce']) || !wp_verify_nonce($_POST['growth_js_header_meta_box_nonce'], 'growth_js_header_save_postdata')) {
        return;
    }

    // Check if the current user has permission to edit the post.
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save or delete the meta value
    if (isset($_POST['growth_js_header_disable']) && $_POST['growth_js_header_disable'] == 'yes') {
        update_post_meta($post_id, '_growth_js_header_disable', 'yes');
    } else {
        delete_post_meta($post_id, '_growth_js_header_disable');
    }
}

// Function to inject JavaScript into the header
function growth_js_header_inject_js() {
    if (is_single()) {
        global $post;
        // Check if the custom JS should be injected for this post
        if (get_post_meta($post->ID, '_growth_js_header_disable', true) != 'yes') {
            echo '<script defer="" src="https://a.mmin.io/m/v3.min.js"></script>' . "\n";
        }
    }
}

// Function to add the settings menu
function growth_js_header_plugin_menu() {
    // Create a new top-level menu
    add_menu_page('Custom JS Header Settings', 'Custom JS Header', 'administrator', __FILE__, 'growth_js_header_plugin_settings_page', 'dashicons-admin-generic');
}

// Function to display the settings page
function growth_js_header_plugin_settings_page() {
    ?>
    <div class="wrap">
        <h2>Custom JS Header</h2>
        <p>Settings for the Custom JS Header plugin.</p>
    </div>
    <?php
}
?>