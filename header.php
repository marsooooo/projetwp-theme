<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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