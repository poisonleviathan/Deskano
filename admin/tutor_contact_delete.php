<?php 
 include('connection/db.php');
 $del=$_GET['del'];
 
  $query=mysqli_query($conn,"delete from tutor_contact where id ='$del'");
  if ($query) {
  	 echo "<script>alert('Record has been successfully Removed !!!!')</script>";
  	 header('location:tutor_contact.php');
  }else{
  	echo "<script>alert('Record has been successfully Deleted !!!!')</script>";
  }

 ?>