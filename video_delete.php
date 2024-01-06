<?php 
 include('connection/db.php');
 $del=$_GET['del'];
 
  $query=mysqli_query($conn,"delete from learn where id ='$del'");
  if ($query) {
  	 echo "<script>alert('Record has been successfully Deleted !!!!')</script>";
  	 header('location:uploads.php');
  }else{
  	echo "<script>alert('Something wrong, please try again!')</script>";
  }

 ?>