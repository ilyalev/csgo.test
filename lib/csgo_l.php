<?php
require_once("bdconfig.php");
//echo '<table class="table table-bordered table-condensed">';

$q="SELECT * FROM livematches WHERE 1 ";
$res=$connect->query($q);
if ($res->num_rows>0){
while ($row=$res->fetch_assoc()){

/*echo '<tr><td align = "left"><img src = "'.$row['eventLogo'].'" width = "25">'.$row['eventName'].'</td><td align="right">'.$row['team1Name'].'<img src="'.$row['team1Logo'].'" width = "25"></td><td>LiVE</td><td align="left"><img src="'.$row['team2Logo'].'" width = "25">'.$row['team2Name'].'</td><td>'.$row['format'].'</td></tr>';*/

echo '<div class="activematches"><div class ="logoGame"><img src="images/csgo.png" class ="logoGame-img"></div><div class ="nameTeam1"><p class="pTeam1">';
echo $row['team1Name'].'</p></div><div class ="logoTeam1"><img src="'.$row['team1Logo'];
echo '" class="logoTeam1"></div><div class = "betTeam1"><p style="margin-top:10px;">10000</p></div><div class = "timeinfo">'.date('d-m-Y H:i',$row['dateTime']).'<br>'.$row['format'];
echo '</div><div class = "betTeam2"><p style="margin-top:10px;">10000</p></div><div class ="logoTeam2"><img src="'.$row['team2Logo'];
echo '" class="logoTeam2-img"></div><div class ="nameTeam2"><p class="pTeam2">'.$row['team2Name'];
if (!strripos($row['eventLogo'], 'nologo.png')) echo '</p></div><div class ="logoEvent" ><img src="'.$row['eventLogo'].'" class="logoEvent-img" title="'.$row['eventName'].'"></div></div>';
else echo '</p></div><div class ="logoEvent" ><img src="images/nologo.png" class="logoEvent-img" title="'.$row['eventName'].'"></div></div>';
//echo '<div class="emptyMatches"></div>';
}
}

//echo $key->plaintext.'<br>';

//echo '</table>';

?>