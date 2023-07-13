<section class="consultation">
  <div class="container">
    <div class="consultation__titles">
      <h2 class="wow fadeInLeft"><?php the_field('consultation-title'); ?></h2>
      <h3 class="wow fadeInLeft" data-wow-delay=".1s"><?php the_field('consultation-text'); ?></h3>
    </div>
    <div class="form__wrap">
      <svg class="form__bg" width="700" height="700" viewBox="0 0 700 700" fill="none" type="image/svg+xml" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
        <path id="r1" d="M692 241.5C692 448.471 583.972 831.49 458.5 646.5C263.5 359 21.5364 512.5 17.9999 414C4.5 38 209.972 0.5 433.5 0.5C656 22.5 662 81 692 241.5Z" fill="#007F43">
          <animate id="p1" attributeName="d" dur="50s" repeatCount="indefinite" values="M692 241.5C692 448.471 583.972 831.49 458.5 646.5C263.5 359 21.5364 512.5 17.9999 414C4.5 38 209.972 0.5 433.5 0.5C656 22.5 662 81 692 241.5Z;M665.5 434.999C753.5 713.499 560.5 694.499 353.5 694.499C6.10831 694.499 17.9999 604.499 18.0001 413.999C18.0005 181.499 -52.4998 -29.9999 236.5 9.99947C479 3.99904 624.524 305.319 665.5 434.999Z;M690.5 221.001C654.5 557.001 415.45 796.017 252 669.001C7.49997 479.001 1.43939 457.494 20.9999 268.001C44.9998 35.5007 32.9999 41.5006 315 9.00112C557.5 3.00069 711.435 25.6191 690.5 221.001Z;M692 330.5C656 666.5 729.835 658.312 481 674C21.0002 703 2.43924 342.992 21.9998 153.498C45.9997 -79.0015 168 58.4981 333 164.498C499 233 712.934 135.118 692 330.5Z;M690.5 221.001C654.5 557.001 415.45 796.017 252 669.001C7.49997 479.001 1.43939 457.494 20.9999 268.001C44.9998 35.5007 32.9999 41.5006 315 9.00112C557.5 3.00069 711.435 25.6191 690.5 221.001Z;M665.5 434.999C753.5 713.499 560.5 694.499 353.5 694.499C6.10831 694.499 17.9999 604.499 18.0001 413.999C18.0005 181.499 -52.4998 -29.9999 236.5 9.99947C479 3.99904 624.524 305.319 665.5 434.999Z;M692 241.5C692 448.471 583.972 831.49 458.5 646.5C263.5 359 21.5364 512.5 17.9999 414C4.5 38 209.972 0.5 433.5 0.5C656 22.5 662 81 692 241.5Z;" />
        </path>
        <use xlink:href="#r1"/>
      </svg>
      <div class="form__inner">
        <h4>Оставьте свои контактные данные</h4>
        <h5>Менеджер перезванивает за 5-10 минут в рабочие часы</h5>
        <form class="form consultationForm" data-id="c">
          <div class="field"><input type="text" name="name" id="f2_name" placeholder="Ваше имя" minlength="2" required /></div>
          <div class="field"><input type="tel" name="phone" id="f2_phone" placeholder="Ваш телефон" minlength="10" required /></div>
          <div class="field"><input class="btn" type="submit" value="Помощь в выборе"></div>
          <div class="field">
            <input type="checkbox" name="accept" id="accept" checked>
            <label for="accept">Я даю согласие <a href="#">на обработку персональных данных и соглашаюсь с политикой конфиденциальности</a></label>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>