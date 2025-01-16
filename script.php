<?php

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';
    $citizenship = isset($_POST['citizenship']) ? $_POST['citizenship'] : '';
    $language = isset($_POST['language']) ? $_POST['language'] : '';
    $whatsapp = isset($_POST['whatsapp']) ? $_POST['whatsapp'] : '';
    $telegram = isset($_POST['telegram']) ? $_POST['telegram'] : '';

    require_once __DIR__ . '/vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    $mail = new PHPMailer(true);

    try {
        // Enable SMTP debugging (optional for troubleshooting)
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

        $mail->isSMTP();
        $mail->SMTPAuth = true;

        // Hostinger SMTP settings
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587; // Commonly used Hostinger port
        $mail->Username = 'client@movetogeorgia.ge'; // Replace with your Hostinger email
        $mail->Password = 'q6^FN+TU'; // Replace with your email password

        // Set sender and recipient
        $mail->setFrom('client@movetogeorgia.ge', 'Your Name'); // Replace with your email and name
        $mail->addAddress('a.tsipuria@adgeeks.ge', 'Client Name'); // Replace with recipient details

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Test Email from PHP';
        $mail->Body = "
            <strong>Name:</strong> $name<br>
            <strong>Email:</strong> $email<br>
            <strong>Message:</strong><br>$message<br>
            <strong>Citizenship:</strong> $citizenship<br>
            <strong>Language:</strong> $language<br>
            <strong>WhatsApp:</strong> $whatsapp<br>
            <strong>Telegram:</strong> $telegram
        ";

        // Send email and redirect on success
        if ($mail->send()) {
            header("Location: thanks.php");
            exit();
        } else {
            echo 'Message could not be sent.';
        }

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

?>