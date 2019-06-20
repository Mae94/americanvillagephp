<?php

add_theme_support( 'post-thumbnails' );

add_theme_support( 'custom-header' );

function register_my_menu() {
    register_nav_menus(
        array(
          'header-menu' => __( 'Header Menu' ),
          'items_wrap' => '<ul><li class="menu02">Menu: </li>%3$s</ul>'
        )
        );
  }
  add_action( 'init', 'register_my_menu' );
  
?>
