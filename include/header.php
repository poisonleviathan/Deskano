<?php 
session_start();
error_reporting(0);
 include('connection/db.php');
 $header=mysqli_query($conn,"select * from profiles where user_email='{$_SESSION['email']}'");
 while ($row=mysqli_fetch_array($header)) {
  $img=$row['img'];
  $name=$row['first_name'];
 }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title style="color:white;">Deskano - Largest Job Platform</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">

    <script src="country-region-dropdown-menu-master/assets/js/geodatasource-cr.js"></script>
    <link rel="stylesheet" href="country-region-dropdown-menu-master/assets/css/geodatasource-countryflag.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">

    <!--FAQ-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    


    <!-- link to all languages po files -->
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/ar/LC_MESSAGES/ar.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/cs/LC_MESSAGES/cs.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/da/LC_MESSAGES/da.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/de/LC_MESSAGES/de.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/en/LC_MESSAGES/en.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/es/LC_MESSAGES/es.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/fr/LC_MESSAGES/fr.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/it/LC_MESSAGES/it.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/ja/LC_MESSAGES/ja.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/ko/LC_MESSAGES/ko.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/ms/LC_MESSAGES/ms.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/nl/LC_MESSAGES/nl.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/pt/LC_MESSAGES/pt.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/ru/LC_MESSAGES/ru.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/sv/LC_MESSAGES/sv.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/vi/LC_MESSAGES/vi.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/zh-cn/LC_MESSAGES/zh-cn.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/zh-tw/LC_MESSAGES/zh-tw.po" />

    <script type="text/javascript" src="country-region-dropdown-menu-master/assets/js/Gettext.js"></script>

<style>

  #ftco-navbar {
    display: block;
    visibility: visible; 
    opacity: 1;
    position: relative;
    z-index: 999;
  }

  .ftco-navbar-light {
    display: block !important;
    background: black !important;
  }

  .collapse {
    display: block!important; 
  }

  .collapsing {
    visibility: visible;
  }

  .navbar-nav {
    display: flex!important;
  }
  .hero-wrap .overlay{
    background:#00000000;
  }

</style>
<style type="text/css">
  .nav-item1 a{
    color: white !important;
  }
</style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body id="body">
    

  <nav class="navbar navbar-expand-lg navbar-light ftco_navbar ftco-navbar-light" id="ftco-navbar">
  <div class="container style="background-color: transparent;>

	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu">Menu</span> 
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item nav-item1 <?php if($page=='home'){echo 'active';} ?>"><a href="index.php" class="nav-link">Home</a></li>
	          <!-- <li class="nav-item <?php if($page=='about'){echo 'active';} ?>"><a href="about.php" class="nav-link">About</a></li> -->

	          <!-- <li class="nav-item <?php if($page=='blog'){echo 'active';} ?>"><a href="blog.php" class="nav-link">Blog</a></li> -->
	          
            <li class="nav-item nav-item1 <?php if($page=='learn'){echo 'active';} ?>"><a href="learnguest.php" class="nav-link">Learn</a></li>

            <li class="nav-item nav-item1 <?php if($page=='shop'){echo 'active';} ?>"><a href="shop.php" class="nav-link">Deskano Shop</a></li>

            <li class="nav-item nav-item1 <?php if($page=='card'){echo 'active';} ?>"><a href="plus.php" class="nav-link">Deskano Plus</a></li>
            
            <li class="nav-item nav-item1 <?php if($page=='contact'){echo 'active';} ?>"><a href="contact.php" class="nav-link">Contact</a></li>

            <li class="nav-item nav-item1 <?php if($page=='faq'){echo 'active';} ?>"><a href="faq.php" class="nav-link">FAQ</a></li>

	            <?php 
             if ( isset( $_SESSION['email'])==true) { ?>
              <li class="nav-item nav-item1 cta mr-md-2"><a href="#" class="nav-link"><?php if (empty($name)) {
                
            echo $_SESSION['email']; } else{ echo $name ;} ?></a></li>
              
              <li  class="nav-item ">

            <div class="dropdown">
               <img src="profile_img/<?php if(empty($img)){echo "logo.png";}else{ echo $img;} ?>" class="img-circle dropdown-toggle" type="button" data-toggle="dropdown" alt="Profile picture" width="50" height="50" style="cursor:pointer">
               <ul class="dropdown-menu" style="padding:10px;">
                <li><a href="my_profile.php" style="color:black;">My Profile</a></li>
                <li ><a href="logout.php" style="color:red;">Logout</a></li>
              </ul>
            </div>
         </li>
              <?php
             }else{ ?>
              <li id="login_btn" class="nav-item cta mr-md-2"><a href="login.php" class="nav-link">Login</a></li>
           
              <?php  
             }
            ?>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->