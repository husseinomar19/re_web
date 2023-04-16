<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Feedback Form</title>
</head>
<body>
    <h2>Feedback Form</h2>
    <form  method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="5"></textarea><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require_once 'src/Exception.php';
require_once 'src/PHPMailer.php';
require_once 'src/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'batoaster@gmail.com';              // SMTP username
    $mail->Password   = 'yucyhplgjjqjudjz';              // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($_POST['email'], $_POST['name']);                 // Set the sender email address and name
    $mail->addAddress('batoaster@gmail.com', $_POST['email']);         // Add a recipient email address and name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Feedback from ' . $_POST['name'] .$_POST['email'];
    $mail->Body    = $_POST['message'];

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
