<?php
if (isset($_GET['page'])) {
  $page = $_GET['page'];
  $page1 = ($page * 3) - 3;

  // Replace this with your database connection code
 include('connection/db.php');

  // Your SQL query with pagination logic here
  $query1 = "SELECT * FROM all_jobs LEFT JOIN company ON all_jobs.customer_email = company.admin LIMIT $page1, 3";

  $sql = mysqli_query($conn, $query1);

  $data = '';

  while ($row = mysqli_fetch_array($sql)) {
    // Build HTML for job listings using $row data
    $data .= '<div class="col-md-12 ftco-animate">';
    $data .= '<div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">';
    // Include your job listing content here
    $data .= '</div>';
    $data .= '</div>';
  }

  // Calculate total pages and build pagination links
  $count = mysqli_num_rows($sql);
  $totalPages = ceil($count / 3);
  $pagination = '';

  for ($b = 1; $b <= $totalPages; $b++) {
    $pagination .= '<li><a href="#" data-page="' . $b . '">' . $b . '</a></li>';
  }

  // Return data and pagination links as JSON
  echo json_encode(['data' => $data, 'pagination' => $pagination]);
}
?>
