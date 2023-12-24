<?php 
 include('connection/db.php');
 $del=$_GET['del'];
 
  $query=mysqli_query($conn,"delete from employer where id ='$del'");
  if ($query) {
  	 echo "<script>alert('Record has been successfully Deleted !!!')</script>";
  	 header('location:superEmployers.php');
  }else{
  	echo "<script>alert('Please try again !!!')</script>";
  }

 ?>