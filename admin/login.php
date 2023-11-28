<?php
include "../config.php";
if(isset($_POST['login'])){

 $email= $_POST['email'];
 $password=$_POST['password'];

   $query_Admin = mysqli_query($conn,"SELECT * FROM admin WHERE email ='$email' AND password='$password'") or die(mysqli_error($query_Admin)); 

   if(mysqli_num_rows($query_Admin)>0){
    $_SESSION['Admin']= 'Admin';

    ?>
   <script type="text/javascript">
    window.location.href = "index.php";
  </script>

  <?php

  }

  else{
    ?>
    <script type="text/javascript">
      alert('Please Enter Correct Details.');
      window.location.href = "login.php";
    </script>
    <?php
  }
}
?>
 

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
       
      
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 class="text-center">Admin Login</h2>   
                    </div>
               
                </div>              
                 <!-- /. ROW  -->
                  <hr />

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 text-center"></div>
                    <div class="col-lg-4 col-md-4 col-12 text-center">
                        <form action="" method="POST">
                            <input type="" required class="form-control" name="email" placeholder="Enter Your Email"><br>

                             <input type="password" required class="form-control" name="password" placeholder="Enter Your Password"><br><br>

                             <button name="login" class="btn" style="background-color: #141859;color: white;font-size: 20px;border-radius: 5px;">Login</button>

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
