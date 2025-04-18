<?php get_header(); ?>

<main id="primary" class="content-area">
    <div class="container">
        <?php
        if(have_posts()):
            while(have_posts()): the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>