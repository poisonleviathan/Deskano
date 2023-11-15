 <?php 
 include('include/header.php');
 include('include/sidebar.php');
 ?>
<?php 
include('connection/db.php');
$edit = $_GET['edit'];
$query=mysqli_query($conn,"select * from  all_jobs where job_id='$edit'");
// var_dump($query);
while ($row=mysqli_fetch_array($query)) {
 $Title=$row['job_title'];
 $Description=$row['des'];
 $country=$row['country'];
 $state=$row['state'];
 $City=$row['city'];
 $keyword=$row['keyword'];
}
 ?>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashoard</a></li>
              <li class="breadcrumb-item"><a href="Job_create.php">ALL Job List</a></li>
              <li class="breadcrumb-item"><a href="#">Add JOB</a></li>
            
            </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
       <h1 class="h2"> Add JOB</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
               
              </div>
              <!-- <a class="btn btn-primary" href="add_cutomer.php">Add Customer</a> -->
            </div>
          </div>
          <div style="width: 60%; margin-left: 20%; background-color: #F2F4F4;" >
            <div id="msg"></div>
             <form action="" method="post" style="margin:3%; padding: 3%;" name="job_form" id="job_form">
                 <div class="form-group">
                    <label for="Cutomer Email">JOB Title</label>
                     <input type="text"  value="<?php echo $Title; ?> " name="job_title" id="job_title" class="form-control" placeholder="Enter Job Title  ">
                 </div>
                    <div class="form-group">
                    <label for="Cutomer Username">Description</label>
                    
                    <textarea name="Description" id="Description"  class="form-control" cols="30" rows="10"><?php echo $Description; ?></textarea>
                 </div>
                 <input type="hidden" name="id" id="id" value="<?php echo $_GET['edit']; ?>">
                 <div class="form-group">
                    <label for="Cutomer Username">Enter Keyword</label>
                    
                   <input type="text" class="form-control" value="<?php echo $keyword; ?>" name="Keyword" id="Keyword" placeholder="Enter Keyword">
                 </div>
                  <div class="form-group">
                    <label for="">Country</label>
                    <select name="country" class="countries form-control" value="<?php echo $country; ?>" id="countryId">
                    <option value="">Select Country</option>
                </select>
                  </div>
                  

                  <div class="form-group">
                    <label for="">State</label>
                    <select name="state" class="states form-control"  value="<?php echo $state; ?>" id="stateId">
                          <option value="">Select State</option>
                      </select>
                  </div>


                  <div class="form-group">
                    <label for="">City</label>
                         <select name="city" class="cities form-control" value="<?php echo $city; ?>" id="cityId">
                              <option value="">Select City</option>
                          </select>
                  </div>

                  <div class="form-group">
                    <label for="">Select Category</label>
                         <select name="category" class="form-control" id="category">
                          <?php 
                          $query=mysqli_query($conn,"select * from  job_category");
                           while ($row=mysqli_fetch_array($query)) {
                            ?>
                              <option value="<?php echo $row['id'] ?>"><?php echo $row['category'] ?></option>
                            <?php
                           }
                           ?>
                              
                          </select>
                  </div>
                      <div class="form-group">
                   
                    <input type="submit" class="btn btn-block btn-success" placeholder="Save" name="submit" id="submit" >
                 </div>
             </form>


          </div>

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
  <script>
     $(document).ready(function(){
     $("#submit").click(function(){
        var Description=$("#Description").val();
        var job_title=$("#job_title").val();
        var countryId=$("#countryId").val();
        var stateId=$("#stateId").val();
        var cityId=$("#cityId").val();

          if (job_title=='') {
            alert("Please Enter Job Title!!");
            return false;
              }

             if (Description=='') {
            alert("Please Enter Description!!");
            return false;
              }

        var data= $("#job_form").serialize();

         
     });
     });


  </script>
     <script>
    // Initialize CKEditor
    CKEDITOR.replace('Description');
</script>
<script>
$(document).ready(function() {
    // Populate the Country dropdown on page load
    $.ajax({
        url: 'get_countries.php', // Replace with the actual URL to fetch countries
        type: 'GET',
        success: function(data) {
            $('#countryId').html(data);
        }
    });

    // Handle change event for the Country dropdown
    $('#countryId').change(function() {
        var countryId = $(this).val();
        if (countryId !== '') {
            // Fetch and populate States based on the selected Country
            $.ajax({
                url: 'get_states.php?country_id=' + countryId, // Replace with the actual URL to fetch states
                type: 'GET',
                success: function(data) {
                    $('#stateId').html(data);
                    $('#cityId').html('<option value="">Select City</option>'); // Reset the City dropdown
                }
            });
        } else {
            $('#stateId').html('<option value="">Select State</option>');
            $('#cityId').html('<option value="">Select City</option>');
        }
    });

    // Handle change event for the State dropdown
    $('#stateId').change(function() {
        var stateId = $(this).val();
        if (stateId !== '') {
            // Fetch and populate Cities based on the selected State
            $.ajax({
                url: 'get_cities.php?state_id=' + stateId, // Replace with the actual URL to fetch cities
                type: 'GET',
                success: function(data) {
                    $('#cityId').html(data);
                }
            });
        } else {
            $('#cityId').html('<option value="">Select City</option>');
        }
    });
});
</script>
  </body>
</html>
<?php
// Include your database connection code here
include('connection/db.php'); // Replace with your actual database connection code

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $job_title = $_POST['job_title'];
    $description = $_POST['Description'];
    $keyword = $_POST['Keyword'];
    $country_name = $_POST['country'];
    $state_name = $_POST['state'];
    $city_name = $_POST['city'];
    $category = $_POST['category'];
    $job_id = $_POST['id']; // Include a hidden field for the job ID in your form

    // Perform data validation here if needed

    // Get the user's email from the session
    $user_email = $_SESSION['email'];

    // Get the IDs for country, state, and city based on their names
    // $country_query = mysqli_query($conn, "SELECT name FROM countries WHERE id = '$country_name'");
    // $state_query = mysqli_query($conn, "SELECT name FROM states WHERE id = '$state_name'");
    // $city_query = mysqli_query($conn, "SELECT name FROM cities WHERE id = '$city_name'");

    // // Check if the queries were successful
    // // if ($country_query && $state_query && $city_query) {
    //     // Fetch the names
    //     $country_row = mysqli_fetch_assoc($country_query);
    //     $state_row = mysqli_fetch_assoc($state_query);
    //     $city_row = mysqli_fetch_assoc($city_query);

    //     // Get the names
    //     $country_name = $country_row['name'];
    //     $state_name = $state_row['name'];
    //     $city_name = $city_row['name'];

        // Update the database record
        $query = mysqli_query($conn, "UPDATE all_jobs SET
            job_title = '$job_title',
            des = '$description',
            -- country = '$country_name',
            -- state = '$state_name',
            -- city = '$city_name',
            category = '$category',
            Keyword = '$keyword'
            WHERE job_id = '$job_id'");

if ($query) {
  echo "<script>alert('Record has been Updated successfully  !!!!')</script>";
}else{
  echo "<script>alert('some error Please try again  !!!!')</script>";
}
    } else {
        // Error occurred while fetching names
        echo "Error: " . mysqli_error($conn);
        header("Location: Job_create.php");
    }

    mysqli_close($conn); // Close the database connection
// }
?>
