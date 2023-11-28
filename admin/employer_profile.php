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


 <br>
   <div style="margin-left: 25%; width: 50%; border: 1px solid gray; padding: 10px; ">
   	 <form action="empProfile_add.php" method="POST" id="profile_form" name="profile_form" enctype="multipart/form-data">
   	 	
      <div class="row">
      	  <div class="col-md-6">
      	  	<img src="profile_img/<?php if(!empty($img)){ echo $img;}else{ echo 'logo.png' ;} ?>" class="img-thumbnail" alt="Profile picture">
      	  </div>

          <div class="col-md-4">
           <input type="file" class="form-control" name="img" id="img">
          </div>
          
      </div>
     
 <div style="margin-left: 30%;">
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
 	 	 <td> Enter Your Mobile Number : </td>
 	 </div>

 	  <div class="col-md-6">
 	 	 <td><input type="Number" name="number" id="number" value="<?php if(!empty($number)) echo $number; ?>" placeholder="Enter Your Mobile Number ..." class="form-group" > </td>
 	 </div>
 	 
 </div>

 <div class="row">
    <div class="col-md-6">
        <td> Enter Your Company : </td>
    </div>
    <div class="col-md-6">
        <td><input type="text" name="company" id="company" value="<?php if(!empty($company)) echo $company; ?>" placeholder="Enter Your Company ..." class="form-group" > </td>
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
    
 	 	  
</div>
<div class="form-group">
  
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