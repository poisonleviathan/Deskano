<?php 
include('connection/db.php');

  $category=$_POST['category'];
  $Description=$_POST['Description'];

 $query= mysqli_query($conn,"insert into video_category(category,description)values('$category','$Description')");

 // var_dump($query);
 if ($query) {
 	 echo "Data has been successfully Inserted !";
 }else{
 	echo "some error please try again !";
 }
 
 ?>