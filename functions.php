<?php 


/*-----------------menu -------------*/

function registrando_meu_menu(){
    register_nav_menus(
        array(
                'header_menu' => 'Header Menu',
                'footer_menu' => 'Foter menu'
            )
    );
}
add_action( 'init', 'registrando_meu_menu');




/*-----------------logo -------------*/

function tema_custom_logo() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
 
add_action( 'after_setup_theme', 'tema_custom_logo' );
