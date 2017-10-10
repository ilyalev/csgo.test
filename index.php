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
    <link href="css/w3.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Bet site</a>
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
      
      <p style="margin:-10px;font-size: 150%;padding-bottom: 20px;">Place bet on:</p>
        <div class="betmodal-teamwin" >
          <img src="" width="50" height="50"  align="center" id="betmodal-logoselectteam">
          <span id="betmodal-nameselecteam" class="betmodal-nameselecteam" style="margin-left: 20px; margin-top: 10px;"></span>
        </div>
        <div class="betmodal-body-bet" align="left">
          <span class="betmodal-nameselecteam">Ставка</span><input type="text" id="inputBet" class="betinput pull-right" style="text-align: right;" placeholder="Bet" maxlength="5"  autofocus="true">
        </div>
        <div class="betmodal-body-win" align="left">
          <span class="betmodal-nameselecteam">Выигрыш</span><input type="text" id="betwin" class="wininput" maxlength="5" readonly>
          
        </div>
        <button type="button" class="btn btn-block btn-success btn-sm" data-toggle="collapse" data-target="#prediction_text" >Prediction</button>
        <div id="prediction_text" class="collapse">
        <textarea class="modal-body-betform-control" style="width: 460px;height: 150px;color: black;" id="comment" row="7"></textarea>
        </div>
    </div>
    
    <div class="modal-footer">
      <button type="button" class="btn btn-block btn-success btn-lg" data-dismiss="modal" id = "placeBet">Place bet</button>
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
  <div class="main" style = "">

<h3>Upcoming matches CS:GO</h3>
    
    <div class="upcoming-matches">
    

      <?php
        require_once('lib/csgo_m.php');
      ?>
    </div>
    <h3 >Live matches CS:GO</h3>
    <div class="live-matches">
    
      <?php
        require_once('lib/csgo_l.php');
      ?>
    </div>
    <h3 >Result matches CS:GO</h3>
    <div class="result-matches">
    
      <?php
        require_once('lib/csgo_r.php');
      ?>
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
<?php
echo '<script>var userhash = "'.$_SESSION['hashuser'].'";</script>';
?>
<div class="navbar navbar-inverse navbar-fixed-bottom">
  copyrigth
</div>


<script>
var matchId, team1Logo, team1Name, team2Logo, team2Name,eventName, eventLogo, sideA;

$(".btn-bet").on('click',function(){
  
  matchId = $(this).attr("data-match");
  team1Logo = $("#"+matchId).find(".logoTeam1-img").attr("src");
  team2Logo = $("#"+matchId).find(".logoTeam2-img").attr("src");
  team1Name = $("#"+matchId).find(".pTeam1").html();
  team2Name = $("#"+matchId).find(".pTeam2").html();
  eventName = $("#"+matchId).find(".logoEvent").children().attr("title");
  eventLogo = $("#"+matchId).find(".logoEvent").children().attr("src");

  $("#betteam1logo").attr("src",team1Logo);
  $("#betteam2logo").attr("src",team2Logo);
  $("#betteamname").text(team1Name + ' vs '+team2Name);
  $("#beteventname").text(eventName);

  if ($(this).id = "bet-sideA"){
    sideA="sideA";
    $("#betmodal-logoselectteam").attr("src",team1Logo);
    $("#betmodal-nameselecteam").text(team1Name);
  }
    else {
      $("#betmodal-logoselectteam").attr("src",team2Logo);
      $("#betmodal-nameselecteam").text(team2Name);
      sideA="sideB";
    }
});

$("#placeBet").on('click',function(){
  var bet = $("#inputBet").val();
console.log('index/'+matchId+'/'+sideA+'/'+bet+'/'+userhash);
});
</script>
<script>
  
$("#fadematches").on('click', function() {
  $("#2313950" ).fadeOut("slow", function(){
   $(".live-matches").prepend($("#2313950" ));
    $("#2313950" ).fadeIn( "slow");
  });
});

</script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>

  </body>
</html>