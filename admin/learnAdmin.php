<?php
$page='home';
include('connection/db.php');
include('include/header.php');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch video details from the database
$sql= "SELECT * FROM learn";
$result = $conn->query($sql);
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
            </ul>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="category.php">
                  <i class="fa fa-file" aria-hidden="true"></i>
                  Category
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="video_category.php">
                  <i class="fa fa-video-camera" aria-hidden="true"></i>
                  Video Category
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="apply_jobs.php">
                  <i class="fa fa-file" aria-hidden="true"></i>
                  Applied Jobs
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="selected_canidateAdmin.php">
                  <i class="fa fa-id-badge" aria-hidden="true"></i>
                 Selected Candidate  
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="learnAdmin.php">
                  <i class="fa fa-video-camera" aria-hidden="true"></i>
                 Learn 
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="employers.php">
                <i class="fa fa-users" aria-hidden="true"></i>

                 Employers
                </a>
              </li>

             <li class="nav-item">
                <a class="nav-link" href="JobSkeers_auth.php">
                <i class="fa fa-users" aria-hidden="true"></i>

                 Employees
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="employer_contact.php">
                <i class="fa fa-envelope" aria-hidden="true"></i>

                 Employer Contact
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="tutor_contact.php">
                <i class="fa fa-envelope" aria-hidden="true"></i>

                 Tutor Contact
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
        
<main style="margin-right:auto; margin-left:auto;" role="main" class="col-md-9  col-lg-10 pt-3 px-4">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashoard</a></li>
              <li class="breadcrumb-item"><a href="#">Learn</a></li>
            
            </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
       <h1 class="h2">Learn Videos </h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
               
              </div>
              <!-- <a class="btn btn-primary" href="add_company.php">Add Company</a> -->
            </div>
          </div>

    <?php
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            $videoFileName = $row["video"];
            $title = $row['title'];
    ?>

<style>
    .video-container {
        width: 700px;
        padding: 3%;
        margin: 20px auto;
        transform: translate(-20%, 0%);
        background-color: #ececec;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>

    <div style="width:30%;  margin-right:auto; margin-left:auto;">
    <div class="video-container">
            <div id="msg"></div>
            <form action="video_add.php" method="post"  style="margin: 5%; padding: 3%;" enctype="multipart/form-data" name="customer_form" id="customer_form">
                <div style="text-align:center;" class="form-group">
                    <div style="padding-bottom:10px;">
                        <h3><?php echo $title; ?></h3>
                    </div>
                    <video width="60%" height="50%" controls>
                        <source src="videos/<?php echo $videoFileName; ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </form>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom"></div>
        </div>
    </div>
        
    <?php
        }
    } else {
        echo "<p style='text-align:center; margin-top:100px;'>Learn is empty</p>";
    }

    $conn->close();
    ?>

    </body>
</html>
