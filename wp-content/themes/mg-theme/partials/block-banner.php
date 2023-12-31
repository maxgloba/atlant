<section class="banner">
  <div class="container">
    <div class="row">
      <div class="banner__left">
        <h1 class="wow bounceInLeft"><?php the_field('banner-title'); ?></h1>
        <h2 class="wow bounceInLeft" data-wow-delay=".1s"><?php the_field('banner-slogan'); ?></h2>
        <div class="banner__descriptor wow bounceInLeft" data-wow-delay=".2s">
          <button class="btn openFormConsultation">Консультация</button>
          <div class="banner__dev"><?php the_field('banner-descriptor'); ?></div>
        </div>
      </div>
      <div class="banner__right">
        <div class="banner__center wow fadeIn">
          <img class="banner__pogreb" src="<?php echo IMG; ?>/banner-pogreb.png" />
          <div class="banner__price">
            <img class="banner__price__bg" src="<?php echo IMG; ?>/yarlyk.svg" />
            <img class="banner__price__icon" src="<?php echo IMG; ?>/ruble.svg" />
            <span class="banner__price__text">от <br> 98 100 р.</span>
          </div>
        </div>
        <?php if( have_rows('banner-list') ): ?>
        <ul class="banner__list wow bounceInRight">
          <?php while( have_rows('banner-list') ) : the_row(); ?>
            <li class="banner__item">
              <?php the_sub_field('title'); ?>
              <span><?php the_sub_field('description'); ?></span>
            </li>
          <?php endwhile; ?>
        </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <img class="parallax-obj banner__banka" src="<?php echo IMG; ?>/banka.png" />
  <img class="parallax-obj banner__perec" src="<?php echo IMG; ?>/perec.png" />
</section>