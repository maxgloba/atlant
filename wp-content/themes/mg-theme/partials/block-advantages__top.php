<?php if( have_rows('adv-top-list') ): ?>
<section class="advantages advantages__top">
  <div class="container">
    <div class="advantages__list">
      <?php while( have_rows('adv-top-list') ) : the_row(); ?>
        <div class="advantages__item">
          <img src="<?php the_sub_field('image'); ?>" />
          <h4><?php the_sub_field('text'); ?></h4>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
  <img class="parallax-obj advantages__pomidor" src="<?php echo IMG; ?>/pomidor.png" />
</section>
<?php endif; ?>