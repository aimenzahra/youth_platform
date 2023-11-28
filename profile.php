<?php
session_start();

if (isset($_SESSION['session_user'])) {
  include 'config.php';
 $session_userid=$_SESSION['session_user'];
  
  $query_loginuser = "SELECT * FROM users WHERE reg_no='$session_userid'";
  $result_loginuser = mysqli_query($conn, $query_loginuser);
  $row_loginuser = mysqli_fetch_array($result_loginuser);



}
else{
    ?>
    <script type="text/javascript">
      window.location.href = "login.php";
    </script>
    <?php
  }



if(isset($_POST['submit'])){


 $name= $_POST['name'];
 $phone=$_POST['phone'];
 $email=$_POST['email'];
 $password=$_POST['password'];

 $sql = "UPDATE  users SET name='$name',phone='$phone',email='$email',password='$password' WHERE reg_no='$session_userid'";
    if (mysqli_query($conn, $sql)) {
   
    ?>
      <script type="text/javascript">
        alert('Detail Update successfully.');
        window.location.href = "";
      </script>

      <?php

    }



}

   ?>  

   <!DOCTYPE html>
   <html>

   <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Youth Platform</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- Custom styles for youthplatform -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
  </head>



  <body style="overflow-x: hidden;">
    <div class="hero_area" style="height: auto;">
      <!-- header section strats -->
        <?php include 'navbar.php'; ?>

      <!-- end header section -->

      <!-- end slider section -->
    </div>

    <div class="heading_container mt-5">
      <h2 style="text-align: center;width: 100%;">
       User Details
     </h2>
   </div> 
   <div class="row" style="padding: 40px;">

<div class="col-lg-6 col-md-6 col-12 mt-5" style="padding-bottom: 50px;padding-top: 50px;box-shadow: 10px 10px #1CBBB4;border: 1px solid #1CBBB4;">

 
  <div class="row">
  <div class="col-12 text-center h4" style="font-weight: bold;">Your Details</div>
  </div>

  <div class="row mt-3">
  <div class="col-6 text-right" style="font-weight: bold;">Name</div>
  <div class="col-6 text-left"><?php echo $row_loginuser['name']; ?></div>
  </div>

  <div class="row mt-3">
  <div class="col-6 text-right" style="font-weight: bold;">Phone</div>
  <div class="col-6 text-left"><?php echo $row_loginuser['phone']; ?></div>
  </div>

  <div class="row mt-3">
  <div class="col-6 text-right" style="font-weight: bold;">Email</div>
  <div class="col-6 text-left"><?php echo $row_loginuser['email']; ?></div>
  </div>


   <div class="row mt-3">
  <div class="col-6 text-right" style="font-weight: bold;">Password</div>
  <div class="col-6 text-left"><?php echo $row_loginuser['password']; ?></div>
  </div>


</div>







<div class="col-lg-6 col-md-6 col-12 mt-5" style="padding-bottom: 50px;padding-top: 50px;box-shadow: 10px 10px #1CBBB4;">

 
  <div class="row">
  <div class="col-12 text-center h4" style="font-weight: bold;">Update</div>
  </div>



 <div class="row mt-3">
                    <div class="col-lg-2 col-md-2 col-12 text-center"></div>
                    <div class="col-lg-8 col-md-8 col-12 text-center">
                        <form action="" method="POST">

                            
           <input required type="" value="<?php echo $row_loginuser['name']; ?>" required class="form-control" name="name" placeholder="Enter your name"><br>



<input required type="number" value="<?php echo $row_loginuser['phone']; ?>" required class="form-control" name="phone" placeholder="Enter your phone"><br>


                            <input value="<?php echo $row_loginuser['email']; ?>" required type="email" required class="form-control" name="email" placeholder="Enter your email"><br>


                            <input value="<?php echo $row_loginuser['password']; ?>" required type="" required class="form-control" name="password" placeholder="Enter your password">

                            <br>

                          
                             <button name="submit" class="btn" style="background-color: #1A2E35;color: white;font-size: 20px;border-radius: 5px;">Submit</button>

                        </form>
                    </div>

                    <div class="col-lg-2 col-md-2 col-12 text-center"></div>


                </div>

</div>

  </div>





</body>







  <section class="info_section ">
    <div class="info_container layout_padding-top">
      <div class="container">
        <div class="info_top">
          <div class="info_logo">
            <img src="images/logo.png" alt="" />
            <span>
              Youth Platform

            </span>
          </div>
          <div class="social_box">
            <a href="#">
              <img src="images/fb.png" alt="">
            </a>
            <a href="#">
              <img src="images/twitter.png" alt="">
            </a>
            <a href="#">
              <img src="images/linkedin.png" alt="">
            </a>
            <a href="#">
              <img src="images/instagram.png" alt="">
            </a>
            <a href="#">
              <img src="images/youtube.png" alt="">
            </a>
          </div>
        </div>

        <div class="info_main">
          <div class="row">
            <div class="col-md-3 col-lg-2">
              <div class="info_link-box">
                <h5>
                  Useful Link
                </h5>
                <ul>
                  <li class="active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="">
                <a class="" href="Scholarships.php"> Scholarships</a>
              </li>
              <li class="">
                <a class="" href="Business-Ads.php">Business Ads </a>
              </li>
              <li class="">
                <a class="" href="Jobs.php"> Jobs </a>
              </li>

              <li class="">
                <a class="" href="Contact-US.php"> Contact Us </a>
              </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 ">
              <h5>
                Address
              </h5>
              <p>
                Pakistan
              </p>
            </div>

            <div class="col-md-3 col-lg-2 offset-lg-1">
              <h5>
                Information
              </h5>
              <p>
              We are committed to empowering the youth by offering a plethora of resources, mentorship programs, and skill-building initiatives.
              </p>
            </div>

            <div class="col-md-3  offset-lg-1">
              <div class="info_form ">
                <h5>
                  Newsletter
                </h5>
                <form action="">
                  <input type="email" placeholder="Email">
                  <button>
                    Subscribe
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9 col-md-10 mx-auto">
            <div class="info_contact layout_padding2">
              <div class="row">
                <div class="col-md-3">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="images/location.png" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        Location
                      </h6>
                    </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="images/mail.png" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        demo@gmail.com
                      </h6>
                    </div>
                  </a>
                </div>
                <div class="col-md-5">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="images/call.png" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        Call +92 1234567890
                      </h6>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end info section -->



  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>


</body>
</body>

</html>