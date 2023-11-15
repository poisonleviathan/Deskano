<?php 
 include('connection/db.php');

 include('include/header.php');
 include('include/sidebar.php');
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashoard</a></li>
              <li class="breadcrumb-item"><a href="#">Applied Jobs</a></li>
            
            </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
       <h1 class="h2"> Applied Jobs</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
               
              </div>
            
            </div>
          </div>

         <form action="" style="border: 1px solid gray; width: 80%; margin-left: 10% ;padding: 13px;">
        <?php 
         include('connection/db.php');
     $id=$_GET['id'];
      $sql= "select * from job_apply LEFT JOIN all_jobs
             ON job_apply.id_job = all_jobs.job_id   where id='$id'";

         $query=mysqli_query($conn,$sql);
     
        while($row=mysqli_fetch_array($query)){
          
        ?>        <div style="background-color: #1F618D;padding: 20px; color: white;">
                     <div style=" margin: 13px;color: white;"><h1 ><?php echo strtoupper($row['first_name']); ?> <?php echo strtoupper($row['last_name']); ?></h1>
                     
                     </div>
                      </div>
                        <hr>   
              
               
        
            	
              <div class="form-group">
                <label for="" style="color: #1F618D; font-size: 15px">Job Title :</label>
                 <p style="font-size: 20px" ><?php echo ucfirst($row['job_title']); ?></p>
              </div> <hr>   
            
                   <div class="form-group">
                <label for="" style="color: #1F618D; font-size: 15px">Job Description :</label>
                 <p  style="font-size: 13px" ><?php echo ucfirst($row['des']); ?></p>
              </div> <hr>   
              
              <div class="form-group">
                <label for="" style="color: #1F618D; font-size: 15px">Job Seeker Name :</label>
                 <p  style="font-size: 13px" ><?php echo ucfirst($row['first_name']); ?> <?php echo ucfirst($row['last_name']); ?></p>
             </div> <hr>   
              
                <div class="form-group">
                <label style="color: #1F618D; font-size: 15px" >Job Seeker Email :</label>
                 <p  style="font-size: 13px" ><?php echo ucfirst($row['job_seeker']) ?></p>
             </div> <hr>   
              
              <div class="form-group">
                <label style="color: #1F618D; font-size: 15px" >Job Seeker Date Of Birth :</label>
                 <p  style="font-size: 13px" ><?php echo ucfirst($row['dob']) ?></p>
             </div> <hr>  

                

              <div class="form-group">
                <label style="color: #1F618D; font-size: 15px" >Experience :</label>
                 <p  style="font-size: 13px" ><?php 
                       if(empty( ucfirst($row['experience']))){
                        echo "Freasher";
                       }else{
                        echo ucfirst($row['experience'])." yr";
                       }


                 ?></p>
             </div> <hr>   


               <div class="form-group">
                <label style="color: #1F618D; font-size: 15px" >Last Qualification :</label>
                 <p  style="font-size: 13px" ><?php echo ucfirst($row['qualification']) ?></p>
             </div> <hr>   

               <div class="form-group">
                <label style="color: #1F618D; font-size: 15px" >Percentage :</label>
                 <p  style="font-size: 13px" ><?php               
                         echo ucfirst($row['percentage']." %"); ?></p>
             </div> <hr>   
               <div class="form-group">
                <label style="color: #1F618D; font-size: 15px" >Passout:</label>
                 <p  style="font-size: 13px" ><?php echo ucfirst($row['passout']); ?></p>
             </div> <hr> 


           <div class="form-group">
                <label style="color: #1F618D; font-size: 15px" >Job Seeker File :</label>
                <p  style="font-size: 13px" ><a href="http://localhost/Deskano/files/<?php echo $row['file']; ?>">Download File </a></p>
           </div> <hr>   


  
         

                

          <?php   }  ?>
         <a href="send_mail.php?id=<?php echo $id ;?>" class="btn btn-success">Accept</a>
         <a href="reject_job.php?id=<?php echo $id ;?>" class="btn btn-danger">Reject</a>
         
           
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
    $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>
   
  </body>
</html>
