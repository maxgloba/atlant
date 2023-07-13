<footer class="main-footer">
  <div class="container">
    <div class="main-footer__titles">
      <a class="main-footer__logo" href="<?php echo home_url(); ?>">
        <img src="<?php the_field('logo', 'option'); ?>">
      </a>
      <div class="main-footer__slogan"><?php the_field('slogan', 'option'); ?></div>
    </div>

    <?php if( have_rows('footer_menu_1', 'option') ): ?>
    <ul class="main-footer__info">
      <?php while( have_rows('footer_menu_1', 'option') ) : the_row(); ?>
        <li><?php the_sub_field('text'); ?></li>
      <?php endwhile; ?>
    </ul>
    <?php endif; ?>

    <?php if( have_rows('footer_menu_2', 'option') ): ?>
    <ul class="main-footer__info">
      <?php while( have_rows('footer_menu_2', 'option') ) : the_row(); ?>
        <li><?php the_sub_field('text'); ?></li>
      <?php endwhile; ?>
    </ul>
    <?php endif; ?>

    <ul class="main-footer__info">

      <?php if( have_rows('footer_menu_3', 'option') ): while( have_rows('footer_menu_3', 'option') ) : the_row(); ?>
        <li><?php the_sub_field('text'); ?></li>
      <?php endwhile; endif; ?>

      <?php if( have_rows('smi', 'option') ): ?>
      <li class="main-footer__smi">
        <?php while( have_rows('smi', 'option') ) : the_row(); ?>
          <a href="<?php the_sub_field('link') ?>"><img src="<?php the_sub_field('icon') ?>" /></a>
        <?php endwhile; ?>
      </li>
      <?php endif; ?>
    </ul>

    <div class="main-footer__info">
      <a class="main-footer__phone" href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
      <button class="btn btn-white getCall">Заказать звонок</button>
    </div>
  </div>
</footer>

<div class="copyright"><?php the_field('copyright', 'option'); ?></div>
