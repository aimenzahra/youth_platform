<?php include 'header.php';

if(isset($_POST['submit'])){

 $business_name= $_POST['business_name'];
 $add_title=$_POST['add_title'];
 $business_desc=$_POST['business_desc'];
  $image2 = $_FILES['add_image']['name'];


$add_no=rand(0,100000);
$target_dir = "../add_images/";
 $path=$target_dir.$add_no.'_'.$image2;
 $target_file = $target_dir . basename($_FILES["add_image"]["name"]);
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   move_uploaded_file($_FILES['add_image']['tmp_name'],$path);
   $image=$add_no.'_'.$image2;

     $sql = "INSERT INTO business_promotions(add_no,business_name,add_title,business_desc,add_image)
    VALUES ('$add_no','$business_name','$add_title','$business_desc','$image')";
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
                     <h2>Create New Business Ad</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />

                   <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 text-center"></div>
                    <div class="col-lg-4 col-md-4 col-12 text-center">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="" required class="form-control" name="business_name" placeholder="Business name"><br>

                            <input type="" required class="form-control" name="add_title" placeholder="Enter Ad Tittle"><br>


                            <textarea style="resize: none;" rows="5" required class="form-control" name="business_desc" placeholder="Enter Ad Description"></textarea>
                            <br>
                             <label>Ad Image</label>
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
