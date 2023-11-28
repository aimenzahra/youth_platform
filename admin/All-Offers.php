<?php include 'header.php';

if(isset($_POST['delete'])){

 $ad_no= $_POST['ad_no'];



     $sql = "DELETE FROM jobs WHERE add_no='$ad_no'";
    if (mysqli_query($conn, $sql)) {
   
    ?>
      <script type="text/javascript">
        alert('Delete Successfully.');
        window.location.href = "";
      </script>

      <?php

    }


}
?>

<body>
     
           
          
    <div id="wrapper">
                  <?php include 'navbar.php';?>

                <?php include 'sidebar.php';?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>All Job Ads History</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />

                   <div class="row container-fluid">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Job#</th>
                                    <th>Job Tittle</th>
                                    <th>Job Description</th>
                                    <th>Job Location</th>
                                    <th>Last Date</th>
                                    <th>Total Vacansies</th>

                                    <th>Ad Image</th>
                                    <th>Action</th>


                                </tr>
                            </thead>
                            <tbody>
 <?php
                  $query = "SELECT * FROM jobs ORDER By id DESC";
                  $result = mysqli_query($conn, $query);  
                  if ($result->num_rows > 0) {
                    $x=1;
                    while($row = mysqli_fetch_array($result))  
                    { ?>                             
                                <tr>
                                    <td><?php echo $row['add_no'];?></td>
                                    <td><?php echo $row['job_tittle'];?></td>
                                    <td><?php echo $row['job_desc'];?></td>
                                    <td><?php echo $row['job_location'];?></td>
                                    <td><?php echo $row['last_date'];?></td>
                                    <td><?php echo $row['t_vacansies'];?></td>

                                    <td>
                                      <a href="../job_images/<?php echo $row['add_image'];?>" target="blank">
                                        <button class="btn" style="background-color: #141859;color: white;border-radius: 10px;">View Image</button>
                                      </a>
                                    </td>
                                    <td>
                                      <form action="" method="POST">
                                        <input type="hidden" value="<?php echo $row['add_no'];?>" name="ad_no">
                                         <button name="delete" class="btn btn-danger" style="border-radius: 10px;">Delete</button>
                                      </form>
                                    </td>


                                </tr>
        <?php $x++; } } ?>


                            </tbody>
                        </table>

                    </div>


                </div>
              
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
