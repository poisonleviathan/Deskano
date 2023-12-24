<?php 
   $page='home';
   include('include/header.php');
   $conn=mysqli_connect("localhost","root","","deskano");
    ?>
    <section class="ftco-about d-md-flex"></section>
    <div class="container" style="padding-top: 8%;">
        <p>
            Join Deskano today and take the next step in your career journey. Whether you're a job seeker, an employer or a tutor, our platform is here to help you succeed. Sign up now and unlock a world of opportunities!<br>
            Feel free to customize this text to align with your specific Deskano's mission, features, and branding. Additionally, consider adding any unique selling points or services that set your Deskano apart from others in the industry.
        </p>
        <div style=" margin-bottom: 10px;box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px; padding: 20px;">
            <div class="signup-container">
                <form class="signup-form" action="sign_up.php" method="post">
                    <h1>Job Seekers Sign Up</h1>
                    <div class="row" style="margin-bottom:9px">
                        <div class="col-sm-12 col-lg-6 col-md-6">
                            <label for="first_name">First Name <span style="color:red">*</span></label>
                            <input type="text" id="first_name" class="form-control" name="first_name"  required autofocus>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6">
                            <label for="last_name">Last Name <span style="color:red">*</span></label>
                            <input type="text" id="last_name" class="form-control" name="last_name"  required autofocus>
                        </div>
                    </div>          

                    <div class="row" style="margin-bottom:9px">
                        <div class="col-sm-12 col-lg-6 col-md-6">
                            <label for="mobile_number">Mobile Number <span style="color:red">*</span></label>
                            <input type="number" class="form-control" id="mobile_number" name="mobile_number"  required autofocus>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6">
                            <label for="dob">Date Of Birth <span style="color:red">*</span></label>
                            <input type="date"  class="form-control" id="dob" name="dob"  required autofocus>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom:9px">
                    <div class="col-sm-12 col-lg-6 col-md-6">
                        <label for="experience">Experience <span style="color:red">*</span></label>
                        <input type="number" class="form-control" name="experience" class="form-control" required>
                    </div>
                    <div class="col-sm-12 col-lg-6 col-md-6" id="salery">
                        <label for="salary">Annual Salary</label>
                       <input type="number" class="form-control" name="salary" class="form-control">
                    </div>
                      
                    </div>
                       

                  <div class="row" style="margin-bottom:9px">
                    <div class="col-lg-6" id="college_name">
                        <label for="collegename">Last Qualification <span style="color:red">*</span></label>
                       <input type="text" name="qualification" class="form-control" required >      
                    </div>
                    <div class="col-lg-6" id="college_name">
                        <label for="collegename">Name of College <span style="color:red">*</span></label>
                       <input type="text" name="collegename" class="form-control"required >      
                    </div>                    
                  </div>

                    <div class="row" style="margin-bottom:9px"> 
                        <div class="col-lg-6 col-sm-12">
                            <label for="email">Email address <span style="color:red">*</span></label>
                            <input type="email" id="email" class="form-control" name="email"  required autofocus>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <label for="inputPassword">Password <span style="color:red">*</span></label>
                            <input type="password"  class="form-control" id="inputPassword" name="Password"  required>
                              <small>Password must be at least 6 characters long and include at least one uppercase letter, one lowercase letter, one digit, and one special character.</small>
                        </div>
                    </div>

                    <input type="submit" class="btn btn-primary" name="submit" value="Sign Up">
                   
                </form>
                <br>
                <hr>
                 <a href="login.php">Already Have an Account?</a>
            </div>
        </div>
    </div>

    <?php
    use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'admin/email/vendor/autoload.php';
   include('include/footer.php');
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {


    // Check if the connection is successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
// Validate and sanitize user inputs
$email = mysqli_real_escape_string($conn, $_POST['email']);
echo $password = $_POST['Password']; // Do not MD5 hash yet
$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
$dob = mysqli_real_escape_string($conn, $_POST['dob']);
$mobile_number = mysqli_real_escape_string($conn, $_POST['mobile_number']);
$salary = mysqli_real_escape_string($conn, $_POST['salary']);
$collegename = mysqli_real_escape_string($conn, $_POST['collegename']);
$experience = mysqli_real_escape_string($conn, $_POST['experience']);
$qualification = mysqli_real_escape_string($conn, $_POST['qualification']);

// Validation checks
if (empty($email) || empty($password) || empty($first_name) || empty($last_name) || empty($dob) || empty($mobile_number) || empty($experience) || empty($qualification)) {
    echo "<script>alert('Please fill in all required fields!')</script>";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Please enter a valid email address!')</script>";
} elseif (!preg_match("/^\d{10}$/", $mobile_number)) {
    echo "<script>alert('Please enter a valid 10-digit mobile number!')</script>";
} elseif (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+}{:;'?\/>,<.]).{6,}$/", $password)) {
    echo "<script>alert('Password must be at least 6 characters long and include at least one uppercase letter, one lowercase letter, one digit, and one special character!')</script>";
} else {
    // Check if the email is already registered
    $checkEmailQuery = "SELECT * FROM jobskeer WHERE email = '$email'";
    $result = mysqli_query($conn, $checkEmailQuery);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('This email address is already registered!')</script>";
    } else {
        // Check if the date of birth is not in the future and the person is at least 18 years old
        $dobTimestamp = strtotime($dob);
        $eighteenYearsAgo = strtotime('-18 years');
        $currentDate = strtotime('now');

        if ($dobTimestamp > $currentDate) {
            echo "<script>alert('Date of birth cannot be in the future!')</script>";
        } elseif ($dobTimestamp > $eighteenYearsAgo) {
            echo "<script>alert('You must be at least 18 years old!')</script>";
        } else {
            // Hash the password
            $hashedPassword = md5($password);

            // Insert data into the database
            // $query = "INSERT INTO jobskeer (email, password, first_name, middle_name, last_name, dob, mobile_number, exp, college, anual_salery, status, qualification) VALUES ('$email', '$hashedPassword', '$first_name', '$middle_name', '$last_name', '$dob', '$mobile_number', '$experience', '$collegename', '$salary', 'Active', '$qualification')";

            $conn1=mysqli_connect("localhost","root","","deskano");
            $conn2=mysqli_connect("localhost","root","","deskano");

            $querry ="INSERT INTO profiles (first_name, last_name, dob, number, email, user_email) VALUES ('$first_name', '$last_name', '$dob', '$mobile_number', '$email', '$email')";
            $query = "INSERT INTO jobskeer (email, password, first_name, last_name, dob, mobile_number, exp, status) VALUES ('$email', '$hashedPassword', '$first_name', '$last_name', '$dob', '$mobile_number', '$experience', 'Active')";

            if ($conn1->query($querry) == TRUE) {

            }

            if (mysqli_query($conn1, $query)) {
                        try {
                                // Server settings for sending email
                                $mail = new PHPMailer(true);

                                // Enable verbose debug output
                                $mail->SMTPDebug = 0;

                                // Set mailer to use SMTP
                                $mail->isSMTP();

                                // Specify main and backup SMTP servers
                                $mail->Host = 'smtp.gmail.com';

                                // Enable SMTP authentication
                                $mail->SMTPAuth = true;

                                // SMTP username (your Gmail email)
                                $mail->Username = 'deskano.official@gmail.com';

                                // SMTP password (your Gmail password)
                                $mail->Password = 'deskano1234';

                                // Enable TLS encryption
                                $mail->SMTPSecure = 'tls';

                                // TCP port to connect to
                                $mail->Port = 587;

                                // Sender and recipient email
                                $mail->setFrom('Deskano.official.com', 'Largest Online Job Platform');
                                $mail->addAddress($email, $name);

                                // Email subject and body
                                $mail->Subject = 'Thank You for choosing Us';
                               $mail->Body = ' <p>Dear '.$first_name.',<br></p> Thank you for joining our website. We are excited to have you as a part of our community.<br>
                                     <p>Thank you once again for choosing us. We look forward to serving you!</p>
                                                <p>Sincerely,</p>
                                                <p>The Deskano Team</p>';


                                // Send the email
                                $mail->send();

                                echo "<script>alert('Your registration was successful! We will review your eligibility.')</script>";
                            } catch (Exception $e) {
                                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                            }
                echo "<script>window.location.href = 'http://localhost/Deskano'; </script>";
            } else {
                echo "<script>alert('Some Error Please Try Again!')</script>";
            }
        }
    }
}


    // Close the database connection
    mysqli_close($conn);
    $conn1->close();
$conn2->close();
}
?>
