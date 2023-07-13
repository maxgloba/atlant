<section class="montag">
  <div class="container">
    <div class="montag__info">
      <h2 class="wow fadeInRight"><?php the_field('montag-title'); ?></h2>
      <?php if( have_rows('montag-list') ): ?>
      <ul class="wow fadeInRight" data-wow-delay=".1s">
        <?php while( have_rows('montag-list') ) : the_row(); ?>
          <li><?php the_sub_field('text'); ?></li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>
    </div>
    <?php the_field('montag-video'); ?>
  </div>
</section>