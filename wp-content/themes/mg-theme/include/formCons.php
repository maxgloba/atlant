<?php
function formCons(){

  $to = 'onyx18121990@gmail.com';
  $reply = 'onyx18121990@gmail.com';

  $subject = 'Погреб н-н-надо?';

  $message = '
    <p>Name: '.$_POST['name'].'</p>
    <p>Phone: '.$_POST['phone'].'</p>
  ';

  $headers =  'Reply-To: ' . $reply . "\r\n" .
              'Content-Type: text/html; charset=UTF-8';

  $send_email = wp_mail( $to, $subject, $message, $headers);

  if( $send_email ){
    $response = [
      'status' => 'success',
      'msg' => 'СПАСИБО! Ваше сообщение отправлено, мы скоро свяжемся с вами.'
    ];
  } else {
    $response = [
      'status' => 'error',
      'msg' => 'ОШИБКА! Что то пошло не так. Перезагрузите странице и попробуйте еще раз.',
      'data' => json_encode($send_email)
    ];
  }

  echo json_encode($response);

  wp_die();
}
add_action('wp_ajax_formCons', 'formCons');
add_action('wp_ajax_nopriv_formCons', 'formCons');
