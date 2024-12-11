<?php

require_once('options/apparence.php');

// Ajouter des options à notre thème
function montheme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'montheme_support');


function montheme_inject_styles(){
    ?>
        <style>
            header{
                background-color: <?php echo get_theme_mod('header-color')?>;
            }
            footer{
                background-color: <?php echo get_theme_mod('footer-color')?>;
            }
        </style>

    <?php
}
add_action('wp_head', 'montheme_inject_styles');


//  Fonction pour mettre notre feuille CSS dans la queue des scripts
 function theme_style(){
    wp_enqueue_style('theme_style', get_stylesheet_uri());
 }

 add_action('wp_enqueue_scripts', 'theme_style');


// Fonction qui permet de créer un Shortcode qui a pour but d'afficher le nom de l'auteur
function shortcode_auteur($atts){
    $atts=shortcode_atts(array(
        'personne' => 'Jean'
    ), $atts);

    return "<p>L'article est rédigé par " . esc_html($atts['personne']) . "</p>";
}

add_shortcode('auteur', 'shortcode_auteur');

// Module vidéo youtube

function video_module($atts){
    $atts=shortcode_atts(array(
        'id' => 'jNQXAC9IVRw'
    ), $atts);

    return "<iframe width='560' height='315' src='https://www.youtube.com/embed/".esc_html($atts['id']) ."' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' referrerpolicy='strict-origin-when-cross-origin' allowfullscreen></iframe>";
}

add_shortcode('yt', 'video_module');


?>