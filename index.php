<?php get_header()?>

    <h1>Les derniers articles</h1>
    
    <?php if (have_posts()): ?>
        <div class="container post-card-container">
            <?php while (have_posts()) : the_post(); ?>
            <div class="post-card">
                <?php if (has_post_thumbnail()): ?>
                    <div class="card-img-container">
                        <img src="<?php the_post_thumbnail_url();?>">
                    </div>
                <?php endif; ?>
                <h3><?php the_title();?></h3>
                <p><?php the_excerpt(); ?></p>
                <div class="btn-container">
                <a href="<?php the_permalink(); ?>" class="permalink-btn">En savoir plus</a>
                </div>
            </div>
            <?php endwhile ?>
        </div>
    <?php endif ?>

<?php get_footer()?>