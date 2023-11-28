<?php include 'header.php';

if(isset($_POST['delete'])){

 $ad_no= $_POST['ad_no'];



     $sql = "DELETE FROM business_promotions WHERE add_no='$ad_no'";
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
                     <h2>All Candidate Applications for jobs</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />

                   <div class="row container-fluid">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Job#</th>
                                    <th>Candidate Name</th>
                                    <th>Father Name</th>
                                    <th>CNIC</th>
                                    <th>Address</th>
                                    <th>Phone No</th>
                                    <th>Email</th>
                                    <th>Education</th>


                                </tr>
                            </thead>
                            <tbody>
 <?php
                  $query = "SELECT * FROM applied ORDER By id DESC";
                  $result = mysqli_query($conn, $query);  
                  if ($result->num_rows > 0) {
                    $x=1;
                    while($row = mysqli_fetch_array($result))  
                    { ?>                             
                                <tr>
                                    <td><?php echo $row['job_id'];?></td>
                                    <td><?php echo $row['full_name'];?></td>
                                    <td><?php echo $row['f_name'];?></td>
                                    <td><?php echo $row['cnic'];?></td>
                                    <td><?php echo $row['address'];?></td>
                                    <td><?php echo $row['phone'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['education'];?></td>

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
