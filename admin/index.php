<?php

session_start();

if ( $_SESSION['email']==true) {
  header('location:admin_dashboard.php');
 
}else{
   header('location:admin_login.php');
}

?>