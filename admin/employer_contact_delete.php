<?php 
 include('connection/db.php');
 $del=$_GET['del'];
 
  $query=mysqli_query($conn,"delete from contact_admin where id ='$del'");
  if ($query) {
  	 echo "<script>alert('Record has been successfully Removed !!!!')</script>";
  	 header('location:employer_contact.php');
  }else{
  	echo "<script>alert('Record has been successfully Deleted !!!!')</script>";
  }

 ?>