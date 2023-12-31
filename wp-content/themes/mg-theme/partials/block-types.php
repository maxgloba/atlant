<section class="types">
  <div class="wave__wrap wave__wrap-top"><svg class="wave" width="3518" height="155" viewBox="0 0 3518 155" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M3390 1.07208C3278.55 5.68234 3154.81 22.472 2988 55.6182C2934.48 66.2526 2900.6 73.4462 2782 99.355C2634.6 131.553 2588.29 140.645 2537 147.448C2491.8 153.443 2458.33 153.584 2402.6 148.015C2345.94 142.354 2298.49 133.923 2173.5 107.308C2028.01 76.3286 1974.41 67.4339 1897 61.4247C1875.23 59.7356 1798.3 59.7277 1774.5 61.4128C1693.08 67.1776 1641.4 74.8491 1499.14 102.294C1432.07 115.235 1413.89 118.596 1386.5 123.12C1312.19 135.394 1244.85 140.784 1198 138.204C1122.14 134.028 1052.47 122.747 866.103 84.4661C685.369 47.3426 634.764 39.1544 579.5 38.0913L553.5 37.5915L283.5 60.5841C135 73.2296 10.463 83.6126 6.75 83.6573L0 83.7388V119.369V155H1759H3518V77.5V0L3463.25 0.153013C3433.14 0.237468 3400.18 0.650801 3390 1.07208Z" fill="#CDDED0"/></svg></div>
  <div class="container">
    <h2 class="wow fadeInLeft"><?php the_field('types-title'); ?></h2>
    <h3 class="wow fadeInRight"><?php the_field('types-text'); ?></h3>
    <div class="types__row">
      <div class="types__white">
        <img src="<?php echo IMG; ?>/types-left.png" />
        <div class="types__info">
          <h4><?php the_field('types-left-title'); ?></h4>
          <?php if( have_rows('types-left-list') ): ?>
          <ul>
            <?php while( have_rows('types-left-list') ) : the_row(); ?>
              <li>
                <svg class="types__positive" viewBox="0 0 263.7 263.7"><path fill="#007E48" fill-rule="nonzero" d="M132.4 0c-72.5,0 -132.4,58.9 -132.4,131.3 0,72.5 59.9,132.4 132.4,132.4 72.4,0 131.3,-59.9 131.3,-132.4 0,-72.4 -58.9,-131.3 -131.3,-131.3z"></path><polyline fill="none" stroke="white" stroke-width="24.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.9256" points="40.5,142.1 99,199 215.8,82.2 "></polyline></svg>
                <?php the_sub_field('text'); ?>
              </li>
            <?php endwhile ?>
          </ul>
          <?php endif; ?>
          <div class="types__descriptor">
            <span>Закажите погреб по вашим индивидуальным размерам</span>
            <button class="btn">Заказать</button>
          </div>
        </div>
      </div>
      <div class="types__green">
        <img src="<?php echo IMG; ?>/types-right.png" />
        <div class="types__info">
          <h4><?php the_field('types-right-title'); ?></h4>
          <?php if( have_rows('types-right-list') ): ?>
          <ul>
            <?php while( have_rows('types-right-list') ) : the_row(); ?>
              <li>
                <svg class="types__negative" viewBox="0 0 1174.7 1174.7"><path fill="red" fill-rule="nonzero" d="M589.6 0c-322.8,0 -589.6,262.2 -589.6,585.1 0,322.8 266.8,589.6 589.6,589.6 322.9,0 585.1,-266.8 585.1,-589.6 0,-322.9 -262.2,-585.1 -585.1,-585.1z"></path><path fill="#E1E4FB" fill-rule="nonzero" d="M856.7 315.8c26.7,26.7 26.7,70.5 0,97.3l-441.3 441.3c-26.8,26.7 -70.6,26.7 -97.4,0 -26.7,-26.8 -26.7,-70.6 0,-97.4l441.3 -441.2c26.8,-26.8 70.6,-26.8 97.4,0z"></path><path fill="#E1E4FB" fill-rule="nonzero" d="M318 315.7c26.8,-26.7 70.6,-26.7 97.4,0l441.3 441.3c26.7,26.8 26.7,70.6 0,97.4 -26.8,26.7 -70.6,26.7 -97.4,0l-441.3 -441.3c-26.7,-26.8 -26.7,-70.6 0,-97.4z"></path></svg>
                <?php the_sub_field('text'); ?>
              </li>
            <?php endwhile; ?>
          </ul>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="wave__wrap wave__wrap-bottom"><svg class="wave" width="3474" height="146" viewBox="0 0 3474 146" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 38.3464V76.6937L3.75 75.9101C9.632 74.6805 35.423 75.2059 54.302 76.939C107.399 81.8136 146.578 88.5137 252 110.747C281.425 116.953 314.889 123.85 326.365 126.072C434.792 147.079 508.013 150.918 592 140.002C666.092 130.371 733.996 117.795 958.5 72.128C1250.97 12.6345 1336.06 -0.215524 1416.08 3.02329C1476.03 5.44967 1531.59 13.4072 1635 34.3765C1752.97 58.2987 1761.95 60.0437 1797.5 65.9582C1861.42 76.5934 1902.17 80.014 1954.5 79.1409C2000.23 78.3772 2018.54 76.8457 2111 66.0506C2205.75 54.9894 2227.27 53.3238 2275 53.3556C2352.57 53.4072 2446.4 59.9782 2527.5 71.0384C2588.91 79.4121 2640.16 89.0084 2729.21 108.808C2821.58 129.343 2856.96 135.821 2902 140.444C2955.77 145.963 3014.91 144.956 3073.89 137.517C3171.94 125.152 3292.07 93.3496 3442.5 39.9335C3460.92 33.3933 3468.36 31.1814 3470.75 31.532L3474 32.0078V16.0034V0H1737H0V38.3464Z" fill="#CDDED0"/></svg></div>
</section>