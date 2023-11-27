<?php 
 include('connection/db.php');
 $del=$_GET['del'];
 
  $query=mysqli_query($conn,"delete from contact_form where id ='$del'");
  if ($query) {
  	 echo "<script>alert('Record has been successfully Removed !!!!')</script>";
  	 header('location:contect_us.php');
  }else{
  	echo "<script>alert('Record has been successfully Deleted !!!!')</script>";
  }

 ?>