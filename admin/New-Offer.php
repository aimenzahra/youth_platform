<?php include 'header.php';

if(isset($_POST['submit'])){

 $job_tittle= $_POST['job_tittle'];
 $job_desc=$_POST['job_desc'];
 $job_location=$_POST['job_location'];
 $last_date=$_POST['last_date'];
 $t_vacansies=$_POST['t_vacansies'];

 $image2 = $_FILES['add_image']['name'];


$add_no=rand(0,100000);
$target_dir = "../job_images/";
 $path=$target_dir.$add_no.'_'.$image2;
 $target_file = $target_dir . basename($_FILES["add_image"]["name"]);
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   move_uploaded_file($_FILES['add_image']['tmp_name'],$path);
   $image=$add_no.'_'.$image2;

     $sql = "INSERT INTO jobs(add_no,job_tittle,job_desc,job_location,last_date ,add_image, t_vacansies)
    VALUES ('$add_no','$job_tittle','$job_desc','$job_location','$last_date','$image','$t_vacansies')";
    if (mysqli_query($conn, $sql)) {
   
    ?>
      <script type="text/javascript">
        alert('Add Successfully.');
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
                     <h2>Create New Job Offer</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />

                   <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 text-center"></div>
                    <div class="col-lg-4 col-md-4 col-12 text-center">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="" required class="form-control" name="job_tittle" placeholder="Job Tittle"><br>

                            <textarea style="resize: none;" rows="5" required class="form-control" name="job_desc" placeholder="Enter Job Description"></textarea>
                            <br>


                             <input type="" required class="form-control" name="job_location" placeholder="Job Location"><br>


                             <input type="number" required class="form-control" name="t_vacansies" placeholder="Enter Total Vacansies"><br>


                             <label>Apply Last Date</label>
                             <input type="date" required class="form-control" name="last_date"><br>






                             <label>Job Ad Image</label>
                             <input type="file" required class="form-control" name="add_image" placeholder="Enter Ad Tittle"><br>


                           




                             <button name="submit" class="btn btn-sm" style="background-color: #141859;color: white;border-radius: 5px;padding: 10px;">Submit</button>

                        </form>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 text-center"></div>


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
