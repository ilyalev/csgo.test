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
<link href="css/main.css" rel="stylesheet">
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

<div id="betModal" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style = "background-color: #1b2838;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="betmodal-header">
          <div class="betmodal-logoTeam"> 
            <img src="" width="40" height="40" id="betteam1logo">
          </div>
          <div class="betmodal-gameinfo">
            <p class="betmodal-eventinfo" id = "beteventname"></p>
            <p class="betmogal-teamvs" id = "betteamname"></p>
          </div>
          <div class="betmodal-logoTeam"> 
            <img src="" width="40" height="40" id="betteam2logo">
          </div>
        </div>
        </div>
      </div>
      <div class="modal-body">
        <div class = "betmodal-body">
        <p style="margin:-10px;font-size: 150%;padding-bottom: 20px;">В этом противостоянии победит</p>
          <div class="betmodal-teamwin" >
            <img src="" width="50" height="50"  align="center" id="betmodal-logoselectteam">
            <span id="betmodal-nameselecteam" class="betmodal-nameselecteam"></span>
          </div>
          <div class="betmodal-body-bet" align="left">
            <span class="betmodal-nameselecteam">Ставка</span><input type="text" id="bet" class="form-control form-inline pull-right" placeholder="Сумма" maxlength="5"" style="width: 20%"  autofocus></label>
          </div>
          <div class="betmodal-body-win" align="left">
            <span class="betmodal-nameselecteam">Выигрыш</span><input type="text" id="bet" class="form-control form-inline pull-right" maxlength="5"" style="width: 20%"></label>
            
          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-block btn-success btn-lg" data-dismiss="modal">Place bet</button>
      </div>
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
        <h3 >Up coming matches CS:GO</h3>
          <?php
          require_once('lib/csgo_m.php');
          ?>
       
           <h3 >Live matches CS:GO</h3>
          <?php
          require_once('lib/csgo_l.php');
          ?>
        <h3 >Result matches CS:GO</h3>
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

    <script>

var classname = document.getElementsByClassName("btn-bet");
var myFunction = function(event) {
console.log(this.id);  
var srcelem = event.target;
var logoTeam1, logoTeam1, nameTeam1, nameTeam2, nameEvent;
var matchid;
elem = srcelem.parentNode;
elem = elem.parentNode;
matchid=elem.id;
console.log(elem.id);  
//при нажатии кнопки "ставки" на левую команду
for (var i = 0; i < elem.children.length; i++)
{
  if (i==1) {nameTeam1= elem.children[i].firstChild.innerHTML;
  console.log(nameTeam1); }
  if (i==2) {logoTeam1= elem.children[i].firstChild.getAttribute('src');
  console.log(logoTeam1); } 
  if (i==6) {logoTeam2= elem.children[i].firstChild.getAttribute('src');
  console.log(logoTeam2); } 
  if (i==7) {nameTeam2= elem.children[i].firstChild.innerHTML;
  console.log(nameTeam2); } 
  if (i==8){ nameEvent = elem.children[i].firstChild.getAttribute('title');
  console.log(nameEvent); } 
}
document.getElementById('betteam1logo').setAttribute('src',logoTeam1);
document.getElementById('betteam2logo').setAttribute('src',logoTeam2);
document.getElementById('betteamname').innerHTML=nameTeam1 +' vs ' + nameTeam2;
document.getElementById('beteventname').innerHTML=nameEvent;
if (this.id=='bet-sideA'){
  document.getElementById('betmodal-logoselectteam').setAttribute('src',logoTeam1);
  document.getElementById('betmodal-nameselecteam').innerHTML = nameTeam1;
} else {
  document.getElementById('betmodal-logoselectteam').setAttribute('src',logoTeam2);
  document.getElementById('betmodal-nameselecteam').innerHTML = nameTeam2;
}
 
}


/*elem = elem.previousElementSibling;
logoTeam1=elem.firstChild;  

nameTeam1 = logoTeam1.previousElementSibling;
elem = srcelem.parentNode;
elem=elem.nextElementSibling;
logoTeam2=elem.firstChild;
document.getElementById("winteamimage").setAttribute('src', elem1.getAttribute('src'));
nameTeam2=elem.nextElementSibling;

if (this.id=='bet-sideA'){document.getElementById("winteamimage").setAttribute('src', logoTeam1.getAttribute('src'));}
document.getElementById('teamwin').innerHTML = elem.innerHTML;

} */

for (var y = 0; y < classname.length; y++) {
    classname[y].addEventListener('click', myFunction, false);
}


    </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>