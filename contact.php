<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  /* $receiving_email_address = 'jmartin.2019@outlook.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  //

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send(); */

    if(isset($_POST['submit'])){
      $to = "jmartin.2019@outlook.com"; // this is your Email address
      $from = $_POST['email']; // this is the sender's Email address
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $subject = "Form submission";
      $subject2 = "Copy of your form submission";
      $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
      $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
  
      $headers = "From:" . $from;
      $headers2 = "From:" . $to;
      mail($to,$subject,$message,$headers);
      mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
      echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
      // You can also use header('Location: thank_you.php'); to redirect to another page.
      // You cannot use header and echo together. It's one or the other.
      }
?>
