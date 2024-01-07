<?php 
 include('connection/db.php');
 include('include/header.php');
 include('include/sidebar.php');
 ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
            
            </ol>
          </nav>

<style>
  #analytics{
    margin:10px;
    margin-left:20px;
    margin-right:20px;
  }

  #analytics .row{
    width:100%;
    margin-left:60px;
  }

  #data p{
    font-weight: bold;
  }

  #data{
    text-align:center;
    border:solid black 2px;
    height:70px;
    width:170px;
    border-radius:10px;
    padding-top:10px;
    padding-bottom:10px;
    padding-left:auto;
    padding-right:auto;
    margin:50px;
    margin-bottom:50px;
    margin-right:100px;
    margin-left:100px;
    background-color:lightgray;
  }
</style>

<script>
  $(function() {
    function count($this){
        var current = parseInt($this.html(), 10);
        $this.html(++current);
        if(current !== $this.data('count')){
            setTimeout(function(){count($this)}, 100);
        }
    }        
  $(".number").each(function() {
      $(this).data('count', parseInt($(this).html(), 10));
      $(this).html('0');
      count($(this));
  });
});
</script>

<div id="analytics">
  <div class="row ">
    <?php
    // Query to get the row count
    $query = "SELECT COUNT(*) AS row_count FROM all_jobs WHERE customer_email='{$_SESSION['email']}'";
    $result = mysqli_query($conn, $query);

    if ($result) {
      // Fetch the result as an associative array
      $row = mysqli_fetch_assoc($result);

      // Access the row count
      $rowCount = $row['row_count'];

      ?>
      <div id="data">
        <h4>All Jobs</h4>
        <p><span class="number"><?php echo $rowCount; ?></span></p>
      </div>
      <?php
    } else {
      // Handle the case where the query fails
      echo "Error: " . mysqli_error($conn);
    }
    ?>

    <?php
    // Query to get the row count
    $sql= "select * from job_apply LEFT JOIN all_jobs ON job_apply.id_job = all_jobs.job_id  where customer_email='{$_SESSION['email']}'";
    $query = "SELECT COUNT(*) AS row_count FROM job_apply LEFT JOIN all_jobs ON job_apply.id_job = all_jobs.job_id  where customer_email='{$_SESSION['email']}'";
    $result = mysqli_query($conn, $query);

    if ($result) {
      // Fetch the result as an associative array
      $row = mysqli_fetch_assoc($result);

      // Access the row count
      $rowCount = $row['row_count'];

      ?>
      <div id="data">
        <h4>Applied jobs</h4>
        <p><span class="number"><?php echo $rowCount; ?></span></p>
      </div>
      <?php
    } else {
      // Handle the case where the query fails
      echo "Error: " . mysqli_error($conn);
    }
    ?>

    <?php
    // Query to get the row count
    $query = "SELECT COUNT(*) AS row_count FROM selected_canditate WHERE emp='{$_SESSION['email']}'";
    $result = mysqli_query($conn, $query);

    if ($result) {
      // Fetch the result as an associative array
      $row = mysqli_fetch_assoc($result);

      // Access the row count
      $rowCount = $row['row_count'];

      ?>
      <div id="data">
        <h4>Selected Candidates</h4>
        <p><span class="number"><?php echo $rowCount; ?></span></p>
      </div>
      <?php
    } else {
      // Handle the case where the query fails
      echo "Error: " . mysqli_error($conn);
    }
    ?>
  </div>
</div>

  </body>
</html>
