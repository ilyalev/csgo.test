<?php
require_once("bdconfig.php");


$q="SELECT * FROM livematches WHERE 1 ";
$res=$connect->query($q);
if ($res->num_rows>0){
while ($row=$res->fetch_assoc()){

	echo '<div class="activematches" id = "'.$row['id'].'"><div class ="logoGame"><img src="images/csgo.png" class ="logoGame-img"></div><div class ="nameTeam1"><p class="pTeam1">';
	echo $row['team1Name'].'</p></div><div class ="logoTeam1"><img src="'.$row['team1Logo'];
	echo '" class="logoTeam1-img"></div><div class = "betTeam1"><p style="margin-top:10px;">0p</p></div><div class = "timeinfo"><img src="images/live_m.gif"  style="margin-top:5px;">';
	echo '</div><div class = "betTeam2"><p style="margin-top:10px;">0p</p></div><div class ="logoTeam2"><img src="'.$row['team2Logo'];
	echo '" class="logoTeam2-img"></div><div class ="nameTeam2"><p class="pTeam2">'.$row['team2Name'];
	if (!strripos($row['eventLogo'], 'nologo.png')) echo '</p></div><div class ="logoEvent" ><img src="'.$row['eventLogo'].'" class="logoEvent-img" title="'.$row['eventName'].'"></div></div>';
	else echo '</p></div><div class ="logoEvent" ><img src="images/nologo.png" class="logoEvent-img" title="'.$row['eventName'].'"></div></div>';

	}
}



?>