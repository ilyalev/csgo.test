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

    <title>betsite</title>

    <!-- Bootstrap core CSS -->
    

    <!-- Custom styles for this template -->
    

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <style>
    @import url(http://fonts.googleapis.com/css?family=Open+Sans);

    body {
      background-color: #1b2838;
      color: white;
      font-family: "Open Sans";
      text-align: center;
    }
    .logo {
  float: left;
}
nav {
  float: right;
}
nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
}
nav li {
  display: inline-block; /*один из способов разместить элементы в строку*/
}
    </style>
  </head>

  <body>

  <header>
    <div class="container">
      <a href="index.php" class="logo">Project name</a>
      <nav>
      <ul>
      <?php
      if(!isset($_SESSION['steamid'])) {
      loginbutton(rectangle); //login button
      }else {
        require_once ('steamauth/userInfo.php');
        //Protected content
        echo '<li><img src="'.$steamprofile['avatar'].'" title="" alt="" /></li>'; // Display their avatar!
        echo '<li style="color: #888;">'.$steamprofile['personaname'].'</li>';
        echo '<li>';
        logoutbutton();
        }     
      echo '</li>';
      ?>  
      </ul>
      </nav>      
    </div>
  </header>
  
  <div class="main">
    <div class = "container">
      <div class="row"> 
        <div class="col-2-12" style="width: 16%; float: left; background-color: #1b2838" align="left">
          <nav>
           <ul>
            <li><a href="#">Matches</a></li>
            <li><a href="csgo_matches.php"><img src="images/csgo.png" width="25">  Counter Strike GO</a></li>
            <li><a href="#"><img src="images/dota2.png" width="25"> Dota2</a></li>
            <li><a href="#"><img src="images/lol.png" width="25">  LOL</a></li>
          </ul>
          <ul>
            <li><a href="#">Result</a></li>
            <li><a href="csgo_result.php"><img src="images/csgo.png" width="25">  Counter Strike GO</a></li>
            <li><a href="#"><img src="images/dota2.png" width="25"> Dota2</a></li>
            <li><a href="#"><img src="images/lol.png" width="25">  LOL</a></li>
          </ul>
          <ul>
            <li><a href="loadinv.php">Inventory</a></li>
            <li><a href="">History</a></li>
          </ul> 
          </nav>
        </div>
        <div class="col-8-12" style="width: 64%; float: left;">
          <h1>Live Matches</h1>
          <hr>
          <h2>Matches CS GO</h2>
          <hr>
          <?php
            require_once('lib/csgo_m.php');
          ?>
        </div>
        <div class="col-2-12" style="width: 16%; float: left;">
          
        </div>
      </div>
    </div>
  </div>

<footer>
  <div class="container">
  
  </div>
</footer>

</body>
</html>