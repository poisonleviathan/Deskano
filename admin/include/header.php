
<?php 
session_start();
if ( $_SESSION['email']==true) {
 
}else{
   header('location:admin_login.php');
}

 ?>

 <?php 
 include('../connection/db.php');
 $query=mysqli_query($conn,"select * from admin_login  where admin_email='{$_SESSION['email']}' ");
$data = mysqli_fetch_array($query);  

$sql=mysqli_query($conn,"select * from employer  where email='{$_SESSION['email']}' ");
$info = mysqli_fetch_array($sql);  
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Deskano</title>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<style type="text/css">
  .nav-item a{
  color: black !important;
}
</style>



  <body>
       <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0"> 
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Hello </br> <?php if(!empty($data['first_name'])) echo $data['first_name'] ?> <?php if(!empty($info['first_name'])) echo $info['first_name'] ?> </a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class=" text-nowrap">
          <a class="nav-link" href="logout.php" style="color: light gray">Sign out</a>
        </li>
      </ul>
    </nav>