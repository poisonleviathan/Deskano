<?php
$page = 'contact';
include('include/tutor_header.php');
include('include/contactHeader.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'admin/email/vendor/autoload.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];

    // Insert data into the database
    $query = "INSERT INTO tutor_contact (name, email, subject, msg) VALUES ('$name', '$email', '$subject', '$msg')";

    if (mysqli_query($conn, $query)) {
    //     try {
    //         // Server settings for sending email
    //         $mail = new PHPMailer(true);

    //         // Enable verbose debug output
    //         $mail->SMTPDebug = 0;

    //         // Set mailer to use SMTP
    //         $mail->isSMTP();

    //         // Specify main and backup SMTP servers
    //         $mail->Host = 'smtp.gmail.com';

    //         // Enable SMTP authentication
    //         $mail->SMTPAuth = true;

    //         // SMTP username (your Gmail email)
    //         $mail->Username = 'learncodezone@gmail.com';

    //         // SMTP password (your Gmail password)
    //         $mail->Password = 'ushnezokuknlhkcu';

    //         // Enable TLS encryption
    //         $mail->SMTPSecure = 'tls';

    //         // TCP port to connect to
    //         $mail->Port = 587;

    //         // Sender and recipient email
    //         $mail->setFrom('learncodezone@gmail.com', 'Learn Code Zone');
    //         $mail->addAddress($email, $name);

    //         // Email subject and body
    //         $mail->Subject = 'Thank You for Contacting Us';
    //         $mail->Body = 'Thank you for contacting us. We will get back to you as soon as possible.';

    //         // Send the email
    //         $mail->send();

    //         echo "<script>alert('Thanks for contacting us. We will get back to you soon.')</script>";
    //     } catch (Exception $e) {
    //         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    //     }
    // } else {
    //     echo "<script>alert('Error inserting data. Please try again.')</script>";
    }
}
?>

<!-- HTML code for the contact form goes here -->

    <section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> 542, Peradeniya Rd, Kandy</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://+94778358111">+94778358111</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:deskano.official@gmail.com">deskano.official@gmail.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website:</span> <a href="#">deskanoofficial.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
           <form action="tutor_contact.php" method="POST" class="bg-white p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea  id="" cols="30" rows="7" name="msg" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.646098016557!2d80.61746657499991!3d7.281047492726175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3673f5e22ab3b%3A0xcbaef11262bec73!2sAPIIT%20Kandy%20Campus!5e0!3m2!1sen!2slk!4v1701073955204!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>
      </div>
    </section>
		<style>
      .ftco-section-parallax .parallax-img{
        background:#CF9966;
      }
    </style>
		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

      <?php 

include('include/footer.php');


    ?>