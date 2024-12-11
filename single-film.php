<?php get_header(); ?>

<h1><?php the_title() ?></h1>

<div class="container-post flex-container">
    <div>
        <p>Réalisateur : <?php the_field('realisateur') ?></p>
        <?php if(get_field('note')): ?>
            <p>
                <?php 
                $note = get_field('note');
                for($i = 0; $i < 5; $i++) {
                    if($i < $note) {
                        echo '★'; 
                    } else {
                        echo '☆';
                    }
                }
                ?> 
                (<?php echo $note; ?>/5)
            </p>
        <?php endif; ?>
        <?php the_content()?>
    </div>
    <div>
        <img src="<?php the_post_thumbnail_url()?>">
    </div>

</div>

<?php get_footer(); ?>