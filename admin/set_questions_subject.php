<?php 
 include('include/header.php');
 include('include/sidebar.php');
 ?>
 
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashoard</a></li>
              <li class="breadcrumb-item"><a href="all_questions_subject.php">All Qustions type</a></li>
              <li class="breadcrumb-item"><a href="#">Add New</a></li>
            
            </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
       <h1 class="h2">All Qustions type</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
               
              </div>
              <!-- <a class="btn btn-primary" href="add_cutomer.php">+Add new</a> -->
            </div>
          </div>
          <div style="width: 60%; margin-left: 20%; background-color: #F2F4F4;" >
            <div id="msg"></div>
             <form action="set_questions_subject.php" method="post" style="margin:3%; padding: 3%;" >

                  <div class="form-group">
                    <label for="Admin Type">Choose  Category</label>
                    <select  name="category" required="required" class="form-control" id="category">
                       <option  disabled="disabled"> Select  category</option>
                      <?php
                       $sql = mysqli_query($conn,"select * from job_category");
                       while($row=mysqli_fetch_array($sql)){?>

                        <option value="<?php echo $row['id']; ?>"> <?php echo $row['category']; ?></option>

                      <?php
                       }
                      ?>
                   
                    </select>
                    </div>


                 <div class="form-group">
                    <label for="Cutomer Email">Set  1 </label>
                    <input type="text" name="Set1" id="Set1" required="required" class="form-control" placeholder="Enter Title">
                 </div>
                    <div class="form-group">
                    <label for="Cutomer Username">Set 2</label>
                    <input type="text"  name="Set2" id="Set2" required="required" class="form-control" placeholder="Enter Title">
                 </div>
                  <div class="form-group">
                    <label for="First name">Set 3</label>
                    <input type="pass"  name="Set3" id="Set3"  required="required" class="form-control" placeholder="Enter Title">
                 </div>
               
                  <div class="form-group">
                    <label for="First name">Set 4</label>
                    <input type="text" name="Set4" id="Set4" required="required" class="form-control" placeholder="Enter Title">
                 </div>
                  <div class="form-group">
                    <label for="Last name">Set 5</label>
                    <input type="text"  name="Set5" id="Set5" required="required" class="form-control" placeholder="Enter Title">
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

   
  </body>
</html>
<?php 
if (isset($_POST['submit'])) {


echo   $sql = "insert into question_title(set1,set2,set3,set4,set5,category)Values('".$_POST['Set1']."','".$_POST['Set2']."','".$_POST['Set3']."','".$_POST['Set4']."','".$_POST['Set5']."','".$_POST['category']."')";

  $Ok= mysqli_query($conn, $sql);

  if($Ok){
      echo "<script>alert('Qustions Added Successfully!'); </script>";
    }else{
        echo "<script>alert('Please try Again!'); </script>";
    }


}


 ?>