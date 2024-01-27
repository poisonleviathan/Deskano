<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #d3d3d3; /* Light Gray Background */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .mem_form{
            width: 50%;
            margin-left:450px;
            margin-right:auto;
        }

        .registration-form {
            background-color: #fff; /* White Background */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            overflow: hidden;
            width: 80%;
        }

        .form-header {
            background-color: #808080; /* Darker Gray Background */
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .form-header h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .form-header p {
            font-size: 14px;
            margin-bottom: 20px;
        }

        .form-container {
            padding: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
        }

        .radio-group {
            display: flex;
            align-items: center;
        }

        .radio {
            margin-right: 20px;
        }

        .submit-button {
            border: none;
            padding: 10px;
            width: 100%;
            background-color: #696969; /* Dark Gray Button */
            color: #fff;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: #484848; /* Darker Gray on Hover */
        }

        .form-footer {
            text-align: center;
            padding: 20px;
            background-color: #808080; /* Darker Gray Background */
            color: #fff;
            border-radius: 0 0 12px 12px;
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            z-index: 2;
        }

        .modal p {
            margin-bottom: 20px;
        }

        .modal button {
            border: none;
            padding: 10px;
            background-color: #696969; /* Dark Gray Button */
            color: #fff;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
        }

        .modal button:hover {
            background-color: #484848; /* Darker Gray on Hover */
        }

        .back-top-btn {
            position: fixed;
            bottom: 10px;
            right: 20px;
            background-color: var(--portland-orange);
            color: var(--white);
            font-size: 25px;
            padding: 10px;
            border-radius: 50%;
            box-shadow: var(--shadow-2);
            opacity: 0;
            visibility: hidden;
            transition: var(--transition-1);
            z-index: 4;
            }

            .back-top-btn.active {
            opacity: 1;
            visibility: visible;
            transform: translateY(-10px);
        }
    </style>
    <title>User Registration</title>

      <link rel="stylesheet" href="./css/plusbanner.css">
  

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Bangers&family=Carter+One&family=Nunito+Sans:wght@400;700&display=swap"
    rel="stylesheet">
</head>

<body>
<header class="header" data-header>
    <div class="container" style="float:left;">

    <nav class="navbar" style="margin-left:auto; margin-right:auto;" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a style="cursor:pointer; color:black;" onclick="goBack()" class="navbar-link" data-nav-link>Back</a>
          </li>

          <script>
            function goBack() {
                window.history.back();
            }
        </script>

        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="toggle manu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="menu-icon"></ion-icon>
        <ion-icon name="close-outline" aria-label="true" class="close-icon"></ion-icon>
      </button>

    </div>
  </header>
    <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
        <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
    </a>
    <form class="mem_form" action="member.php" method="post">
        <div class="registration-form">
            <div class="form-header">
                <h2>Register Now</h2>
                <p>You're just a step away from DESKANO family </p>
            </div>
            <div class="form-container">
                <div class="form-group">
                    <input type="text" name="first_name" class="form-control" placeholder="First Name" required/>
                </div>
                <div class="form-group">
                    <input type="text" name="middle_name" class="form-control" placeholder="Middle Name" />
                </div>
                <div class="form-group">
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" required/>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required/>
                </div>
                <div class="form-group">
                    <input type="text" name="mobile" class="form-control" placeholder="Mobile Number" required/>
                </div>
                <div class="form-group radio-group">
                    <label class="radio">
                        <input type="radio" name="gender" value="male" checked>
                        <span> Male </span>
                    </label>
                    <label class="radio">
                        <input type="radio" name="gender" value="female">
                        <span>Female </span>
                    </label>
                </div>
                <button class="submit-button" type="submit" name="submit">Register</button>
            </div>
            <div class="form-footer">
                &copy; 2024 DESKANO Blog Registration. All rights reserved.
            </div>
        </div>
    </form>
    

    <?php
include('connection/db.php');

if (isset($_POST['submit'])) {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $middle_name = mysqli_real_escape_string($conn, $_POST['middle_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['mobile']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);

    if (strlen($number) != 10) {
        echo '<p class="lead">Please Enter a Valid 10-Digit Mobile Number</p>';
        exit(0);
    }

    $query = "SELECT * FROM blog_register WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<script>alert("Warning! Already Applied");</script>';
    } else {
        $sql = "INSERT INTO blog_register (first_name, middle_name, last_name, email, mobile, gender) VALUES ('$first_name', '$middle_name', '$last_name', '$email', '$number', '$gender')";
        
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo "<script>alert('You have successfully registerd to DESKANO Blogs'); window.location.href = 'blogIndex.php';</script>";
        } else {
            echo '<div class="alert alert-danger">
                    <strong>Error!</strong> Form submission failed
                  </div>';
        }
    }
}
?>

<div class="overlay" id="overlay"></div>
<div class="modal" id="myModal">
    <p>You are registered!</p>
    <button onclick="closeModalAndRedirect()">Close</button>
</div>

<script>
    function registerUser() {
        document.getElementById('overlay').style.display = 'block';
        document.getElementById('myModal').style.display = 'block';
    }

    function closeModalAndRedirect() {
        document.getElementById('overlay').style.display = 'none';
        document.getElementById('myModal').style.display = 'none';
        window.location.href = 'blogIndex.php';
    }
</script>

</body>

</html>
