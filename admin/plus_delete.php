<?php 
 include('connection/db.php');
 $del=$_GET['del'];
 
  $query=mysqli_query($conn,"delete from plus_card_details where id ='$del'");
  if ($query) {
  	//  echo "<script>alert('Record has been successfully Removed!!!')</script>";
  	//  header('location:deskanoPlus.php');
    echo "<script>alert('Record has been successfully Removed!!!'); window.location.href = 'deskanoPlus.php';</script>";
    exit();
  }else{
  	echo "<script>alert('Record has been successfully Deleted !!!!')</script>";
  }

 ?>