<?php
    require_once ('steamauth/steamauth.php');
  # You would uncomment the line beneath to make it refresh the data every time the page is loaded
  // unset($_SESSION['steam_uptodate']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <style>
    @import url(http://fonts.googleapis.com/css?family=Open+Sans);

    </style>
    <link href="css/main.css" rel="stylesheet">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            
            
            
    <?php
      if(!isset($_SESSION['steamid'])) {
      loginbutton(rectangle); //login button
      }  
?>  

          
          </ul>
          
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
      <!-- navigation bar -->
        <div class="col-md-2" style = "background-color: #1b2838; border: 1px solid black" align="left">
          <?php 
            require_once("lib/navbar.php");
          ?>
        </div>

<!-- main page -->
        <?php
         if($_SESSION['steamid']){
          echo '<div class="col-md-8 main" style = "background-color: #1b2838; border: 1px solid black">';
         }else echo '<div class="col-md-10 main" style = "background-color: #1b2838; border: 1px solid black">';
        ?>
        <h2 class="sub-header">Result CS GO</h2>
          <?php
          require_once('lib/csgo_r.php');
          ?>
          
        </div>

       <!-- user block -->
         <?php
        if($_SESSION['steamid']){
          require_once ('steamauth/userInfo.php');
          require_once('lib/checkbalance.php');
          require_once("lib/userblock.php");
        }

        ?>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>