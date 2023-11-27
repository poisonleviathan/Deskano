<?php 
 include('connection/db.php');

 include('include/header.php');
 include('include/sidebar.php');
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashoard</a></li>
              <li class="breadcrumb-item"><a href="#">Send E-Mail</a></li>
            
            </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
       <h1 class="h2"> Send E-Mail</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
               
              </div>
            
            </div>
          </div>

         <form  action="phpmailer.php" method="post" style="border: 1px solid gray; width:60%; margin-left: 10% ;padding: 10px;">
        <?php 
         include('connection/db.php');
     $id=$_GET['id'];
      $sql= "select * from   job_apply LEFT JOIN all_jobs
ON job_apply.id_job = all_jobs.job_id   where id='$id'";

         $query=mysqli_query($conn,$sql);
     
        while($row=mysqli_fetch_array($query)){
            $name= $row['First_name']." ".$row['Last_name'];
             $email= $row['job_seeker'];
             $mobile= $row['mobile_number'];
             $exp= $row['experience'];
             $college= $row['college'];


        $sql= "insert into selected_canditate(name,email,mobile,exp,college,emp)values('$name','$email','$mobile','$exp','$college','".$_SESSION['email']."')";

          $sqlInsertquery= mysqli_query($conn,$sql);

          if ($sqlInsertquery) {
             echo "";
          }else{
            exit(0);
          }
          
        ?>
                 <h1><?php echo strtoupper($row['First_name']); ?> <?php echo strtoupper($row['Last_name']); ?></h1>
                 <hr>   
        
            	<input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
              <div class="form-group">
                <label for="">To :</label>
                 <td><input type="email" name="to" id="to" class="form-control" value="<?php echo $row['job_seeker']; ?>"></td>
              </div>
            
                   <div class="form-group">
                <label for="">From:</label>
                 <td><input type="email" id="from" name="from" class="form-control" placeholder="from..."></td>
              </div>
              
              <div class="form-group">
                <label for="">Mail:</label>
                 <td> <textarea name="body" id="body" class="form-control"  rows="20">
                    <p>Dear <?php echo strtoupper($row['First_name']); ?> <?php echo strtoupper($row['Last_name']); ?>,</p>

                    <p>We are pleased to invite you for an interview for the position of [Job Title] at [Company Name]. Your application has been reviewed, and we are impressed with your qualifications and experience.</p>

                    <p>Details of the interview are as follows:</p>

                    <ul>
                        <li><strong>Date:</strong> [Interview Date]</li>
                        <li><strong>Time:</strong> [Interview Time]</li>
                        <li><strong>Location:</strong> [Interview Location]</li>
                    </ul>

                    <p>Please come prepared for the interview and bring copies of your resume and any relevant documents. If you have any questions or need to reschedule, please contact us at [Contact Email] or [Contact Phone Number].</p>

                    <p>We look forward to meeting with you and discussing your potential contribution to our team.</p>

                    <p>Best regards,</p>
                    <p>[Your Name]</p>
                    <p>[Your Title]</p>
                    <p>[Company Name]</p>

                  </textarea> </td>
             </div>
              
              
          <?php   }  ?>
         
         <input type="submit"  class="btn btn-success btn-block" name="submit" id="submit" value="Send">
           
     </form>
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
    // Initialize CKEditor
    CKEDITOR.replace('body');
</script>
   
  </body>
</html>
 <!--  <script>
    $(document).ready(function() {
   $("#submit").click(function(){
    alert("hii");
   })
  </script> -->