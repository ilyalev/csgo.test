<?php
require_once("bdconfig.php");
//echo '<table class="table table-bordered table-condensed">';

$q="SELECT * FROM livematches WHERE 1 ";
$res=$connect->query($q);
if ($res->num_rows>0){
while ($row=$res->fetch_assoc()){

/*echo '<tr><td align = "left"><img src = "'.$row['eventLogo'].'" width = "25">'.$row['eventName'].'</td><td align="right">'.$row['team1Name'].'<img src="'.$row['team1Logo'].'" width = "25"></td><td>LiVE</td><td align="left"><img src="'.$row['team2Logo'].'" width = "25">'.$row['team2Name'].'</td><td>'.$row['format'].'</td></tr>';*/

echo '<div class="activematches"><div class ="logo"><img src="images/csgo.png" width="35"></div><div class ="nameteam"><p style="text-align: right;margin-right: 10px;">';
echo $row['team1Name'].'</p></div><div class ="logo"><img src="'.$row['team1Logo'];
echo '" width="35"></div><div class = "totalbet"><p>10000</p></div><div class = "score""><p></p></div><div class = "timeinfo">'.date('d-m-Y H:i',$row['dateTime']).'<br>'.$row['format'];
echo '</div><div class = "score"><p></p></div><div class = "totalbet"><p>10000</p></div><div class ="logo"><img src="'.$row['team2Logo'];
echo '" width="35"></div><div class ="nameteam" align = "left"><p style="text-align: left; margin-left: 10px">'.$row['team2Name'];
echo '</p></div><div class ="logo" ><img src="'.$row['eventLogo'].'" width="35"  align ="right" title="'.$row['eventName'].'"></div></div>';
}
}

//echo $key->plaintext.'<br>';

//echo '</table>';

?>