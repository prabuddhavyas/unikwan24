<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  require 'vendor/autoload.php';

  $postData = json_decode(file_get_contents('php://input'), true);
  $flag = 0;

  if(isset($postData['articleNewsletterEmail'])) {
    $adminEmail = 'no-reply@unikwan.com';
    $clientAdminEmail = 'no-reply@unikwan.com';
    $email = $postData['articleNewsletterEmail'];

    $from = $adminEmail;
    $to = $email;
    $subject = 'Greetings from Unikwan';
    $message = "Hi.<br/><br/>
      Thanks for subscribing to receive our upcoming series on UX success stories! 
      We're thrilled to have you on board. &#128640;<br/><br/> 
      We understand the power of a well-designed user experience (UX) and 
      how it can transform your business. In this series, we'll be diving deep 
      into real-world examples of how our clients have achieved amazing results 
      through exceptional UX design.<br/><br/>
      <strong>Here's what you can expect:</strong><br/>
      <ul>
        <li>&#128269; Actionable insights: Learn from the challenges and triumphs of real businesses, 
          just like yours.
        </li><br/>
        <li>&#128200; Proven strategies: Discover how design thinking and strategic UX can 
          elevate your user experience.
        </li><br/>
        <li>&#128175; Inspiring results: See the tangible impact of great UX on metrics 
          like customer satisfaction, conversion rates, and brand loyalty.
        </li>
      </ul><br/>
      We'll be sending out the first UX success story soon. In the meantime, 
      if you have any questions or would like to learn more about our 
      <a href='https://www.unikwan.com/expertise/' style='font-weight: 700;'>UX design services</a>, 
      feel free to visit our website at <a href='https://www.unikwan.com/' style='font-weight: 700;'>
      unikwan.com</a>. Stay tuned!<br/><br/>
      Reach us at <a href='mailto:prabuddha@unikwan.com' style='font-weight: 700;'>prabuddha@unikwan.com<a/> 
      or <a href='mailto:juhi@unikwan.com' style='font-weight: 700;'>juhi@unikwan.com</a><br/><br/>
      We personally look at all your emails :)<br/><br/>
      Thanks again for subscribing!<br/><br/>
      Cheers!<br/>
      <a href='https://www.linkedin.com/in/prabuddhavyas/'>Prabuddha Vyas</a><br/>
      Founder & Managing Director, <a href='https://www.unikwan.com/'>unikwan.com</a><br/><br/>
      <span style='text-decoration: underline; font-weight: 700;'>P.S. Feel free to share this series 
      with anyone in your network who might benefit from learning about successful UX strategies.</span> &#128578;";
    $mail = sendUserMail($from, $to, $subject, $message, $flag);

    if($mail) {
      $from = $adminEmail;
      $to = $clientAdminEmail;
      $subject = "Article Newsletter Subscriber request from $email";
      $message = "Article Newsletter Subscriber Details:<br/><br/> Email Id: $email";
      $mail2 = sendAdminMail($from, $to, $subject, $message, $flag);
    }
    else {
      $output = json_encode(array('type' => 'error', 'text' => 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo));
      die($output);
    }
  }

  function sendUserMail($from, $to, $subject, $message) {
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = "smtp.office365.com";
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->Username = "no-reply@unikwan.com";
    $mail->Password = "Juhi@2024";
    $mail->setFrom($from, "UniKwan Innovations");
    $mail->addAddress($to);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
    if(!$mail->send()) {
      echo "Mailer Error: {$mail->ErrorInfo}";
    }
    else {
      
    }
    return $mail;
  }

  function sendAdminMail($from, $to, $subject, $message) {
    $mail2 = new PHPMailer(true);
    $mail2->SMTPDebug = 0;
    $mail2->isSMTP();
    $mail2->Host = "smtp.office365.com";
    $mail2->SMTPAuth = true;
    $mail2->SMTPSecure = 'tls';
    $mail2->Port = 587;
    $mail2->Username = "no-reply@unikwan.com";
    $mail2->Password = "Juhi@2024";
    $mail2->setFrom($from, "UniKwan Innovations");
    $mail2->addAddress($to);
    $mail2->isHTML(true);
    $mail2->Subject = $subject;
    $mail2->Body = $message;
    if(!$mail2->send()) {
      echo "Mailer Error: {$mail2->ErrorInfo}";
    }
    else {
      $responsee = array("success" => true);
      echo json_encode($responsee);
    }
  }
?>