   <?php
   include 'config.php';
   $ad=$_GET['ad'];
   $query = "SELECT * FROM business_promotions WHERE add_no='$ad'";
   $result = mysqli_query($conn, $query);  
   $row = mysqli_fetch_array($result);

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
       <?php echo $row['add_title']; ?>
     </h2>
   </div> 
   <div class="row mt-5 justify-content-center" style="padding: 40px;">



    <div class="col-lg-3 col-md-3 col-12 mr-3 mb-3" style="height: auto;box-shadow: 5px 5px 10px #1CBBB4;overflow: hidden;padding-top: 5px;padding-bottom: 10px;">


      <div class="image" style="background-image: url('add_images/<?php echo $row['add_image']; ?>'); height: 200px; background-repeat: no-repeat; background-size: 100% 400px;"></div>
      <div></div>

      <h2 class="mt-2"><?php echo $row['add_title']; ?></h2>

      <h6 style="display:inline;font-weight: bold;">Business:</h6>
      <p style="display:inline;"><?php echo $row['business_name']; ?></p>
<br><br>
      <h6 style="display:inline;font-weight: bold;">Detail:</h6>
      <p style="display:inline;"><?php echo $row['business_desc']; ?></p>




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