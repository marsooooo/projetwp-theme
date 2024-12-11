<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body>
    <header>
        
        <nav class="container flex-container">
            <div class="header-logo">
                <a href="<?php echo home_url("/"); ?>">
                    <?php if (has_custom_logo()):?>
                        <?php the_custom_logo();?>
                    <?php else: ?>
                        <h2><?php bloginfo('name'); ?></h2>    
                    <?php endif; ?>
                </a>
            </div>
            <?php
                wp_nav_menu([
                    'theme_location' => 'header',
                    'container' => 'false',
                    'menu_class' => 'header-nav flex-container'
                ]);
            ?>
        </nav>
    </header>