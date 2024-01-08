<?php
$page = 'contact';
include('connection/db.php');
include('include/header.php');
include('include/sidebar.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];

    // Insert data into the database
    $query = "INSERT INTO contact_admin (name, email, subject, msg) VALUES ('$name', '$email', '$subject', '$msg')";

    if (mysqli_query($conn, $query)) {
        try {
            echo "<script>alert('Thanks for contacting us. We will get back to you soon.')</script>";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "<script>alert('Error inserting data. Please try again.')</script>";
    }
}
?>

<?php 
include('connection/db.php');
$query1=mysqli_query($conn,"select * from employer where email='{$_SESSION['email']}'");

while ($row1=mysqli_fetch_array($query1)) {
	 $first_name=$row1['first_name'];
   $last_name=$row1['last_name'];
	 $email=$row1['email'];
}?>

<!-- HTML code for the contact form goes here -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="emp_dashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Contact Admin</a></li>
            </ol>
          </nav>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <br>
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
           <form action="contactAdmin.php" method="POST" style="margin-bottom:10px;" class="bg-white p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" value="<?php echo $first_name?>" name="name" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" value="<?php echo $email?>" name="email" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea  id="" cols="30" rows="7" name="msg" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group" style="text-align:center;">
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
    </main>