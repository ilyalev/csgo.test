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
   
    <script src="https://use.fontawesome.com/a027d900ea.js"></script>
    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <div class="content1" data-text="Betsite.com">Betsite.com</div>
        </div>
        <div class="navbar-collapse collapse">
          <div class="userinfo" align="right">
            
            <?php
              if(!isset($_SESSION['steamid'])) {
                loginbutton(rectangle); //login button
              } else {
                require_once('lib/checkbalance.php');
                echo $_SESSION['steam_personaname'].'&nbsp;'.$_SESSION['balance'].'&nbsp;<i class="fa fa-diamond" aria-hidden="true"></i>&nbsp;&nbsp;';
                echo '<img src="'.$_SESSION['steam_avatarmedium'].'" width="50">';

              }
            ?>  
          </div>
        </div>
      </div>
    </div>



<div class="infopanel">
  <?php
  echo $_SESSION['hashuser'];
  ?>
</div>

<div class="container-fluid">


  <!-- navigation bar -->
  <div class="left-navbar navbar-fixed-topt" align="left">
    <?php 
      require_once("lib/navbar.php");
    ?>
  </div>

<!-- main page -->
  <div class="main" style = "height: 100%">

      <h3>Select items to deposit</h3>
      <div class="user-inventory">
        <h4>User inventory</h4>

        <?php
        require_once('lib/loaditems.php')
        ?>
      </div>
      <div class="deposit-btn">
        Total<br>
        <div class="total-dep">
          
        </div>
        <button>deposit</button>
      </div>
      <div class="deposit-inventory">
        <h4>items deposit</h4>
        
      </div>
   

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

<div class="navbar navbar-inverse navbar-fixed-bottom">
  copyrigth
</div>

<script>
      
    $(".user-item").on('click', function() {
      $(this).toggleClass("border-deposit");
      
    });
    
    </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>

  </body>
</html>