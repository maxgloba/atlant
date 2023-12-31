<section class="bunker">
  <div class="container">
    <div class="bunker__left">
      <h2 class="wow fadeInLeft"><?php the_field('bunker-title'); ?></h2>
      <h3 class="wow fadeInLeft" data-wow-delay=".1s"><?php the_field('bunker-text'); ?></h3>
      <img class="bunker__ded wow fadeInRight" src="<?php echo IMG; ?>/ded.png" />
      <?php if( have_rows('bunker-list') ): ?>
      <div class="bunker__list">
        <?php while( have_rows('bunker-list') ) : the_row(); ?>
          <div class="bunker__item">
            <button class="bunker__item__btn">
              <?php the_sub_field('title'); ?>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300.003 300.003" style="enable-background:new 0 0 300.003 300.003;" xml:space="preserve"><path d="M150,0C67.159,0,0.001,67.159,0.001,150c0,82.838,67.157,150.003,149.997,150.003S300.002,232.838,300.002,150 C300.002,67.159,232.842,0,150,0z M217.685,131.647l-56.046,56.046c-0.537,0.838-1.146,1.637-1.88,2.365 c-2.796,2.799-6.484,4.145-10.146,4.08c-3.667,0.062-7.345-1.281-10.141-4.077c-0.734-0.731-1.351-1.53-1.891-2.368l-56.29-56.297 c-2.736-2.731-4.108-6.315-4.103-9.897c-0.005-3.584,1.367-7.166,4.098-9.902c5.47-5.47,14.335-5.467,19.808,0l48.519,48.514 l48.262-48.27c5.47-5.47,14.338-5.465,19.81,0C223.156,117.31,223.149,126.175,217.685,131.647z"/></svg>
            </button>
            <div class="bunker__item__text">
              <p><?php the_sub_field('text'); ?></p>
              <ul class="bunker__sublist">
                <?php if( have_rows('positive') ): while( have_rows('positive') ) : the_row(); ?>
                  <li>
                    <svg class="bunker__positive" viewBox="0 0 263.7 263.7"><path fill="#007E48" fill-rule="nonzero" d="M132.4 0c-72.5,0 -132.4,58.9 -132.4,131.3 0,72.5 59.9,132.4 132.4,132.4 72.4,0 131.3,-59.9 131.3,-132.4 0,-72.4 -58.9,-131.3 -131.3,-131.3z"/><polyline fill="none" stroke="white" stroke-width="24.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.9256" points="40.5,142.1 99,199 215.8,82.2 "/></svg>
                    <?php the_sub_field('text'); ?>
                  </li>
                <?php endwhile; endif; ?>
                <?php if( have_rows('negative') ): while( have_rows('negative') ) : the_row(); ?>
                <li>
                  <svg class="bunker__negative" viewBox="0 0 1174.7 1174.7"><path fill="red" fill-rule="nonzero" d="M589.6 0c-322.8,0 -589.6,262.2 -589.6,585.1 0,322.8 266.8,589.6 589.6,589.6 322.9,0 585.1,-266.8 585.1,-589.6 0,-322.9 -262.2,-585.1 -585.1,-585.1z"/><path fill="#E1E4FB" fill-rule="nonzero" d="M856.7 315.8c26.7,26.7 26.7,70.5 0,97.3l-441.3 441.3c-26.8,26.7 -70.6,26.7 -97.4,0 -26.7,-26.8 -26.7,-70.6 0,-97.4l441.3 -441.2c26.8,-26.8 70.6,-26.8 97.4,0z"/><path fill="#E1E4FB" fill-rule="nonzero" d="M318 315.7c26.8,-26.7 70.6,-26.7 97.4,0l441.3 441.3c26.7,26.8 26.7,70.6 0,97.4 -26.8,26.7 -70.6,26.7 -97.4,0l-441.3 -441.3c-26.7,-26.8 -26.7,-70.6 0,-97.4z"/></svg>
                  <?php the_sub_field('text'); ?>
                </li>
                <?php endwhile; endif; ?>
              </ul>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <div class="wave__wrap wave__wrap-bottom"><svg class="wave" width="3474" height="146" viewBox="0 0 3474 146" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 38.3464V76.6937L3.75 75.9101C9.632 74.6805 35.423 75.2059 54.302 76.939C107.399 81.8136 146.578 88.5137 252 110.747C281.425 116.953 314.889 123.85 326.365 126.072C434.792 147.079 508.013 150.918 592 140.002C666.092 130.371 733.996 117.795 958.5 72.128C1250.97 12.6345 1336.06 -0.215524 1416.08 3.02329C1476.03 5.44967 1531.59 13.4072 1635 34.3765C1752.97 58.2987 1761.95 60.0437 1797.5 65.9582C1861.42 76.5934 1902.17 80.014 1954.5 79.1409C2000.23 78.3772 2018.54 76.8457 2111 66.0506C2205.75 54.9894 2227.27 53.3238 2275 53.3556C2352.57 53.4072 2446.4 59.9782 2527.5 71.0384C2588.91 79.4121 2640.16 89.0084 2729.21 108.808C2821.58 129.343 2856.96 135.821 2902 140.444C2955.77 145.963 3014.91 144.956 3073.89 137.517C3171.94 125.152 3292.07 93.3496 3442.5 39.9335C3460.92 33.3933 3468.36 31.1814 3470.75 31.532L3474 32.0078V16.0034V0H1737H0V38.3464Z" fill="#007e48"/></svg></div>
</section>