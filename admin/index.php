<?php include 'header.php';?>

<body>
    <div id="wrapper">
          <?php include 'navbar.php';?>
    
        <!-- /. NAV TOP  -->
          <?php include 'sidebar.php';?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Admin Dashboard</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-12">
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                                <i class="fa fa-bar-chart-o fa-5x"></i>
                                <h3><?php
      $query = "SELECT * FROM business_promotions";
      $result = mysqli_query($conn, $query); 
      echo mysqli_num_rows($result);
      ?> </h3>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                Total Ads
                            
                            </div>
                        </div>
                    </div>


                     <div class="col-md-4 col-sm-4 col-12">
                        <div class="panel panel-primary text-center no-boder" style="background-color: #14A44D;">
                            <div class="panel-body">
                                <i class="fa fa-bar-chart-o fa-5x" style="color:white"></i>
                                <h3 style="color:white"><?php
      $query = "SELECT * FROM jobs";
      $result = mysqli_query($conn, $query); 
      echo mysqli_num_rows($result);
      ?> </h3>
                            </div>
                            <div class="panel-footer" style="color:white;background-color: black;">
                                Total Jobs Offer
                            
                            </div>
                        </div>
                    </div>



                      <div class="col-md-4 col-sm-4 col-12">
                        <div class="panel panel-primary text-center no-boder" style="background-color: #332D2D;">
                            <div class="panel-body">
                                <i class="fa fa-bar-chart-o fa-5x" style="color:white"></i>
                                <h3 style="color:white"><?php
      $query = "SELECT * FROM scholarships";
      $result = mysqli_query($conn, $query); 
      echo mysqli_num_rows($result);
      ?> </h3>
                            </div>
                            <div class="panel-footer" style="color:white;background-color: black;">
                                Total Scholarship Plan
                            
                            </div>
                        </div>
                    </div>




                   
               

                </div>
                <!-- /. ROW  -->
    
                <!-- /. ROW  -->
<div class="row">
                    <div class="col-md-12">
                     <h2>Recent Job Applications</h2>   
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
                  $query = "SELECT * FROM applied ORDER By id DESC LIMIT 5";
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
