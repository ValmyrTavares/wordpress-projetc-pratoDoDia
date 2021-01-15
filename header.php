<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>  
    <header>
        <video width="100%" height="25%"  height="500px" autoplay>
            <source  src="<?php echo get_stylesheet_directory_uri();?>./assets/header1.mp4" type="video/mp4">
            <source src="mov_bbb.ogg" type="video/ogg">
            Your browser does not support HTML video.
          </video>
          <a href="/testewp/"><img class="logo-header" src="<?php echo get_stylesheet_directory_uri();?>./assets/Logo.png" alt="logo"></a>
          <a class="contato" href="/testewp/Contato/">Contato</a>
          <div class="btn-hover">            
              <img class="btn-mobile" src="<?php echo get_stylesheet_directory_uri();?>./assets/Component 1 – 1.svg" alt="logo">
              <div class="main-menu">
                <a href="/testewp/Massas/">Massas</a>
                <a href="/testewp/Peixes/">Peixes</a>
                <a href="/testewp/Carnes/">Carnes</a>
                <a href="/testewp/Drinks/" >Drinks</a>
              </div>
          </div>
    </header>