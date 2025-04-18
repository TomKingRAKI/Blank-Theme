<?php
/*
Template Name: Blank Canvas
*/
get_header('empty'); 
?>

<div class="elementor-canvas">
    <?php
    while(have_posts()): the_post();
        the_content();
    endwhile;
    ?>
</div>

<?php 
get_footer('empty'); 