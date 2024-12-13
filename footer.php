    <footer>
        <div class="container flex-container">
            <div>
                <a href="<?php echo home_url("/"); ?>">
                    <?php if (has_custom_logo()):?>
                        <div class="footer-logo">
                        <?php the_custom_logo();?>
                        </div>
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
        </div>
    </footer>
    <?php wp_footer() ?>
</body>
</html>