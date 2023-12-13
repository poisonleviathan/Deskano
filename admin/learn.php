<?php
 include('include/header.php');
 include('include/sidebar.php');
 ?>

<form action="profile_add.php" method="POST" id="profile_form" name="profile_form" enctype="multipart/form-data">
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
          <div style="width: 60%; padding: 3%; margin-left: 20%; background-color: #F2F4F4;" >
            <div id="msg"></div>
             <form action="video_add.php" method="post" style="margin:10%; padding: 3%;" name="customer_form" id="customer_form">
                    <div class="form-group">
                        <label for="Cutomer Username">Enter Video Title</label>
                        <input name="des" id="des" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Cutomer Username">Choose Video</label>
                        <input type="file" class="form-control" name="img" id="img" style="border:solid black 1px; padding-top:1%; padding-botton:1%">
                    </div>
                 
                    <div type="hidden" class="form-group">
                        <label for="Cutomer Username">Enter Keyword</label>
                        <input name="keyword" class="form-control" id="keyword" placeholder="web, php" value="">
                    </div>

                    <input type="hidden" name="id" id="id" value= " <?php echo $_GET['edit']; ?>">
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-block btn-success" placeholder="Update" name="submit" id="submit">
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
</form>
  </body>
</html>