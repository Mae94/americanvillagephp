<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <title>American Village</title>
    <?php wp_head();?>
    
</head>
<body>
    <div class="container">

        <!-- HEADER -->
        <header>
                <ul class="header-right">
                    <?php wp_nav_menu( 'header-menu' ); ?>
                </ul>
        </header>