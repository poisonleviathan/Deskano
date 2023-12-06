<?php 

include('connection/db.php');
include('include/header.php');
include('include/sidebar.php');
$query=mysqli_query($conn,"select * from employer where email='{$_SESSION['email']}'");

while ($row=mysqli_fetch_array($query)) {
	$img=$row['img'];
	$first_name=$row['first_name'];
    $last_name=$row['last_name'];
	$number=$row['mobile'];
	$email=$row['email'];
    $company=$row['company_name'];
}
 ?>



<?php
 $conn=mysqli_connect("localhost","root","","Deskano");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM employer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
      // Process the data here, for example, print it
      $Email=$row['email'];
      $id=$row['id'];
  }
} else {

}

$conn->close();

?>
<style>
        body {
            background-color: #f0f0f0; /* Background color for the entire page */
        }

        .container {
            margin: 2% auto;
            width: 60%;
            border: 1px solid gray;
            padding: 20px;
            border-radius: 10px;
            backdrop-filter: blur(100px); /* Adjust the blur intensity */
            background-color: rgba(217, 236, 252, 0.8); /* Adjust the background color and opacity */
        }

        .form-control {
            width: 100%;
            padding: 8px;
            margin-top: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        .btn-success {
            background-color: #28a745;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>

 <div class="container" style="padding-left: 5%; padding-right: 5%; margin: 2% auto; width: 60%;">

    <form action="empProfile_add.php" method="POST" id="profile_form" name="profile_form" enctype="multipart/form-data">

        <div class="profile-form">
            <div class="row">
                <div class="col-md-6" style="margin-bottom:10px;">
                    <img src="profile_img/<?php if(!empty($img)) { echo $img; } else { echo 'logo.png'; } ?>" class="img-thumbnail" alt="Profile picture" style="width:100px; height:100px;">
                </div>

                <div class="col-md-6" style="margin-top:auto">
                    <input type="file" style="padding-top:1%; padding-botton:1%" class="form-control" name="img" id="img">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="first_name">Enter Your First Name:</label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="first_name" id="first_name" value="<?php if(!empty($first_name)) echo $first_name; ?>" placeholder="Enter Your first name..." class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="last_name">Enter Your Last Name:</label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="last_name" id="last_name" value="<?php if(!empty($last_name)) echo $last_name; ?>" placeholder="Enter Your last name..." class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="number">Enter Your Mobile Number:</label>
                </div>
                <div class="col-md-6">
                    <input type="Number" name="number" id="number" value="<?php if(!empty($number)) echo $number; ?>" placeholder="Enter Your Mobile Number..." class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="company">Enter Your Company:</label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="company" id="company" value="<?php if(!empty($company)) echo $company; ?>" placeholder="Enter Your Company..." class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="email">Your Email:</label>
                </div>
                <div class="col-md-6">
                    <input type="Email" name="email" id="email" value="<?php if(!empty($email)) echo $email; ?>" placeholder="Your Email..." class="form-control" readonly>
                </div>
            </div>

            <div class="row" style="margin-top: 20px;">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <input type="submit" id="submit" value="Update" name="submit" class="btn btn-success">
                </div>
            </div>

        </div>

    </form>

</div>




<?php 
include('connection/db.php');
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $img = $_POST['img'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $company = $_POST['company'];
}
$query = mysqli_query($conn, "UPDATE employer SET first_name = '$first_name', last_name = '$last_name', mobile = '$number', company_name = '$company' where email = '{$_SESSION['email']}'");

if (isset($_POST['submit']) && $query){
    echo "<script>alert('Record has been updated successfully!')</script>";
}

if(!empty($img)){
  $sql = mysqli_query($conn, "UPDATE employer SET img = '$img' where email = '{$_SESSION['email']}'");
  if (isset($_POST['submit']) && $sql){

  }else{

  }
}

?>

</div>
   	 </form>


   </div>