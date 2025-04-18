<footer class="site-footer">
<?php if (class_exists('WooCommerce')) : ?>
    <div class="woocommerce-footer-section">
        <?php dynamic_sidebar('woocommerce-footer'); ?>
    </div>
<?php endif; ?>
</footer>

<?php wp_footer(); ?>
</body>
</html>