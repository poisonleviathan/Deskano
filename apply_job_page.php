<?php 
include('include/header.php');

if (isset($_SESSION['email'])==true) {

}else{
  header('location:login.php');
}

 $id=$_GET['id'];
 $sql="select * from all_jobs where job_id='$id'";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
  $title=$row['job_title'];
  $des=$row['des'];
  $country=$row['country'];
  $state=$row['state'];
  $city=$row['city'];
  $id_job=$row['job_id'];

?>
  
<?php
include('connection/db.php');

$query=mysqli_query($conn,"select * from jobskeer where email='{$_SESSION['email']}'");

while ($row=mysqli_fetch_array($query)) {
  $firstname=$row['first_name'];
  $lastname=$row['last_name'];
  $dob=$row['dob'];
  $number=$row['mobile_number'];
  $email=$row['email'];
  $id=$row['id'];
}
?>

    <div class="hero-wrap js-fullheight" style="background-image: url('images/banner1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-3"><a href="blog.html"> Jobs <i class="ion-ios-arrow-forward"></i></a></span> <span>Apply</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Apply Jobs</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container-fluid"  style="margin-bottom:20px">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 ftco-animate">
              <h2 class="mb-3" style="color: #154360 "><td><?php echo ucfirst($title) ?></td></h2>
              <h5 style="color: #154360 "><?php echo $city?>, <?php echo $state ?>, <?php echo $country ?></h5>
               <div style="height: 47vh; overflow: scroll;">
                  <p style="color: #1A5276"><?php echo ucfirst($des); ?></p>
               </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 ftco-animate">            
               <div style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
                <form action="apply_job.php" method="post" id="JobPortal" enctype="multipart/form-data">
              <div style=" padding: 2%;">
                <input type="hidden" name="job_seeker" value="<?php echo $_SESSION['email']; ?> " id="job_seeker">
                <input type="hidden" name="id_job" value="<?php echo $id_job; ?> " id="id_job">
               <div class="row" style="margin-bottom:10px">
                  <div class="col-sm-6">
                    <label for="" style="font-weight: bold;color: #1A5276">Enter Your First Name <span style="color:red">*</span></label>
                    <input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo $firstname; ?> " placeholder="First Name..." required autofocus>
                  </div>
                  <div class="col-sm-6">
                    <label for="" style="font-weight: bold;color: #1A5276">Enter Your Last Name <span style="color:red">*</span></label>
                    <input type="text" class="form-control" name="last_name" id="last_name" value="<?php echo $lastname; ?> " placeholder="Last Name..." required autofocus>
                  </div>
              </div>

                <div class="row" style="margin-bottom:10px">
                   <div class="col-sm-6">
                    <label for="" style="font-weight: bold;color: #1A5276">Enter DOB <span style="color:red">*</span></label>
                    <input type="date" class="form-control" name="dob" id="dob" value="<?php echo $dob; ?> " placeholder="date of birth..." required autofocus>
                  </div>
                  <div class="col-sm-6">
                    <label for="" style="font-weight: bold;color: #1A5276">Choose Resume <span style="color:red">*</span></label>
                    <input type="file" name="file" id="file" class="form-control" required autofocus>
                  </div>
                </div>

                <div class="row" style="margin-bottom:10px">
                  <div class="col-sm-6">
                    <label for="" style="font-weight: bold;color: #1A5276">Enter Your Contact Number <span style="color:red">*</span></label>
                    <input type="number" class="form-control" name="number" id="number" size="10" maxlength="10" title="Enter 10 digit mobile number" placeholder="Mobile number" required autofocus>
                  </div>
                  <div class="col-sm-6">
                    <label for="" style="font-weight: bold;color: #1A5276">Email <span style="color:red">*</span></label>
                    <input type="text" class="form-control "  value="<?php echo $_SESSION['email']; ?> " disabled>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <label for="" style="font-weight: bold;color: #1A5276">Enter Your Country <span style="color:red">*</span></label>
                    <select name="Country" class="form-control gds-cr" id="countryId" value="<?php echo $country; ?>" country-data-region-id="gds-cr-one" data-language="en" required></select>
                  </div>
                  <div class="col-sm-4">
                    <label for="" style="font-weight: bold;color: #1A5276">Enter Your Province <span style="color:red">*</span></label>
                    <select name="State" class="form-control" value="<?php echo $state?>" id="gds-cr-one" required></select>
                  </div>
                  <div class="col-sm-4">
                    <label for="" style="font-weight: bold;color: #1A5276">Enter Your City <span style="color:red">*</span></label>
                    <input type="text"  name="City" id="cityId" value="<?php echo $City ?>" class="form-control" placeholder="Enter Your City" required>
                  </div>
                </div>

                <div class="row" style="margin-bottom:10px">
                  <div class="col-sm-6">
                    <label style="float: left; font-weight: bold;color: #1A5276" >Experience <span style="color:red">*</span></label>
                    <input type="number" class="form-control" name="experience" maxlength="2" placeholder="3" class="form-control" required>
                  </div>
                  <div class="col-sm-6" id="college_name">
                    <label style="float: left; font-weight: bold;color: #1A5276" >Name of College <span style="color:red">*</span></label>
                    <input type="text" name="collegename" class="form-control"required >   
                  </div> 
                </div>



                <div class="row" style="margin-bottom:10px">
                  <div class="col-sm-4">
                    <label for="" style="font-weight: bold;color: #1A5276">Last Qualification</label>
                    <input type="text" class="form-control" name="qualification" id="qualification" maxlength="100" placeholder="Last Qualification" autofocus>
                  </div>

                  <div class="col-sm-4">
                    <label for="" style="font-weight: bold;color: #1A5276">Pass-Out Year</label>
                    <input type="number" class="form-control" name="passout" id="passout" maxlength="10" placeholder="Pass-Out Year" autofocus>
                  </div>

                  
                  <div class="col-sm-4" id="expecting_salary">
                    <label style="float: left; font-weight: bold;color: #1A5276" >Expecting salary</label>
                    <input type="number" name="expectingSalary" class="form-control" placeholder="Bid your skills" >   
                  </div>
                </div>   
                <?php //}; ?>
                
               <input type="submit" name="submit" id="submit" value="submit" placeholder="Submit" href="apply_job_page.php" class=" btn btn-primary btn-block ">
           </div>
            </form>
               </div>
            </div>
        </div>
      </div>
<?php 
include('include/footer.php');
?>