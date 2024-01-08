<?php 
session_start();
if ( $_SESSION['email']==true) {
 
}else{
   header('location:admin_login.php');
}
?>

<?php 
include('./connection/db.php');
$query=mysqli_query($conn,"select * from jobskeer  where email='{$_SESSION['email']}' ");
$data = mysqli_fetch_array($query); 
?>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Deskano</title>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">


        <main role="main" class="col-md-9  col-lg-12 pt-3 px-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="my_profile.php" style="font-size: 14pt;">Back</a></li>
                </ol>
            </nav>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">Applied Jobs</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                        </div>
                    <!-- <a class="btn btn-primary" href="add_company.php">Add Company</a> -->
                    </div>
            </div>

           <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Job Title</th>
                <th>Job Description</th>
                <th>Employer</th>
                <th>Company Email</th>
                <th>Job Location</th>
            </tr>
        </thead>
        <tbody>

        <?php 
        include('connection/db.php');

        $i = 1;

        $sql= "select * from job_apply LEFT JOIN all_jobs ON job_apply.id_job = all_jobs.job_id   where job_seeker = '{$_SESSION['email']}'";
        $query=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($query)){
        ?>
                    
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo ucfirst($row['job_title']); ?></td>
                <td><?php echo ucfirst($row['des']); ?></td>
                <td><?php echo ucfirst($row['first_name']); ?></td>
                <td><?php echo ucfirst($row['customer_email']); ?></td>
                <td><?php echo ucfirst($row['country']); ?>, <?php echo ucfirst($row['state']); ?>, <?php echo ucfirst($row['city']); ?></td>
            </tr>
        <?php $i++; }  ?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Job Title</th>
                <th>Job Description</th>
                <th>Employer</th>
                <th>Company Email</th>
                <th>Job Location</th>
            </tr>
        </tfoot>
    </table>


          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
          <div class="table-responsive">
            
          </div>
        </main>
      </div>
    </div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
  <!-- datatables plugin -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


  <script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>
   
  </body>
</html>