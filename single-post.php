<?php get_header(); 
$pop = get_post_meta(get_the_ID(), 'Population', true);
$cap = get_post_meta(get_the_ID(), 'Capitale', true);
$sup = get_post_meta(get_the_ID(), 'Superficie', true);?>
<echo>test</echo>
<div class="container-post">
    <h1><?php the_title()?></h1>
    <?php if (has_post_thumbnail()) : ?>
        <img src='<?php the_post_thumbnail_url();?>'>
    <?php endif ?> 
    
    <?php the_content(); ?>
    <div class="post-labels">
    <?php
    if (!empty($pop)) {
        echo '<p>Population : ' . esc_html($pop) . '</p>';
    }
    if (!empty($cap)) {
        echo '<p>Capitale : ' . esc_html($cap) . '</p>';
    }
    if (!empty($sup)) {
        echo '<p>Superficie : ' . esc_html($sup) . '</p>';
    }?>
</div>
    
</div>


<?php get_footer(); ?>