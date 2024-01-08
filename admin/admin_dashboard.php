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
           <!-- <div class="row">
             <div class="col-lg-6 col-md-6 col-sm-12">
                <canvas id="allJobsChart" width="400" height="200"></canvas>
            
             </div>
             <div class="col-lg-6 col-md-6 col-sm-12">
                 <canvas id="appliedJobsChart" width="400" height="200"></canvas>
             </div>
               
           </div>
           <div class="row">
             <div class="col-lg-6 col-md-6 col-sm-12">
                <canvas id="allJobsChart" width="400" height="200"></canvas>
            
             </div>
             <div class="col-lg-6 col-md-6 col-sm-12">
                 <canvas id="appliedJobsChart" width="400" height="200"></canvas>
             </div>
               
           </div>
        </main>
      </div>
    </div> -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script> -->

    <!-- Icons -->
    <!-- <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script> -->
  <!-- datatables plugin -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->

<!--<script>
// Sample data (replace with your actual data)
const allJobsData = {
  labels: ['January', 'February', 'March', 'April', 'May'],
  datasets: [{
    label: 'All Jobs',
    backgroundColor: 'rgba(75, 192, 192, 0.2)',
    borderColor: 'rgba(75, 192, 192, 1)',
    borderWidth: 1,
    data: [10, 15, 12, 18, 20],
  }],
};

const appliedJobsData = {
  labels: ['January', 'February', 'March', 'April', 'May'],
  datasets: [{
    label: 'Applied Jobs',
    backgroundColor: 'rgba(255, 99, 132, 0.2)',
    borderColor: 'rgba(255, 99, 132, 1)',
    borderWidth: 1,
    data: [5, 8, 6, 10, 12],
  }],
};

// Get the canvas elements
const allJobsChartCanvas = document.getElementById('allJobsChart').getContext('2d');
const appliedJobsChartCanvas = document.getElementById('appliedJobsChart').getContext('2d');

// Create the charts
const allJobsChart = new Chart(allJobsChartCanvas, {
  type: 'bar',
  data: allJobsData,
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});

const appliedJobsChart = new Chart(appliedJobsChartCanvas, {
  type: 'bar',
  data: appliedJobsData,
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});
</script>-->

<style>
  #analytics{
    margin:10px;
    margin-left:20px;
    margin-right:20px;
  }

  #analytics .row{
    width:100%;
    margin-left:75px;
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
    margin-right:50px;
    margin-left:50px;
    background-color:lightgray;
  }
</style>

<script>
  $(function() {
  function count($this) {
    var current = parseInt($this.html(), 10);

    // Stop counting if the current value is already at the target count
    if (current === $this.data('count')) {
      return;
    }

    $this.html(++current);
    if (current !== $this.data('count')) {
      setTimeout(function() {
        count($this);
      }, 100);
    }
  }

  $(".number").each(function() {
    $(this).data('count', parseInt($(this).html(), 10));

    // Start the count animation only if the initial value is not 0
    if ($(this).data('count') > 0) {
      $(this).html('0');
      count($(this));
    }
  });
});
</script>

<div id="analytics">
  <div class="row ">
    <?php
    // Query to get the row count
    $query = "SELECT COUNT(*) AS row_count FROM all_jobs";
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
    $query = "SELECT COUNT(*) AS row_count FROM job_apply";
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
    $query = "SELECT COUNT(*) AS row_count FROM selected_canditate";
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

    <?php
    // Query to get the row count
    $query = "SELECT COUNT(*) AS row_count FROM learn";
    $result = mysqli_query($conn, $query);

    if ($result) {
      // Fetch the result as an associative array
      $row = mysqli_fetch_assoc($result);

      // Access the row count
      $rowCount = $row['row_count'];

      ?>
      <div id="data">
        <h4>Learn Videos</h4>
        <p><span class="number"><?php echo $rowCount; ?></span></p>
      </div>
      <?php
    } else {
      // Handle the case where the query fails
      echo "Error: " . mysqli_error($conn);
    }
    ?>
  </div>
  <div class="row ">
    <?php
    // Query to get the row count
    $query = "SELECT COUNT(*) AS row_count FROM employer";
    $result = mysqli_query($conn, $query);

    if ($result) {
      // Fetch the result as an associative array
      $row = mysqli_fetch_assoc($result);

      // Access the row count
      $rowCount = $row['row_count'];

      ?>
      <div id="data">
        <h4>Employers</h4>
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
    $query = "SELECT COUNT(*) AS row_count FROM jobskeer";
    $result = mysqli_query($conn, $query);

    if ($result) {
      // Fetch the result as an associative array
      $row = mysqli_fetch_assoc($result);

      // Access the row count
      $rowCount = $row['row_count'];

      ?>
      <div id="data">
        <h4>Employees</h4>
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
    $query = "SELECT COUNT(*) AS row_count FROM tutor";
    $result = mysqli_query($conn, $query);

    if ($result) {
      // Fetch the result as an associative array
      $row = mysqli_fetch_assoc($result);

      // Access the row count
      $rowCount = $row['row_count'];

      ?>
      <div id="data">
        <h4>Tutors</h4>
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
    $query = "SELECT COUNT(*) AS row_count FROM plus_card_details";
    $result = mysqli_query($conn, $query);

    if ($result) {
      // Fetch the result as an associative array
      $row = mysqli_fetch_assoc($result);

      // Access the row count
      $rowCount = $row['row_count'];

      ?>
      <div id="data">
        <h4>Deskano Plus Users</h4>
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


<!-- <div id="analytics">
  <div class="row">
    <div id="data">
      <h4>Hello</h4>
      <p><span class="number" data-number="5500">0</span></p>
    </div>
  </div>
</div>    -->


  </body>
</html>
