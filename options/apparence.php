<?php

add_action('customize_register', function(WP_Customize_Manager $manager){

    $manager->add_section('montheme_social',[
        'title'=> 'Liens des réseaux sociaux',
    ]);

    $manager->add_setting('facebook-link', [
        'default' => ""
    ]);

    $manager->add_control(new WP_Customize_Control($manager, 'facebook-link', [
        'label' => 'Lien Facebook',
        'section' => 'montheme_social'
    ]));

    $manager->add_setting('instagram-link', [
        'default' => ""
    ]);

    $manager->add_control(new WP_Customize_Control($manager, 'instagram-link', [
        'label' => 'Lien Instagram',
        'section' => 'montheme_social'
    ]));

    $manager->add_setting('twitter-link', [
        'default' => ""
    ]);

    $manager->add_control(new WP_Customize_Control($manager, 'twitter-link', [
        'label' => 'Lien Twitter',
        'section' => 'montheme_social'
    ]));


    $manager->add_section('montheme_colors',[
        'title' => 'Couleurs du thème',
    ]);

    $manager->add_setting('header-color',[
        'default' => '#D4D4D4'
    ]);

    $manager->add_control(new WP_Customize_Color_Control($manager, 'header-color', [
        'label'=>'Couleur de fond du header',
        'section' =>'montheme_colors'
    ]));

    $manager->add_setting('footer-color',[
        'default' => '#000'
    ]);

    $manager->add_control(new WP_Customize_Color_Control($manager, 'footer-color', [
        'label'=>'Couleur de fond du footer',
        'section' =>'montheme_colors'
    ]));
})

?>