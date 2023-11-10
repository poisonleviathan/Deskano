<?php 
   $page='home';
   include('include/header.php');
   
    ?>
    <section class="ftco-about d-md-flex"></section>
    <div class="container" style="padding-top: 8%;">
        <p>
            Join Job Portal today and take the next step in your career journey. Whether you're a job seeker or an employer, our platform is here to help you succeed. Sign up now and unlock a world of opportunities!<br>
            Feel free to customize this text to align with your specific job portal's mission, features, and branding. Additionally, consider adding any unique selling points or services that set your job portal apart from others in the industry.
        </p>
        <div style=" margin-bottom: 10px;box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px; padding: 20px;">
            <div class="signup-container">
                <form class="signup-form" action="employer_sign_up.php" method="post">
                    <h1>Employer Sign Up</h1>
                    <div class="row" style="margin-bottom:9px">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label for="first_name">First Name <span style="color:red">*</span></label>
                            <input type="text" id="first_name" class="form-control" name="first_name"  required autofocus>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label for="middle_name">Middle Name</label>
                            <input type="text" id="middle_name" class="form-control" name="middle_name" >
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
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
                            <label for="dob">Company Name <span style="color:red">*</span></label>
                            <input type="text"  class="form-control" id="company_name" name="company_name"  required autofocus>
                        </div>
                    </div>
                      <div class="row" style="margin-bottom:9px">
                        <div class="col-sm-12 col-lg-12 col-md-12">
                            <label for="dob">About Company <span style="color:red">*</span></label>
                            <textarea rows="3" name="des" class="form-control" required></textarea>
                            <!-- <input type="date"  class="form-control" id="company_name" name="company_name"  required autofocus> -->
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
   include('include/footer.php');
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {


    // Check if the connection is successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
// Validate and sanitize user inputs
 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $password = $_POST['Password']; // Do not MD5 hash yet
 $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
 $mobile_number = mysqli_real_escape_string($conn, $_POST['mobile_number']);
 $middle_name = mysqli_real_escape_string($conn, $_POST['middle_name']);
 $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
 $company_name = mysqli_real_escape_string($conn, $_POST['company_name']);
 $des = mysqli_real_escape_string($conn, $_POST['des']);


// Validation checks
if (empty($email) || empty($password) || empty($first_name) || empty($last_name) || empty($des) || empty($mobile_number) || empty($company_name) ) {
    echo "<script>alert('Please fill in all required fields!')</script>";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Please enter a valid email address!')</script>";
} elseif (!preg_match("/^\d{10}$/", $mobile_number)) {
    echo "<script>alert('Please enter a valid 10-digit mobile number!')</script>";
} elseif (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+}{:;'?\/>,<.]).{6,}$/", $password)) {
    echo "<script>alert('Password must be at least 6 characters long and include at least one uppercase letter, one lowercase letter, one digit, and one special character!')</script>";
} else {
    // Check if the email is already registered
    $checkEmailQuery = "SELECT * FROM admin_login WHERE admin_email = '$email'";
    $result = mysqli_query($conn, $checkEmailQuery);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('This email address is already registered!')</script>";
    } else {
        // Check if the date of birth is not in the future and the person is at least 18 years old

            // Hash the password
            $hashedPassword = md5($password);

            // Insert data into the database
               $query = "INSERT INTO employer(first_name, last_name, email, password, company_name, mobile, status) VALUES ('$first_name', '$last_name', '$email', '$hashedPassword', '$company_name', '$mobile_number', 'Active')";
                if (mysqli_query($conn, $query)) {
                    echo "<script>alert('Your registration was successful! We will review your eligibility.')</script>";
                    echo "<script>window.location.href = 'http://localhost/job_portal'; </script>";
                } else {
                echo "<script>alert('Some Error Please Try Again!')</script>";
            }
        
    }
}


    // Close the database connection
    mysqli_close($conn);
}
?>
