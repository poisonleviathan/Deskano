<?php 
include('connection/db.php');

  $email=$_POST['email'];
  $username=$_POST['Username'];
  $Password=$_POST['Password'];
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];

 $query= mysqli_query($conn,"insert into admin_login(admin_email,admin_pass,admin_username,	first_name,	last_name, company)values('$email','$Password','$username','$first_name','$last_name', 'Deskano')");

 var_dump($query);
 if ($query) {
 	 echo "Data has been successfully Inserted";
 }else{
  echo "Some error, please try again";
 }
 
 ?>