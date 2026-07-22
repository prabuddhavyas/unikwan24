<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  use PHPMailer\PHPMailer\SMTP;

  require_once "vendor/autoload.php";

  $postData = json_decode(file_get_contents('php://input'), true);
  $flag = 0;

  if(isset($postData['newsletterEmail'])) {
    $adminEmail = 'no-reply@unikwan.com';
    $clientAdminEmail = 'no-reply@unikwan.com';
    $email = $postData['newsletterEmail'];

    $from = $adminEmail;
    $to = $email;
    $subject = 'Greetings from Unikwan';
    $message = "Hi.<br/><br/>
      Thanks for subscribing to receive our exclusive free templates and ebooks! 
      We're excited to have you join our community. &#128640;<br/><br/> 
      At UniKwan, we believe in empowering professionals like you with the right 
      tools and resources to excel. Our carefully curated templates and ebooks are 
      designed to provide you with practical insights and actionable strategies.<br/><br/>
      <strong>Here's what you can expect:</strong><br/>
      <ul>
        <li>&#128209; Practical templates: Access ready-to-use templates that can 
          save you time and streamline your workflow.
        </li><br/>
        <li>&#128216; In-depth ebooks: Dive into comprehensive guides covering 
          a wide range of topics relevant to your industry.
        </li><br/>
        <li>&#128161; Expert tips: Gain valuable insights from industry experts to stay ahead of the curve.
        </li>
      </ul><br/>
      Our first set of free templates and ebooks will be arriving in your inbox shortly. 
      If you have any questions or need further information about our 
      <a href='https://www.unikwan.com/expertise/' style='font-weight: 700;'>service offerings</a>, 
      don't hesitate to visit our website at <a href='https://www.unikwan.com/' style='font-weight: 700;'>
      unikwan.com</a>. Stay tuned!<br/><br/>
      Reach us at <a href='mailto:prabuddha@unikwan.com' style='font-weight: 700;'>prabuddha@unikwan.com<a/> 
      or <a href='mailto:juhi@unikwan.com' style='font-weight: 700;'>juhi@unikwan.com</a><br/><br/>
      We personally look at all your emails :)<br/><br/>
      Thanks again for subscribing!<br/><br/>
      Cheers!<br/>
      <a href='https://www.linkedin.com/in/prabuddhavyas/'>Prabuddha Vyas</a><br/>
      Founder & Managing Director, <a href='https://www.unikwan.com/'>unikwan.com</a><br/><br/>
      <span style='text-decoration: underline; font-weight: 700;'>P.S. Feel free to share these valuable resources 
      with anyone in your network who might benefit from them.</span> &#128578;";
    $mail = sendUserMail($from, $to, $subject, $message, $flag);

    if($mail) {
      $from = $adminEmail;
      $to = $clientAdminEmail;
      $subject = "Free Templates & eBooks Subscriber request from $email";
      $message = "Free Templates & eBooks Subscriber Details:<br/><br/> Email Id: $email";
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