<?php
include('connection/db.php');


if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $number = $_POST['mobile'];
    $gender = $_POST['gender'];

    if (strlen($number) != 10) {
        echo '<p class="lead">Please Enter a Valid 10-Digit Mobile Number</p>';
        exit(0);
    }

    $query = "SELECT * FROM blog_register WHERE email='{$_SESSION['email']}'";
    $sql = mysqli_query($conn, $query);
    if (mysqli_num_rows($sql) > 0) {
          echo '<script>alert(Warning! Already Applied);</script>';

    } else {
        $sql = "INSERT INTO blog_register (first_name, middle_name, last_name, email, mobile, gender) VALUES ('$first_name', '$middle_name', '$last_name', '$email', '$number', '$gender')";
        
        $query = mysqli_query($conn, $sql);

      if ($query) {
          echo '<div><div class="alert alert-warning">
                <strong>Success!</strong> Your Form Successfully Added
              </div></div>';
      } else {
          echo '<div><div class="alert alert-danger">
                <strong>Error!</strong> Form submission failed
              </div></div>';
      }
    }
}
?>