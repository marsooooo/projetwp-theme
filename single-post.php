<?php get_header(); ?>

<div class="container-post">
    <h1><?php the_title()?></h1>
    <?php if (has_post_thumbnail()) : ?>
        <img src='<?php the_post_thumbnail_url();?>'>
    <?php endif ?> 
    
    <?php the_content(); ?>
</div>


<?php get_footer(); ?>