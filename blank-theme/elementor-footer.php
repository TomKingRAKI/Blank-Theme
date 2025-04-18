<?php
/**
 * Elementor Custom Footer
 */
get_header();
?>
<footer id="elementor-footer">
    <?php
    // Shortcode dla Elementor Footer
    echo do_shortcode('[elementor-template id="123"]');
    ?>
</footer>
<?php get_footer(); ?>