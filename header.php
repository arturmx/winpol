<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo get_the_title(); ?></title>
    <link rel="stylesheet" href="./style.css" />
    <?php wp_head(); ?>
  </head>
  <body>

    <header class="header">
      <div class="wrapper header__wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>./assets/winpol1.png">
          <div class="header__nav">
            <a href="#">Ramen</a>
            <a href="#">Garagen</a>
            <a href="#">Deuren</a>
          </div>
          <div class="header__right">
            <img src="<?php echo get_template_directory_uri(); ?>./assets/mail1.png">
            <adress class="header__mail">winpol.info@gmail.com</adress>
          </div>
      </div>
      <div class="header__fix"></div>
    </header>