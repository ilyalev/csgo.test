<?php
require_once("bdconfig.php");
//echo '<table class="table table-bordered table-condensed">';

$q="SELECT * FROM matches WHERE 1 ORDER BY dateTime DESC LIMIT 10";
$res=$connect->query($q);
while ($row=$res->fetch_assoc()){

/*echo '<tr><td align = "left"><img src = "'.$row['eventLogo'].'" width = "25">'.$row['eventName'].'</td><td align="right">'.$row['team1Name'].'<img src="'.$row['team1Logo'].'" width = "25"></td><td>'.date('d-m-Y H:i',$row['dateTime']).'</td><td align="left"><img src="'.$row['team2Logo'].'" width = "25">'.$row['team2Name'].'</td><td>'.$row['format'].'</td></tr>';*/
echo '<div class="activematches" id ="'.$row['id'].'"><div class ="logoGame"><img src="images/csgo.png" class="logoGame-img" ></div><div class ="nameTeam1"><p class="pTeam1">';
echo $row['team1Name'].'</p></div><div class ="logoTeam1"><img src="'.$row['team1Logo'];
echo '" class="logoTeam1-img"></div><div class = "betTeam1"><button class="w3-button btn-bet" id ="bet-sideA" data-match ="'.$row['id'].'" data-toggle="modal" data-target="#betModal">10000</button></div><div class = "timeinfo">'.date('d-m-Y H:i',$row['dateTime']).'<br>'.$row['format'];
echo '</div><div class = "betTeam2"><button  class= "w3-button btn-bet" id ="bet-sideB" data-toggle="modal" data-target="#betModal">10000</button></div><div class ="logoTeam2"><img src="'.$row['team2Logo'];
echo '"  class="logoTeam2-img"></div><div class ="nameTeam2"><p class="pTeam2">'.$row['team2Name'];
if (!strripos($row['eventLogo'], 'nologo.png')){echo '</p></div><div class ="logoEvent" ><img src="'.$row['eventLogo'].'" width="35"  align ="right" title="'.$row['eventName'].'"></div></div>';}
else echo '</p></div><div class ="logoEvent" ><img src="images/nologo.png" width="35"  align ="right" title="'.$row['eventName'].'"></div></div>';


}


//echo $key->plaintext.'<br>';

//echo '</table>';

?>