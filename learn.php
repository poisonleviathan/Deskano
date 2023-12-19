<?php
 include('connection/db.php');
 include('include/header.php');
 include('include/sidebar.php');
 ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashoard</a></li>
              <li class="breadcrumb-item"><a href="#">Learn</a></li>
            
            </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
       <h1 class="h2"> Learn</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
               
              </div>
              <!-- <a class="btn btn-primary" href="add_cutomer.php">Add Customer</a> -->
            </div>
          </div>

          <div style="width: 60%; padding: 3%; margin-left: 20%; background-color: #F2F4F4;">
              <div id="msg"></div>
              <form action="video_add.php" method="post" style="margin:5%; padding: 3%;" enctype="multipart/form-data" name="customer_form" id="customer_form">
              
              <input type="hidden" name="user_email" value="<?php echo $_SESSION['email']; ?>">
              
                  <div class="form-group">
                      <label for="video-title">Enter Video Title</label>
                      <input name="des" id="des" placeholder="PHP Web Developing" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="video-file">Choose Video</label>
                      <input type="file" class="form-control" name="video" id="video" style="border:solid black 1px; padding-top:1%; padding-bottom:1%" onchange="updateVideo()">
                  </div>

                  <div style="text-align:center;"  class="form-group">
                      <video width="80%" height="50%" controls id="videoPlayer">
                          Your browser does not support the video tag.
                      </video>
                  </div>

                  <div class="form-group">
                      <input type="submit" class="btn btn-block btn-success" placeholder="Update" name="submit" id="submit">
                  </div>
              </form>

              <script>
                  function updateVideo() {
                      var videoInput = document.getElementById('video');
                      var videoPlayer = document.getElementById('videoPlayer');

                      // Check if a file is selected
                      if (videoInput.files.length > 0) {
                          var selectedVideo = URL.createObjectURL(videoInput.files[0]);
                          // Update the video source dynamically
                          videoPlayer.innerHTML = '<source src="' + selectedVideo + '" type="video/mp4">';
                      }
                  }
              </script>
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
  
  </body>
</html>