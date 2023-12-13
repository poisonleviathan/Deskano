 <?php 
 include('include/header.php');
 include('include/sidebar.php');
 ?>
 <?php 
$query=mysqli_query($conn,"select * from  job_category");

  ?>

  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashoard</a></li>
              <li class="breadcrumb-item"><a href="Job_create.php">Job Create</a></li>
              <li class="breadcrumb-item"><a href="#">Create job</a></li>
            
            </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
       <h1 class="h2"> Edit JOB</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
               
              </div>
              <!-- <a class="btn btn-primary" href="add_cutomer.php">Add Customer</a> -->
            </div>
          </div>
          <div style="width: 60%; margin-left: 20%; background-color: #F2F4F4;" >
            <div id="msg"></div>
             <form action="add_create_job.php" method="post" style="margin:3%; padding: 3%;" name="job_form" id="job_form">
                 <div class="form-group">
                    <label for="Cutomer Email">JOB Title</label>
                     <input type="text"  name="job_title" id="job_title" class="form-control" placeholder="Enter Job Title  ">
                 </div>
                    <div class="form-group">
                    <label for="Cutomer Username">Description</label>
                    
                    <textarea name="Description" id="Description"  class="form-control" cols="30" rows="10"></textarea>
                 </div>
                 <div class="form-group">
                    <label for="Cutomer Username">Enter Keyword</label>
                    
                   <input type="text" class="form-control" name="Keyword" id="Keyword" placeholder="Enter Keyword">
                 </div>

                  <!-- <div class="form-group">
                    <label for="">Country</label>
                    <select name="country" class="countries form-control" id="countryId">
                    <option value="">Select Country</option>
                    </select>
                  </div>
                  

                  <div class="form-group">
                    <label for="">State</label>
                    <select name="state" class="states form-control" id="stateId">
                          <option value="">Select State</option>
                      </select>
                  </div> -->

                  <div class="form-group">
                    <div class="form-group">
                        <label for="">Country</label>
                        <select name="country" class="form-control gds-cr" id="countryId" country-data-region-id="gds-cr-one" data-language="en"></select>
                    </div>
                    <div class="form-group">
                        <label for="gds-cr-one">Region/Province</label>
                        <select name="state" class="form-control" id="gds-cr-one"></select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="city">City</label>
                     <input type="text"  name="city" id="cityId" class="form-control" placeholder="Enter Your City">
                 </div>

                  <div class="form-group">
                    <label for="">Select Category</label>
                         <select name="category" class="form-control" id="category">
                          <?php 
                           while ($row=mysqli_fetch_array($query)) {
                            ?>
                              <option value="<?php echo $row['id'] ?>"><?php echo $row['category']; ?></option>
                            <?php
                           }
                           ?>
                              
                          </select>
                  </div>

                      <div class="form-group">
                   
                    <input type="submit" class="btn btn-block btn-success" placeholder="Save" name="submit" id="submit">
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
        var stateId=$("#gds-cr-one").val();
        var cityId=$("#cityId").val();

          if (job_title == '') {
            alert("Please Enter Job Title!!");
            return false;
          }
          // else if (Description == '') {
          //   alert("Please write the Description !!");
          //   return false;
          // }
          else if (countryId == '') {
            alert("Please select the Country !!");
            return false;
          }
          else if (stateId == '') {
            alert("Please select State !!");
            return false;
          }

          else if (cityId == '') {
            alert("Please enter City !!");
            return false;
          }
     });
     });last_name


  </script>
     <script>
    // Initialize CKEditor
    CKEDITOR.replace('Description');
</script>

  </body>
</html>
<?php
// Include database connection code
include('connection/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $job_title = $_POST['job_title'];
    $description = $_POST['Description'];
    $keyword = $_POST['Keyword'];
    $country_name = $_POST['country'];
    $state_name = $_POST['state'];
    $city_name = $_POST['city'];
    $category = $_POST['category'];
    $user_email = $_SESSION['email'];

    $sql="select * from admin_login where admin_email = '$user_email'";
    $query2=mysqli_query($conn,$sql);
    $row1=mysqli_fetch_array($query2);

    // Get the user's email from the session
    
    $first_name = $row1['first_name'];
    $last_name = $row1['last_name'];

    // Get the IDs for country, state, and city based on their names
    // $country_query = mysqli_query($conn, "SELECT name FROM countries WHERE id = '$country_name'");
    // $state_query = mysqli_query($conn, "SELECT name FROM states WHERE id = '$state_name'");
    // $city_query = mysqli_query($conn, "SELECT name FROM cities WHERE id = '$city_name'");

    // // Check if the queries were successful
    // if ($country_query && $state_query && $city_query) {
    //     // Fetch the IDs
    //     $country_row = mysqli_fetch_assoc($country_query);
    //     $state_row = mysqli_fetch_assoc($state_query);
    //     $city_row = mysqli_fetch_assoc($city_query);

        // Insert data into the database
        $country_id = $country_row['name'];
        $state_id = $state_row['name'];
        $city_id = $city_row['name'];

        $query = mysqli_query($conn, "INSERT INTO all_jobs (first_name, last_name, customer_email, job_title, des, category, Keyword, country, state, city) VALUES ('$first_name', '$last_name', '$user_email', '$job_title', '$description', '$category', '$keyword', '$country_name', '$state_name', '$city_name')");

        if ($query) {
            // Data inserted successfully
            echo "Data inserted successfully.";
        } else {
            // Error occurred while inserting data
            echo "Error: error" . mysqli_error($conn);
        }
    // } else {
    //     // Error occurred while fetching IDs
    //     echo "Error: error" . mysqli_error($conn);
    // }

    mysqli_close($conn); // Close the database connection
}
?>