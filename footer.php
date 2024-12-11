    <footer>
        <div class="container flex-container">
            <div>
                <a href="<?php echo home_url("/"); ?>">
                    <?php if (has_custom_logo()):?>
                        <?php the_custom_logo();?>
                    <?php else: ?>
                        <h2><?php bloginfo('name'); ?></h2>    
                    <?php endif; ?>
                </a>
            </div>
            <?php wp_nav_menu([
                'theme_location' => 'footer',
                'container' => 'false'
            ]);
            ?>
            <ul>
                <?php if(get_theme_mod('facebook-link')): ?>
                    <li><a href="<?php echo get_theme_mod('facebook-link'); ?>">Facebook</a></li>
                <?php endif ?> 
                <?php if(get_theme_mod('instagram-link')): ?>
                    <li><a href="<?php echo get_theme_mod('instagram-link'); ?>">Instagram</a></li>
                <?php endif ?>
                <?php if(get_theme_mod('twitter-link')): ?>
                    <li><a href="<?php echo get_theme_mod('twitter-link'); ?>">Twitter</a></li>
                <?php endif ?>   
            </ul>
        </div>
    </footer>
    <?php wp_footer() ?>
</body>
</html>