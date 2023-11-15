<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'email/vendor/autoload.php';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $to = $_POST['to'];
        $from = $_POST['from'];
        $body = $_POST['body'];
        $id = $_POST['id'];

        // Send interview invitation email
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 20;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'deskano.official@gmail.com';
        $mail->Password = 'deskano1234';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 587;
        $mail->setFrom($from, 'Deskano');
        $mail->addAddress($to, 'Job Applicant');
        $mail->isHTML(true);
        $mail->Subject = 'Interview Call';
        $mail->Body = $body;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();

        // If the email is sent successfully, delete the record from the database
        include('connection/db.php');
        $query = mysqli_query($conn, "DELETE FROM job_apply WHERE id = '$id'");

        if ($query) {
            echo '<h1>Message has been sent and record has been deleted</h1>';
        } else {
            echo '<h1>Message has been sent, but an error occurred while deleting the record</h1>';
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
<button class="btn btn-success btn-lg" onclick="window.history.back();"> Back</button>
