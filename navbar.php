 <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="" />
            <span>
              Youth Platform
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Scholarships.php"> Scholarships</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Business-Ads.php">Business Ads </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Jobs.php"> Jobs </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="Contact-US.php"> Contact US </a>
              </li>

<?php

if (isset($_SESSION['session_user'])) {
  
  ?>

  <li class="nav-item">
                <a class="nav-link btn btn-sm" style="background-color: #1CBBB4;" href="profile.php"> User Profile </a>
              </li
              ><?php
  }
  else { ?>

              <li class="nav-item">
                <a class="nav-link btn btn-sm" style="background-color: #1CBBB4;" href="login.php"> Login / Register </a>
              </li>
<?php } ?>

            </ul>

      
           
          </div>
          <div>
            <div class="custom_menu-btn ">
              <button>
                <span class=" s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
          </div>

        </nav>
      </div>
    </header>