<?php
require_once("bdconfig.php");
//echo '<table class="table table-bordered table-condensed">';

$q="SELECT * FROM result WHERE 1 LIMIT 10 ";
$res=$connect->query($q);

while ($row=$res->fetch_assoc()){
/*echo '<tr><td align ="right">'.$row['team1Name'].'<img src="'.$row['team1Logo'].'" width="25"></td><td>'.$row['team1Score'].'</td><td>'.$row['team2Score'].'</td><td align="left"><img src="'.$row['team2Logo'].'" width="25">'.$row['team2Name'].'</td><td><img src= "'.$row['eventLogo'].'" width="25">'.$row['eventName'].'</td><td>'.$row['format'].'</td></tr>';*/

	
echo '<div class="activematches" id = "'.$row['id'].'"><div class ="logoGame"><img src="images/csgo.png" class="logoGame-img"></div><div class ="nameTeam1"><p class="pTeam1">';
echo $row['team1Name'].'</p></div><div class ="logoTeam1"><img src="'.$row['team1Logo'];
if ($row['team1Score']>$row['team2Score']) echo '" class="logoTeam1-img"></div><div class = "betTeam1"><p style="margin-top:10px;">10000</p></div><div class = "scoreTeam"><p style="margin-right:30px;"><img src="images/win.png" height=30 width=30 align=left>'.$row['team1Score'].' : '.$row['team2Score'].'</p></div>';
else if ($row['team1Score']<$row['team2Score']) echo '" class="logoTeam1-img"></div><div class = "betTeam1"><p style="margin-top:10px;">10000</p></div><div class = "scoreTeam"><p style="margin-left:30px;">'.$row['team1Score'].' : '.$row['team2Score'].'<img src="images/win.png" height=30 width=30 align=right></p></div>';
else echo '" class="logoTeam1-img"></div><div class = "betTeam1"><p style="margin-top:10px;">10000</p></div><div class = "scoreTeam"><p>'.$row['team1Score'].' : '.$row['team2Score'].'</p></div>';
echo '<div class = "betTeam2"><p style="margin-top:10px;">10000</p></div><div class ="logoTeam2"><img src="'.$row['team2Logo'];
echo '" class="logoTeam2-img"></div><div class ="nameTeam2" ><p class="pTeam2">'.$row['team2Name'];
if (!strripos($row['eventLogo'], 'nologo.png')) {echo '</p></div><div class ="logoEvent" ><img src="'.$row['eventLogo'].'" class="logoEvent-img" title="'.$row['eventName'].'"></div></div>';}
else echo '</p></div><div class ="logoEvent" ><img src="images/nologo.png" class="logoEvent-img" title="'.$row['eventName'].'"></div></div>';
//echo '<div class="emptyMatches"></div>';



}

//echo '</table>';


?>