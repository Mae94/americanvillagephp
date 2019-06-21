<?php

add_theme_support( 'post-thumbnails' );

add_theme_support( 'custom-header' );

function register_my_menu() {
    register_nav_menus(
        array(
          'header-menu' => __( 'Header Menu' ),
        )
        );
  }
  
  
?>
