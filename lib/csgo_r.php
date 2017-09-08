<?php
require_once("bdconfig.php");
//echo '<table class="table table-bordered table-condensed">';

$q="SELECT * FROM result WHERE 1 LIMIT 10 ";
$res=$connect->query($q);

while ($row=$res->fetch_assoc()){
/*echo '<tr><td align ="right">'.$row['team1Name'].'<img src="'.$row['team1Logo'].'" width="25"></td><td>'.$row['team1Score'].'</td><td>'.$row['team2Score'].'</td><td align="left"><img src="'.$row['team2Logo'].'" width="25">'.$row['team2Name'].'</td><td><img src= "'.$row['eventLogo'].'" width="25">'.$row['eventName'].'</td><td>'.$row['format'].'</td></tr>';*/
if ($row['team1Score']> $row['team2Score'])
{
	$style1 = ' style="background: green;"';
	$style2 = ' style="background: red;"';
} else{
	$style1 = ' style="background: red;"';
	$style2 = ' style="background: green;"';
}
echo '<div class="activematches" id = "'.$row['id'].'"><div class ="logo"><img src="images/csgo.png" width="35"></div><div class ="nameteam"><p style="text-align: right;margin-right: 10px;">';
echo $row['team1Name'].'</p></div><div class ="logo"><img src="'.$row['team1Logo'];
echo '" width="30"></div><div class = "totalbet"><p>10000</p></div><div class = "score" '.$style1.'><p>'.$row['team1Score'].'</p></div><div class = "timeinfo">'.$row['format'];
echo '</div><div class = "score" '.$style2.'><p>'.$row['team2Score'].'</p></div><div class = "totalbet"><p>10000</p></div><div class ="logo"><img src="'.$row['team2Logo'];
echo '" width="30"></div><div class ="nameteam" align = "left"><p style="text-align: left; margin-left: 10px">'.$row['team2Name'];
if (!strripos($row['eventLogo'], 'nologo.png')) {echo '</p></div><div class ="logo" ><img src="'.$row['eventLogo'].'" width="35"  align ="right" title="'.$row['eventName'].'"></div></div>';}
else echo '</p></div><div class ="logo" ><img src="images/nologo.png" width="35"  align ="right" title="'.$row['eventName'].'"></div></div>';




}

//echo '</table>';


?>