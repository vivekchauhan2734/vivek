<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Collect form data
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = 'Deptt' . htmlspecialchars($_POST['department']) . 'doctor' .  htmlspecialchars($_POST['doctor']) . 'Appointment Date' . htmlspecialchars($_POST['date']) . 'message' . htmlspecialchars($_POST['message']);


  // Set email parameters
  $to = "atif.shivamarts@gmail.com"; // Replace with the recipient's email
  $subject = "New Contact Form Submission";
  $headers = "From: $email" . "\r\n" .
             "Reply-To: $email" . "\r\n" .
             "Content-Type: text/plain; charset=utf-8";

  // Compose the email body
  $emailBody = "You have received a new message from the contact form.\n\n" .
               "Name: $name\n" .
               "Email: $email\n\n" .
               "Message:\n$message";

  // Send the email
  if (mail($to, $subject, $emailBody, $headers)) {
      echo "Email sent successfully.";
  } else {
      echo "Failed to send email. Please try again.";
  }
} else {
  echo "Invalid request.";
}


  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */


  // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'vivekchauhan2734@gmail.com';
  // $to = $receiving_email_address;
  // $name = $_POST['name'];
  // $from = $_POST['email'];
  // $subject = 'Online Appointment Form';
  // $message = 'Deptt' . $_POST['department'] . 'doctor' .  $_POST['doctor'] .  $_POST['date'] .'Appointment Date' ;
  
  // if (filter_var($from, FILTER_VALIDATE_EMAIL)) {
  //     $headers = ['From' => ($name?"<$name> ":'').$from,
  //             'X-Mailer' => 'PHP/' . phpversion()
  //            ];
  
  //     mail($to, $subject, $message."\r\n\r\nfrom: ".$_SERVER['REMOTE_ADDR'], $headers);
  //     die('OK');
      
  // } else {
  //     die('Invalid address');
  // }
?>
