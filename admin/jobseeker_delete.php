<?php 
 include('connection/db.php');
 $del=$_GET['del'];
 
  $query=mysqli_query($conn,"delete from jobskeer where id ='$del'");
  if ($query) {
  	 echo "<script>alert('Record has been successfully Deleted !!!')</script>";
  	 header('location:superJobseeker.php');
  }else{
  	echo "<script>alert('Please try again !!!')</script>";
  }

 ?>