<?php 
   $page='home';
   include('include/header.php');
?>
        <section class="ftco-about d-md-flex">

    </section>
   <div class="container" style="padding-top: 8%;">
    <!-- <h2>Get Started:</h2> -->
    <p>
      Join Deskano today and take the next step in your career journey. Whether you're a job seeker or an employer, our platform is here to help you succeed. Sign up now and unlock a world of opportunities!<br>
    </p>
    <div class="id_all_jobs">
         <div class="row"  >
      <div class="col-lg-6 col-sm-12 col-md-6" style="margin-bottom:  3%;">
         <div style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px; padding: 40px; ">
            <form class="form-signin" action="login.php" method="post" >
               <!-- <img class="mb-4" src="https://www.thejobsportal.co.za/sites/default/files/jobsportal.png" alt="" style="margin-left: -15%" width="372" height="122"> -->
               <h1 class="h3 mb-3 font-weight-normal">Job Seekers Sign In</h1>
               <p><b>For Demo you can use<br></b> Email: user@user.com <br> Password: User65k@!</p>
               <div class="form-group">
                  <label for="inputEmail" class="sr-only">Email address</label>
                  <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus autocomplete="off">
               </div>
               <div class="form-group">
                  <label for="inputPassword" class="sr-only">Password</label>
                  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
               </div>
               <!--  <div class="checkbox mb-3">
                  <label>
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                  </div> -->
                  <button class="btn btn-lg btn-primary btn-block"  name="submit" type="submit" >Login</button>
               <!-- <input class="btn btn-lg btn-primary btn-block" type="submit"  name="submit" placeholder="sign in"> -->
               <a href="sign_up.php">Create a Account</a>
              </form>
         </div>
      </div>
      <div class="col-lg-6 col-sm-12 col-md-6" style="margin-bottom:  3%;">
         <div style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px; padding: 40px; ">
            <form class="form-signin" action="login.php" method="post" >
               <!--  <img class="mb-4" src="https://www.thejobsportal.co.za/sites/default/files/jobsportal.png" alt="" style="margin-left: -15%" width="372" height="122"> -->
               <h1 class="h3 mb-3 font-weight-normal">Employer Sign In</h1>
                <p><b>For Demo you can use<br></b> Email: employer@employer.com <br> Password: Employer65k@!</p>
               <div class="form-group">
                  <label for="inputEmail" class="sr-only">Email address</label>
                  <input type="email" id="inputEmail" name="employeremail" class="form-control" placeholder="Email address" required autofocus>
               </div>
               <div class="form-group">
                  <label for="inputPassword" class="sr-only">Password</label>
                  <input type="password" id="inputPassword" name="employerPassword" class="form-control" placeholder="Password" required>
               </div>
               <!--  <div class="checkbox mb-3">
                  <label>
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                  </div> -->
                  <button class="btn btn-lg btn-primary btn-block"  name="employersubmit" type="submit" >Login</button>
               <a href="employer_sign_up.php">Create an Account</a>
              
            </form>
         </div>
      </div>
      <div class="col-lg-6 col-sm-12 col-md-6" style="margin-left:auto; margin-right:auto; margin-bottom:  3%;">
         <div style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px; padding: 40px; ">
            <form class="form-signin" action="login.php" method="post" >
               <!--  <img class="mb-4" src="https://www.thejobsportal.co.za/sites/default/files/jobsportal.png" alt="" style="margin-left: -15%" width="372" height="122"> -->
               <h1 class="h3 mb-3 font-weight-normal">Tutor Sign In</h1>
                <p><b>For Demo you can use<br></b> Email: tutor@tutor.com <br> Password: Tutor65k@!</p>
               <div class="form-group">
                  <label for="inputEmail" class="sr-only">Email address</label>
                  <input type="email" id="inputEmail" name="tutoremail" class="form-control" placeholder="Email address" required autofocus>
               </div>
               <div class="form-group">
                  <label for="inputPassword" class="sr-only">Password</label>
                  <input type="password" id="inputPassword" name="tutorPassword" class="form-control" placeholder="Password" required>
               </div>
               <!--  <div class="checkbox mb-3">
                  <label>
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                  </div> -->
                  <button class="btn btn-lg btn-primary btn-block"  name="tutorsubmit" type="submit" >Login</button>
               <a href="tutor_sign_up.php">Create an Account</a>
              
            </form>
         </div>
      </div>
   </div>
    </div>

   </div>
</body>

<style>
   .ftco-section-parallax .parallax-img{
   background: #CF9966;
   }
</style>
<section class="ftco-section-parallax">
   <div class="parallax-img d-flex align-items-center">
      <div class="container">
         <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
               <h2>Subcribe to our Newsletter</h2>
               <p>Are you on the hunt for your dream job? Look no further! Deskano  offers a vast database of job listings across diverse industries. Create a profile, upload your resume, and start browsing through opportunities that match your skills, experience, and aspirations. With our advanced search features and personalized job alerts, your next career move is just a click away</p>
               <div class="row d-flex justify-content-center mt-4 mb-4">
                  <div class="col-md-8">
                     <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                           <input type="text" class="form-control" placeholder="Enter email address">
                           <input type="submit" value="Subscribe" class="submit px-3">
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<footer class="ftco-footer ftco-bg-dark ftco-section">
   <div class="container">
      <div class="row mb-5">
         <div class="col-md">
            <div class="ftco-footer-widget mb-4">
               <h2 class="ftco-heading-2">About</h2>
               <p>Our mission is to empower individuals to take control of their careers and assist organizations in building exceptional teams. We pride ourselves on delivering a comprehensive job search and hiring experience that's tailored to your needs.</p>
               <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
               </ul>
            </div>
         </div>
         <div class="col-md">
            <div class="ftco-footer-widget mb-4">
               <h2 class="ftco-heading-2">Employers</h2>
               <ul class="list-unstyled">
                  <li><a href="#" class="py-2 d-block">How it works</a></li>
                  <li><a href="#" class="py-2 d-block">Register</a></li>
                  <li><a href="#" class="py-2 d-block">Post a Job</a></li>
                  <li><a href="#" class="py-2 d-block">Blog</a></li>
                  <li><a href="faq.php" class="py-2 d-block">Faq</a></li>
               </ul>
            </div>
         </div>

         <style>
            .ftco-footer{
               background: :#2d2d2d;
            }
         </style>
         <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
               <h2 class="ftco-heading-2">Workers</h2>
               <ul class="list-unstyled">
                  <li><a href="#" class="py-2 d-block">How it works</a></li>
                  <li><a href="#" class="py-2 d-block">Register</a></li>
                  <li><a href="#" class="py-2 d-block">Post Your Skills</a></li>
               </ul>
            </div>
         </div>
         <div class="col-md">
            <div class="ftco-footer-widget mb-4">
               <h2 class="ftco-heading-2">Have a Question?</h2>
               <div class="block-23 mb-3">
                  <ul>
                     <li><span class="icon icon-map-marker"></span><span class="text">542, Peradeniya Rd, Kandy</span></li>
	                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+94778358111</span></a></li>
	                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">deskanoofficial.com</span></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 text-center">
            <p>

               Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by Deskano Official Team</a>

            </p>
         </div>
      </div>
   </div>
</footer>
<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
   <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
   </svg>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>
</body>
</html>
<?php 
   include('connection/db.php');
   
   if (isset($_POST['submit'])) {
   
      $email=$_POST['email'];
      $pass=md5($_POST['password']);     
     echo $sql ="select * from jobskeer where email='$email' and password='$pass' and status ='Active' ";
    $query=mysqli_query($conn,$sql);

     if ($query) {
    
   if (mysqli_num_rows($query)>0) {
       
     $_SESSION['email']= $email;
      echo "<script>window.location.href = 'http://localhost/Deskano'; </script>";
   
   }else{
     echo "<script>alert('Email or password is  incorrect ,Please try again')</script>";
   }
   
   
   }
   }
   ?>

   
   <?php
   if (isset($_POST['employersubmit'])) {
   
     $email=$_POST['employeremail'];
     $pass=md5($_POST['employerPassword']);
     
      $sql=  "select * from  employer where email='$email' and password='$pass' and status ='Active'";
      $query=mysqli_query($conn, $sql);
   
     if ($query) {
    
    
   if (mysqli_num_rows($query)>0) {
         $_SESSION['email']= $email;
         //   header('location:emp_dashboard.php');
         echo "<script>window.location.href = 'http://localhost/Deskano/admin/emp_dashboard.php'; </script>";
         
         }else{
         echo "<script>alert('Email or password is  incorrect ,Please try again')</script>";
         }
   
   
      }
   }
   
    ?>

<?php 
   include('connection/db.php');
   
   if (isset($_POST['tutorsubmit'])) {
      $email=$_POST['tutoremail'];
      $pass=md5($_POST['tutorPassword']);     
      echo $sql ="select * from tutor where email='$email' and password='$pass'";
      $query=mysqli_query($conn,$sql);

     if ($query) {
         if (mysqli_num_rows($query)>0) {
            
         $_SESSION['email']= $email;
            echo "<script>window.location.href = 'http://localhost/Deskano/tutor_home.php'; </script>";
            exit();

         }else{
         echo "<script>alert('Email or password is  incorrect ,Please try again')</script>";
         }
      }
   }
   ?>