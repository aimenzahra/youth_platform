<?php include 'header.php';

if(isset($_POST['submit'])){

 $tittle= $_POST['tittle'];
 $uni=$_POST['uni'];
 $field=$_POST['field'];
 $scholarship_desc=$_POST['scholarship_desc'];
 $date=$_POST['last_date'];

 $image2 = $_FILES['add_image']['name'];

$add_no=rand(0,100000);
$target_dir = "../job_images/";
 $path=$target_dir.$add_no.'_'.$image2;
 $target_file = $target_dir . basename($_FILES["add_image"]["name"]);
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   move_uploaded_file($_FILES['add_image']['tmp_name'],$path);
   $image=$add_no.'_'.$image2;

     $sql = "INSERT INTO scholarships(add_no,tittle,uni,field,scholarship_desc,add_image, date)
    VALUES ('$add_no','$tittle','$uni','$field','$scholarship_desc','$image','$date')";
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
                     <h2>Offer New Scholarship Plan</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />

                   <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 text-center"></div>
                    <div class="col-lg-4 col-md-4 col-12 text-center">
                        <form action="" method="POST" enctype="multipart/form-data">

                          <input type="" required class="form-control" name="tittle" placeholder="Enter Scholarship  Tittle"><br>


                            <input type="" required class="form-control" name="uni" placeholder="Enter Universty name"><br>

                             <input type="" required class="form-control" name="field" placeholder="Field Of Study"><br>

                            <textarea style="resize: none;" rows="5" required class="form-control" name="scholarship_desc" placeholder="Enter Scholarship Description"></textarea>
                            <br>


            


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
