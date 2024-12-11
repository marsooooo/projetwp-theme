<?php get_header(); ?>

<h1>Listes des films</h1>
<div class="container film-container">
    <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="film-card">
                <?php if(has_post_thumbnail()) : ?>
                    <div>
                        <img src="<?php the_post_thumbnail_url()?>">
                    </div>
                <?php endif ?>

                <h2><?php the_title();?></h2>
                <?php if(get_field('realisateur')) : ?>
                    <p>Réalisateur : <?php echo the_field('realisateur')?></p>
                <?php endif ?> 
                <a href="<?php the_permalink()?>" class="permalink-btn">En savoir plus</a>
            </div>
        <?php endwhile ?>
    <?php else :?>
        <p>Aucun film n'a été trouvé</p>    
    <?php endif ?>    
</div>

<?php get_footer(); ?>