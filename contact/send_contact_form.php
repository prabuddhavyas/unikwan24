<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require_once "vendor/autoload.php";

$postData = json_decode(file_get_contents('php://input'), true);

if (isset($postData['contactEmail'])) {

    $adminEmail       = 'info@unikwan.com';
    $clientAdminEmail = 'info@unikwan.com';

    $name         = $postData['contactName'];
    $company_name = $postData['contactCompanyName'];
    $topic        = $postData['contactTopic'];
    $email        = $postData['contactEmail'];
    $mobile       = $postData['contactMobile'];

    // Acknowledgement Mail to User
    $subject = 'Greetings from UniKwan';
    $message = "
        Dear {$name},<br><br>

        Your request has been submitted.<br><br>

        Thanks so much for reaching out to us.<br><br>

        We receive many inquiries and thoughtfully review each one.
        We appreciate your patience with our reply.<br><br>

        Thanks,<br>
        Team UniKwan
    ";

    $userMailSent = sendMail(
        $adminEmail,
        $email,
        $subject,
        $message
    );

    if ($userMailSent) {

        // Notification Mail to Admin
        $subject = "Contact request from {$email}";
        $message = "
            <strong>Contact Details</strong><br><br>

            Name: {$name}<br>
            Company Name: {$company_name}<br>
            Discuss On: {$topic}<br>
            Email ID: {$email}<br>
            Mobile No.: {$mobile}
        ";

        $adminMailSent = sendMail(
            $adminEmail,
            $clientAdminEmail,
            $subject,
            $message
        );

        if ($adminMailSent) {
            echo json_encode([
                "success" => true,
                "message" => "Emails sent successfully.",
            ]);
        } else {
            echo json_encode([
                "success" => false,
                "message" => "User email sent but admin email failed.",
            ]);
        }
    } else {

        echo json_encode([
            "success" => false,
            "message" => "Failed to send acknowledgement email.",
        ]);
    }
}

function sendMail($from, $to, $subject, $message)
{
    try {

        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host     = 'smtp-relay.brevo.com';
        $mail->SMTPAuth = true;
        $mail->Username = '926c3d001@smtp-brevo.com';

        $mail->Password = 'xsmtpsib-439ed7ce5fc82b76f61285235145304b97fb1b18c5e46ba2815bcb410fc28a0f-sdljUVMbP6Rg3Swx';

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom($from, 'UniKwan Innovations');
        $mail->addAddress($to);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;

        return $mail->send();

    } catch (Exception $e) {

        error_log('Mailer Error: ' . $mail->ErrorInfo);

        return false;
    }
}
