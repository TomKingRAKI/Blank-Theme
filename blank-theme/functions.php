<?php
// Podstawowa konfiguracja motywu
add_action('after_setup_theme', 'blank_elementor_setup');
function blank_elementor_setup() {
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    add_theme_support('align-wide');
    add_theme_support('elementor-page-settings');
    
    // WooCommerce
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}

// Rejestracja widget areas
add_action('widgets_init', 'blank_elementor_widget_areas');
function blank_elementor_widget_areas() {
    register_sidebar([
        'name'          => __('Sidebar', 'blank-elementor'),
        'id'            => 'sidebar-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>'
    ]);
    
    register_sidebar([
        'name'          => __('Footer Widgets', 'blank-elementor'),
        'id'            => 'footer-widgets',
        'before_widget' => '<div class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>'
    ]);
    
    register_sidebar([
        'name'          => __('WooCommerce Sidebar', 'blank-elementor'),
        'id'            => 'woocommerce-sidebar',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>'
    ]);
}

// Skrypty i style
add_action('wp_enqueue_scripts', 'blank_elementor_scripts');
function blank_elementor_scripts() {
    // Główny styl
    wp_enqueue_style('blank-elementor-style', get_stylesheet_uri());
    
    // Własne style CSS
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/custom.css');
    
    // WooCommerce
    if (class_exists('WooCommerce')) {
        wp_enqueue_style('woocommerce-styles', get_template_directory_uri() . '/css/woocommerce.css');
    }
}

// Integracja WooCommerce
if (class_exists('WooCommerce')) {
    require get_template_directory() . '/inc/woocommerce.php';
}

register_nav_menus([
    'elementor-header-menu' => __('Menu Header (Elementor)', 'blank-elementor'),
    'elementor-footer-menu' => __('Menu Footer (Elementor)', 'blank-elementor')
]);

// Aktywacja wsparcia dla Elementor Theme Builder
add_theme_support('elementor-theme-builder');