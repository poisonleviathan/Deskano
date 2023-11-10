<?php 
 include('include/header.php');
 include('include/sidebar.php');
 ?>
  <?php 
  $sql= "select * from all_jobs LEFT JOIN employer ON all_jobs.customer_email=employer.email LEFT JOIN job_category ON all_jobs.category=job_category.id where job_id=".$_GET['id'];

   $query=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($query)){ 
                       
      $employer_name= $row['first_name']." ".$row['last_name'];
      $comapany_name= $row['company_name'];
      $comapany_email= $row['customer_email'];
      $job_title= $row['job_title'];
      $des= $row['des'];
      $address= $row['city']." ". $row['state']." ". $row['country'];
      $category= $row['category'];
    } ?>


  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashoard</a></li>
              <li class="breadcrumb-item"><a href="#">Jobs</a></li>
            
            </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
       <h1 class="h2"> <?php echo $job_title; ?> Details</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
               
              </div>
              <!-- <a class="btn btn-primary" href="add_create_job.php">Create Job</a> -->
            </div>
          </div>


    <div class="col-lg-12">




    	 <table id="example" class="display" style="width:100%">
    	 	 <thead>
            <tr>
               
                <th>Employer Email</th>
                <th>Job Title</th>
              
            </tr>
        </thead>
                <tr>
                 	<td style="font-weight: bold; font-size: 30">Employer Name : </td>
    			 	<td> <?php echo $employer_name; ?></td>
    			</tr>
    			   
    			 <tr>
    			  	<td style="font-weight: bold; font-size: 30">Company Name : </td>
    			  <td> <?php echo $comapany_name; ?></td> 

    			</tr>
    			
    			<tr>
    					<td style="font-weight: bold; font-size: 30">Company Email : </td>
    				 <td> <?php echo $comapany_email ?></td>
    			</tr>

    			<tr>
    					<td style="font-weight: bold; font-size: 30">Job title : </td>
    				 <td> <?php echo $job_title ?></td>
    			</tr>
    			
    			<tr>
    				<td style="font-weight: bold; font-size: 30">Job Descpriton : </td>
    				 <td><?php echo  $des ?></td>
    			</tr>
    			

    			<tr>
    					<td style="font-weight: bold; font-size: 30">Location : </td>
    				 <td> <?php echo $address ?></td>
    			</tr>
    			

    			<tr>
    					<td style="font-weight: bold; font-size: 30">Category : </td>
    				 <td><?php echo  $category ?></td>
    			</tr>


    	 </table>
    	

    

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
