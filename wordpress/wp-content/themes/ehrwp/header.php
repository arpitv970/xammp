<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <h1><a class="logo-a" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    <img src="" alt="<?php bloginfo( 'name' ); ?>">
    <nav>
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ,'menu_class'=>'nav'    ) ); ?> 
        <a href="<?php echo esc_url( home_url( '/name' ) ); ?>" class="contact-button">
        <?php bloginfo( 'name' ); ?>
        </a>
    </nav>
</header>
