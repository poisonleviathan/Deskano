<?php 
session_start();
session_unset();


include('connection/db.php');


	header('location:../index.php');


 ?>