<section class="look">
  <img class="look__bg" src="<?php echo IMG; ?>/look-bg.png" width="100%" />
  <div class="look__box-wrap">
    <div class="look__box wow fadeInRight">
      <h2><?php the_field('look-title'); ?></h2>
      <?php if( have_rows('look-slider') ): ?>
      <div class="look__slider-wrap">
        <div class="look__slider">
          <?php while( have_rows('look-slider') ) : the_row(); ?>
            <div>
              <div class="look__item">
                <img src="<?php the_sub_field('icon'); ?>" />
                <span><?php the_sub_field('text'); ?></span>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
      <?php endif; ?>
      <div class="look__descriptor">
        <span>Наш менеджер позвонит вам по видеосвязи и сделает обзор погреба</span>
        <button class="btn">Видео-обзор</button>
      </div>
    </div>
  </div>
</section>