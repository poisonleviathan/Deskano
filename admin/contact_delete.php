<?php 
 include('connection/db.php');
 $del=$_GET['del'];
 
  $query=mysqli_query($conn,"delete from contact_form where id ='$del'");
  if ($query) {
    echo "<script>alert('Record has been successfully Removed!!!'); window.location.href = 'contect_us.php';</script>";
  }else{
  	echo "<script>alert('Record has been successfully Deleted !!!!')</script>";
  }

 ?>