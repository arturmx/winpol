<?php get_header(); ?>
    <section class="hero slider">
      <div class="hero__slide" style="background: url(<?php the_field('slide1_hero_background') ?>) ">
        <div class="wrapper">       
          <h2 class="hero__h2"><?php the_field('slide1_hero_h2') ?></h2>
          <div class="hero__bottom">
            <a href="#" class="button">
            <?php the_field('slide1_button_text') ?>
              <img src="<?php echo get_template_directory_uri(); ?>./assets/next1.png">
            </a>
          </div>
        </div>
      </div>
      
      <div class="hero__slide" style="background: url(<?php the_field('slide2_hero_background') ?>) ">
        <div class="wrapper">          
          <h2 class="hero__h2"><?php the_field('slide2_hero_h2') ?></h2>
          <div class="hero__bottom">
            <a href="#" class="button">
            <?php the_field('slide2_button_text') ?>
              <img src="<?php echo get_template_directory_uri(); ?>./assets/next1.png">
            </a>
          </div>        
        </div>
      </div>
      <div class="hero__slide" style="background: url(<?php the_field('slide3_hero_background') ?>) ">
        <div class="wrapper">           
          <h2 class="hero__h2"><?php the_field('slide3_hero_h2') ?></h2>
          <div class="hero__bottom">
            <a href="#" class="button">
            <?php the_field('slide3_button_text') ?>
              <img src="<?php echo get_template_directory_uri(); ?>./assets/next1.png">
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="second">
      <div class="wrapper second__wrapper">
        <h1 class="second__h1"><?php the_field('second_section_h1') ?></h1>
          <div class="second__columns">
            <img class="second__photo" src="<?php the_field('second_section_image') ?>">
            <div class="second__right">
              <h3 class="second__h3"><?php the_field('second_section_h3') ?></h3>
              <p class="second__p"><?php the_field('second_section_paragraph') ?></p>
            </div>
          </div>
        </div>
    </section>
    <section class="goods">
      <div class="wrapper">
        <h2 class="goods__h2"><?php the_field('goods_h2') ?></h2>
        <div class="goods__photos">
          <img src="<?php the_field('goods_photo1') ?>">
          <img src="<?php the_field('goods_photo2') ?>">
          <img src="<?php the_field('goods_photo3') ?>">
        </div>
        <div class="goods__bottom">
          <div class="goods__bottomleft">
            <h3 class="goods__h3"><?php the_field('goods_h3') ?></h3>
            <p class="goods__p"><?php the_field('goods_paragraph') ?></p>
              <a href="#" class="button">
              <?php the_field('goods_button_text') ?>
                <img src="<?php echo get_template_directory_uri(); ?>./assets/next1.png">
              </a>
          </div>
          <img src="<?php the_field('goods_bottom_photo') ?>">
        </div>
      </div>
    </section>

<?php get_footer(); ?>