<?php 
 include('include/header.php');
 include('include/sidebar.php');
 ?>
 


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashoard</a></li>
              <li class="breadcrumb-item"><a href="#">Admins</a></li>
            
            </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
       <h1 class="h2">Active Admins</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
               
              </div>
              
            </div>
          </div>

           <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
               
            </tr>
        </thead>
        <tbody>

        <?php 
         include('connection/db.php');

        $query=mysqli_query($conn,"select * from admin_login");
        while($row=mysqli_fetch_array($query)){
        ?>
                    
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['admin_email']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
            </tr>
          <?php }  ?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
            
            </tr>
        </tfoot>
    </table>




        </main>

          <div class="table-responsive">
            
          </div>
        </main>

      </div>
    </div>


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


<?php 

 if (isset($_POST['activeuser'])) {


  $sql = "select * from employer where id = ".$_POST['userid'];


  $query =mysqli_query($conn,$sql);
  $row= mysqli_fetch_array($query);
  var_dump($row);

  $sql1= "insert into admin_login(admin_email,admin_pass,first_name,last_name,admin_type)values('".$row['email']."','".$row['password']."','".$row['first_name']."','".$row['last_name']."','2')";
    $query1=mysqli_query($conn,$sql1);


    if ($query) {

       $up = mysqli_query($conn, "update employer set status='Active' where id =".$_POST['userid']);
      echo "<script>alert('Now User Can Login!')</script>";

    }else{
      echo "<script>alert('Some Error Please Try Again!')</script>";
    }


 }

 ?>