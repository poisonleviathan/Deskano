<?php 
 include('include/header.php');
 include('include/sidebar.php');
 ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashoard</a></li>
              <li class="breadcrumb-item"><a href="#">Jobs</a></li>
            
            </ol>
          </nav>
           <div class="row">
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
</script>

   
  </body>
</html>
