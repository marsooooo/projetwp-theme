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
                echo '<div class="label"><p class="label-title">' . esc_html($key) . ' :</p><p> ' . esc_html($value[0]) . '</p></div>';
            }
        }
        ?>
    </div>
    <div class="map-container">
        <?php 
        $region_name = get_the_title();
        $google_maps_url = 'https://www.google.com/maps?q=' . urlencode($region_name) .'&output=embed'; 
        ?>
        <iframe 
            src="<?php echo esc_url($google_maps_url); ?>" 
            width="100%" 
            height="450" 
            style="border:0;" 
            loading="lazy" >
        </iframe>
    </div>
</div>

<?php get_footer(); ?>
