<?php if( have_rows('adv-top-list') ): $i=0; ?>
<section class="advantages advantages__top">
  <div class="container">
    <div class="advantages__list">
      <?php while( have_rows('adv-top-list') ) : the_row(); $i++; ?>
        <div class="advantages__item wow fadeInUp" data-wow-delay=".<?php echo $i; ?>s">
          <img src="<?php the_sub_field('image'); ?>" />
          <h4><?php the_sub_field('text'); ?></h4>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
  <img class="parallax-obj advantages__pomidor" src="<?php echo IMG; ?>/pomidor.png" />
</section>
<?php endif; ?>