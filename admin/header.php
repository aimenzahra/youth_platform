<?php

    include '../config.php';

if (isset($_SESSION['Admin'])) {
  
 $user_type=$_SESSION['Admin'];
  

  if ($user_type=="Admin") {




  }
  else{
    ?>
    <script type="text/javascript">
      window.location.href = "login.php";
    </script>
    <?php
  }
}
else{
    ?>
    <script type="text/javascript">
      window.location.href = "login.php";
    </script>
    <?php
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