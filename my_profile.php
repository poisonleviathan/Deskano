<?php 

include('connection/db.php');
include('include/header.php');
include('include/my_profile.php');
$query=mysqli_query($conn,"select * from profiles where user_email='{$_SESSION['email']}'");

while ($row=mysqli_fetch_array($query)) {
	 $img=$row['img'];
	 $first_name=$row['first_name'];
   $last_name=$row['last_name'];
	 $dob=$row['dob'];
	 $number=$row['number'];
	 $email=$row['email'];
   $user_email=$row['user_email'];
}
 ?>



<?php
 $conn=mysqli_connect("localhost","root","","Deskano");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM jobskeer";
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
  .container1 {
    margin: 2% auto;
    width: 60%;
    border: 1px solid gray;
    padding: 20px;
    border-radius: 10px;
    backdrop-filter: blur(100px); /* Adjust the blur intensity */
    background-color: rgba(217, 236, 252, 0.8); /* Adjust the background color and opacity */
}

.form-control, .form-group {
    width: 85%;
    padding: 2px;
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

 <br>
  <div class="container1" style="padding-left: 5%; padding-right: 5%; margin-left: 25%; width: 50%; border: 1px solid gray; padding: 10px; ">
    <form action="profile_add.php" method="POST" id="profile_form" name="profile_form" enctype="multipart/form-data">
      <div style="margin-left: 30%;">
      <div class="row">
          <div class="col-md-6" style="margin-bottom:10px;">
            <img src="profile_img/<?php if(!empty($img)){ echo $img;}else{ echo 'logo.png' ;} ?>" class="img-thumbnail" alt="Profile picture" style="width:100px; height:100px;">
          </div>

          <div class="col-md-6" style="margin-top:auto">
            <input type="file" class="form-control" name="img" id="img" style="border:solid black 1px; padding-top:1%; padding-botton:1%">
          </div>
      </div>
      
  
      <div class="row">
        <div class="col-md-6">
          <td> Enter Your First Name : </td>
        </div>
        <div class="col-md-6">
          <td><input type="text" name="first_name" id="first_name" value="<?php if(!empty($first_name)) echo $first_name; ?>" placeholder="Enter Your first name ..." class="form-group" > </td>
        </div>
      </div>

      <div class="row">
          <div class="col-md-6">
            <td> Enter Your Last Name : </td>
          </div>
          <div class="col-md-6">
            <td><input type="text" name="last_name" id="last_name" value="<?php if(!empty($last_name)) echo $last_name; ?>" placeholder="Enter Your last name ..." class="form-group" > </td>
          </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <td> Enter Your DOB : </td>
        </div>
        <div class="col-md-6">
          <td><input type="date" name="dob" id="dob" value="<?php if(!empty($dob))  echo $dob; ?>" placeholder="Enter Your dob ..." class="form-group" > </td>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <td> Enter Your MObile Number : </td>
        </div>
          <div class="col-md-6">
          <td><input type="Number" name="number" id="number" value="<?php if(!empty($number)) echo $number; ?>" placeholder="Enter Your MObile Number ..." class="form-group" > </td>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <td> Your Email : </td>
        </div>
        <div class="col-md-6">
          <td><input type="Email" name="email" id="email" value="<?php if(!empty($email)) echo $email; ?>" placeholder="Your Email ..." class="form-group" readonly> </td>
          <td><input type="submit" id="submit" placeholder="Update" value="Update" name="submit" class="btn btn-success"></td>
        </div>
      </div>
  <div class="form-group">
    
  </div>



  <?php

  $query=mysqli_query($conn,"select * from radioopt where user='{$_SESSION['email']}'");
  $row=mysqli_fetch_array($query);
    $count=mysqli_num_rows($query);
  if($count>0){


  ?>
  <h3>You gave a score of <?php echo $row['marks']; ?> out of 25."</h3>
  <?php } ?>


  <?php 
  include('connection/db.php');
  if(isset($_POST['submit'])){
      $id = $_POST['id'];
      $img = $_POST['img'];
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $dob = $_POST['dob'];
      $number = $_POST['number'];
      $email = $_POST['email'];
      $user_email = $_POST['user_email'];
  }
  $query = mysqli_query($conn, "UPDATE profiles SET first_name = '$first_name', last_name = '$last_name', dob = '$dob', number = '$number', email = '$email', user_email = '$user_email'");
  $query1 = mysqli_query($conn, "UPDATE jobskeer SET first_name = '$first_name', last_name = '$last_name', dob = '$dob', mobile_number = '$number', email = '$email'");
  if (isset($_POST['submit']) && $query1){

  }
  if (isset($_POST['submit']) && $query){
      echo "<script>alert('Record has been updated successfully!')</script>";
  }

  if(!empty($img)){
    $sql = mysqli_query($conn, "UPDATE profiles SET img = '$img'");
    if (isset($_POST['submit']) && $sql){

    }else{

    }
  }

  ?>

      </div>
    </form>
  </div>
</div>