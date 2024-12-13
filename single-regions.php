<?php get_header(); ?>

<div class="regions-container">
    <h1><?php the_title(); ?></h1>
    <?php if (has_post_thumbnail()) : ?>
        <div class="thumb-container">
        <img src='<?php the_post_thumbnail_url(); ?>' class="single-thumb">
        </div>
    <?php endif; ?>

    <?php the_content(); ?>

    <div class="regions-labels">
        <?php
        $custom_fields = get_post_meta(get_the_ID());

        foreach ($custom_fields as $key => $value) {
            if (!empty($value[0]) && substr($key, 0, 1) !== '_') {
                echo '<p>' . esc_html($key) . ' : ' . esc_html($value[0]) . '</p>';
            }
        }
        ?>
    </div>
</div>

<?php get_footer(); ?>
