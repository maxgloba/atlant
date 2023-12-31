<section class="advantages advantages__bottom">
  <img class="advantages__wave" src="<?php echo IMG; ?>/adv-wave.png" />
  <div class="container">
    <h2><?php the_field('adv-bot-title'); ?></h2>
    <div class="advantages__slogan">
      <svg enable-background="new 0 0 512.89 512.89" height="512" viewBox="0 0 512.89 512.89" width="512" xmlns="http://www.w3.org/2000/svg">
        <path fill="#fff" d="m256.443 496.445c-184.026 0-298.503-199.142-209.256-357.6 9.821 24.552 10.087 29.602 17.258 29.602 5.635 0 9.53-5.712 7.425-10.973-17.908-44.771-15.676-41.891-18.452-43.715-4.252-2.793-6.132-1.242-46.545 6.841-9.435 1.886-8.027 15.847 1.561 15.847 1.134 0-.412.241 24.395-4.721-95.631 171.094 29.389 380.719 223.614 380.719 10.578 0 10.591-16 0-16z"/>
        <path fill="#fff" d="m512.288 382.876c-2.091-10.448-13.682-5.422-32.232-1.712 95.679-171.174-29.506-380.719-223.613-380.719-10.576 0-10.592 16 0 16 184.028 0 298.503 199.143 209.256 357.6l-9.828-24.57c-3.926-9.823-18.789-3.892-14.855 5.941 16.514 41.286 15.567 46.733 24.972 44.878.651-.128 38.85-7.769 40.025-8.004 4.331-.866 7.141-5.081 6.275-9.414z"/>
        <path fill="#fff" d="m368.443 136.445c-32.289 0-91.51 42.526-102.29 89.51-6.114-1.952-12.863-2.054-19.237-.062-1.588-35.835 17.527-51.462 17.527-81.448 0-35.29-28.71-64-64-64s-64 28.71-64 64c0 32.289 42.527 91.51 89.51 102.29-1.952 6.114-2.054 12.863-.062 19.237-35.833 1.588-51.464-17.526-81.448-17.526-35.29 0-64 28.71-64 64s28.71 64 64 64c32.289 0 91.51-42.526 102.29-89.51 6.445 2.057 13.191 1.951 19.237.062 1.588 35.835-17.527 51.463-17.527 81.448 0 35.29 28.71 64 64 64s64-28.71 64-64c0-32.289-42.526-91.51-89.51-102.29 1.948-6.101 2.058-12.85.062-19.236 35.875-1.588 51.426 17.526 81.448 17.526 35.29 0 64-28.71 64-64s-28.71-64.001-64-64.001zm-188.693 61.526c-55.362-62.763-12.439-101.525 20.693-101.525 26.467 0 48 21.532 48 48 0 26.456-20.932 44.305-17.194 87.087-16.88-3.251-35.247-15.138-51.499-33.562zm18.218 135.167c-62.761 55.36-101.525 12.441-101.525-20.693 0-26.468 21.533-48 48-48 26.408 0 44.336 20.927 87.087 17.194-3.25 16.88-15.137 35.248-33.562 51.499zm42.475-76.693c0-21.177 32-21.15 32 0 0 21.177-32 21.15-32 0zm92.693 58.475c55.36 62.761 12.441 101.525-20.693 101.525-26.468 0-48-21.532-48-48 0-26.417 20.926-44.354 17.194-87.087 16.88 3.25 35.247 15.137 51.499 33.562zm35.307-66.475c-26.281 0-44.402-20.916-87.087-17.194 3.25-16.88 15.137-35.247 33.562-51.499 62.761-55.36 101.525-12.441 101.525 20.693 0 26.468-21.532 48-48 48z"/>
      </svg>
      <h3><?php the_field('adv-bot-subtitle'); ?></h3>
    </div>
    <div class="advantages__pogreb">
      <?php if( have_rows('adv-bot-list-left') ): ?>
      <ul class="advantages__items advantages__items-left">
        <?php $i=0; while( have_rows('adv-bot-list-left') ) : the_row(); $i++; ?>
          <li class="advantages__items-left-0<?php echo $i; ?>">
            <?php the_sub_field('title'); ?>
            <span><?php the_sub_field('text'); ?></span>
            <img src="<?php echo IMG; ?>/left-arrow-0<?php echo $i; ?>.png" />
          </li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>
      <img src="<?php echo IMG; ?>/pogreb.png" />
      <?php if( have_rows('adv-bot-list-right') ): ?>
      <ul class="advantages__items advantages__items-right">
        <?php $i=0; while( have_rows('adv-bot-list-right') ) : the_row(); $i++; ?>
          <li class="advantages__items-right-0<?php echo $i; ?>">
            <?php the_sub_field('title'); ?>
            <span><?php the_sub_field('text'); ?></span>
            <img src="<?php echo IMG; ?>/right-arrow-0<?php echo $i; ?>.png" />
          </li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>
    </div>
  </div>
  <img class="parallax-obj advantages__banka" src="<?php echo IMG; ?>/banka2.png" />
  <img class="parallax-obj advantages__banka3" src="<?php echo IMG; ?>/banka3.png" />
  <img class="parallax-obj advantages__klybnika" src="<?php echo IMG; ?>/klybnika.png" />
  <img class="parallax-obj advantages__yagodua" src="<?php echo IMG; ?>/yagodua.png" />
  <img class="parallax-obj advantages__resurs" src="<?php echo IMG; ?>/resurs.png" />
</section>