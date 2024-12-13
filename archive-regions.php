<?php get_header(); ?>

<h1>Listes des regions</h1>
<div class="container regions-card-container">
    <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="regions-card">
                <?php if(has_post_thumbnail()) : ?>
                    <div>
                        <img src="<?php the_post_thumbnail_url()?>">
                    </div>
                <?php endif ?>

                <h2><?php the_title();?></h2>
                <a href="<?php the_permalink()?>" class="permalink-btn">En savoir plus</a>
            </div>
        <?php endwhile ?>
    <?php else :?>
        <p>Aucune région n'a été trouvée</p>    
    <?php endif ?>    
</div>

<?php get_footer(); ?>