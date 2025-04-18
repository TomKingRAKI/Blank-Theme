<?php
// Custom WooCommerce functions

// Usuń domyślne style WooCommerce
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

// Zmiana wrapperów
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper');
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end');

add_action('woocommerce_before_main_content', 'blank_elementor_woo_wrapper_start');
function blank_elementor_woo_wrapper_start() {
    echo '<main id="primary" class="woocommerce-wrapper">';
}

add_action('woocommerce_after_main_content', 'blank_elementor_woo_wrapper_end');
function blank_elementor_woo_wrapper_end() {
    echo '</main>';
}

// Dodaj sidebar do WooCommerce
add_action('woocommerce_sidebar', 'blank_elementor_woo_sidebar');
function blank_elementor_woo_sidebar() {
    if (is_active_sidebar('woocommerce-sidebar')) {
        echo '<aside class="woocommerce-sidebar">';
        dynamic_sidebar('woocommerce-sidebar');
        echo '</aside>';
    }
}