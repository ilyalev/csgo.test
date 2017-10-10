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

      <h3>Select items to withdraw</h3>
      <div class="user-inventory">
        <h4>Store</h4>

        <?php
        require_once('lib/loadbotitems.php')
        ?>
      </div>
      <div class="deposit-items">
        <button class="w3-btn" id = "btn-deposit">deposit</button>
      </div>
      <div class="deposit-inventory">
        <h4>items deposit</h4>
        Total <span class="total-deposit">0</span>$
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
$("#btn-deposit").on('click', function(){
  
  var myarray = [];
  var myJSON = "";
  

  myarray.push({"userhash":userhash});
  console.log('click');
  $(".user-inventory").find(".user-item").each(function(i,elem){
    if ($(this).hasClass("border-deposit"))
    {
    var item = {
      "appid": 730,
      "contextid": 2,
      "assetid": $(this).attr('id')
      };
    myarray.push(item);
    }
  });
  myJSON = JSON.stringify({items:myarray});
  console.log(myJSON);

  $.post('http://localhost:3000/withdraw', {items:myJSON},function(result){},"json");


 
});

 
      
  $(".user-item").on('click', function() {

    //$(this).toggleClass("border-deposit");
    if ($(this).hasClass("border-deposit")){
      var td,itemp;
      $(this).removeClass("border-deposit");
      td = parseInt($(".total-deposit").text());
      itemp = parseInt($(this).find(".item-price").text());
     // console.log(td + ' - ' +itemp);
      td -=itemp; 

      $(".total-deposit").text(td);
    } else {
      $(this).addClass("border-deposit");
      td = parseInt($(".total-deposit").text());
      itemp = parseInt($(this).find(".item-price").text());
     // console.log(td + ' - ' +itemp);
      td +=itemp; 
      $(".total-deposit").text(td);
    }
  });


  

</script>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>

  </body>
</html>