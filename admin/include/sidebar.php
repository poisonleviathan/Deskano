<?php 
 include('../connection/db.php');
 $query = mysqli_query($conn, "select * from admin_login  where admin_email='{$_SESSION['email']}'");
 $sql = mysqli_query($conn, "select * from  employer where email='{$_SESSION['email']}' and status ='Active'");


 if (mysqli_num_rows($query)>0) {
  
?>

   <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="admin_dashboard.php">
                   <i class="fa fa-home" aria-hidden="true"></i>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="jobs.php">
                   <i class="fa fa-list" aria-hidden="true"></i>
                  All Jobs
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Customers.php">
                   <i class="fa fa-users" aria-hidden="true"></i>
                  Admins
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Job_create.php">
                  <i class="fa fa-pencil" aria-hidden="true"></i>
                   Job Create 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="create_company.php">
                  <i class="fa fa-id-badge" aria-hidden="true"></i>
                  company
                </a>
              </li>
            </ul>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="category.php">
                  <i class="fa fa-file" aria-hidden="true"></i>
                  Category
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="selected_canidateAdmin.php">
                  <i class="fa fa-id-badge" aria-hidden="true"></i>
                 Selected Candidate  
                </a>
              </li>

             <li class="nav-item">
                <a class="nav-link" href="JobSkeers_auth.php">
                <i class="fa fa-users" aria-hidden="true"></i>

                 Employees
                </a>
              </li>

            <li class="nav-item">
                <a class="nav-link" href="contect_us.php">
                <i class="fa fa-envelope" aria-hidden="true"></i>

                 Contact Us
                </a>
              </li>

            </ul>
          </div>
        </nav>
<?php 
  }else if(mysqli_num_rows($sql)>0){
 ?>
<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="admin_dashboard.php">
                 <i class="fa fa-home" aria-hidden="true"></i>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Job_create.php">
                 <i class="fa fa-pencil" aria-hidden="true"></i>
                   Job Create 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="apply_jobs.php">
                  <i class="fa fa-file" aria-hidden="true"></i>
                  Applied Jobs
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="seleted_can.php">
                   <i class="fa fa-users" aria-hidden="true"></i>
                  Seleted Candidate
                </a>
              </li>
            </ul>
          </div>
        </nav>

 
<?php
 }
 ?>