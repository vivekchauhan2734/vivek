<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'vivekchauhan2734@gmail.com';
  $to = $receiving_email_address;
  $name = $_POST['name'];
  $from = $_POST['email'];
  $subject = 'Online Appointment Form';
  $message = 'Deptt' . $_POST['department'] . 'doctor' .  $_POST['doctor'] .  $_POST['date'] .'Appointment Date' ;
  
  if (filter_var($from, FILTER_VALIDATE_EMAIL)) {
      $headers = ['From' => ($name?"<$name> ":'').$from,
              'X-Mailer' => 'PHP/' . phpversion()
             ];
  
      mail($to, $subject, $message."\r\n\r\nfrom: ".$_SERVER['REMOTE_ADDR'], $headers);
      die('OK');
      
  } else {
      die('Invalid address');
  }
?>
