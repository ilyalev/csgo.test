echo '<tr><td align = "left"><img src = "'.$row['eventLogo'].'" width = "25">'.$row['eventName'].'</td><td align="right">'.$row['team1Name'].'<img src="'.$row['team1Logo'].'" width = "25"></td><td>'.date('d-m-Y H:i',$row['dateTime']).'</td><td align="left"><img src="'.$row['team2Logo'].'" width = "25">'.$row['team2Name'].'</td><td>'.$row['format'].'</td></tr>';




<tr>
  <td rowspan="4" colspan="2"><img src="'.$row['team1Logo'].'" width = "55"></td><td rowspan="3" colspan="3" align="left">'.$row['team1Name'].'</td><td rowspan="2" colspan="2" align="center">'.date('d-m-Y H:i',$row['dateTime']).'</td><td rowspan="3" colspan="3" align="right">'.$row['team2Name'].'</td><td rowspan="4" colspan="2"><img src="'.$row['team2Logo'].'" width = "55"></td>
</tr>
<tr>
  
</tr>
<tr>
  <td colspan="2">'.$row['format'].'</td>
</tr>
<tr><td rowspan="2" colspan="2">betteam1</td><td rowspan="2">mybet</td><td rowspan="2">empty</td><td rowspan="2">empty</td><td rowspan="2" colspan="2">betteam2</td></tr>
<tr></tr>


  foreach ($tableTr->find('td.teams') as $tableTd ) {
        if ($tableTd->class == "teams"){
          if ($team1==false){
              $matchesInfo[2] = $tableTd->find('img',0)->src;
              $matchesInfo[3] = $tableTd->find('img',0)->title;
              $team1 = true;
            } else {
              $matchesInfo[4] = $tableTd->find('img',0)->src;
              $matchesInfo[5] = $tableTd->find('img',0)->title;
              $team1=false;
            }
        }
      }
      //