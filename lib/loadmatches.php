<?php
require_once ('simple_html_dom.php');
require_once("bdconfig.php");
$html = file_get_html('https://www.hltv.org/matches'); 

$days = 0;
$upcomingMatches = $html->find('.upcoming-matches',0);
//echo '<table class="table table-bordered table-condensed">';
foreach ($upcomingMatches->find('.match-day') as $matchDay) { //находим матчи по дням
//	echo '<tr ><td colspan = "6">'.$matchDay->children(0)->plaintext.'</td></tr>';   // выводим день матчей
$days++;
if ($days >= 3) break;
	foreach ($matchDay->find('a') as $matchDayA){
		$matchesInfo[0]=explode("/",$matchDayA->href)[2];   // получаем ИД матча

		foreach ($matchDayA->find('table.table tr') as $tableTr) {   //находим матчи в течении дня
			$team1=false;
			foreach ($tableTr->find('td') as $tableTd ) {   // перебираем каждый матч дня
				//print(htmlspecialchars($tableTd->outertext));
				if ($tableTd->class == "time") {    // если класс Time значит там время вытаскиваем его   print(date('d-m-Y H:i:s',$timeMatches));
					$timeMatches = substr(explode('"',$tableTd->children(0))[5],0,10);
					$matchesInfo[1]=$timeMatches;
				}
				if ($tableTd->class == "team-cell") {
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
				if ($tableTd->class == "event"){
					$matchesInfo[6] = $tableTd->find('img',0)->src;
					$matchesInfo[7] = $tableTd->find('img',0)->title;
				}
				if ($tableTd->class == "star-cell"){
					$matchesInfo[8] = trim($tableTd->plaintext);
					
				}
			}
			
			//записываем матч в базу данных
			$q= "SELECT id FROM matches WHERE id = $matchesInfo[0]";
			$res=$connect->query($q);
			if ($res->num_rows==0){
				$q="INSERT INTO matches VALUES 
				('$matchesInfo[0]','$matchesInfo[1]','$matchesInfo[2]','$matchesInfo[3]','$matchesInfo[4]','$matchesInfo[5]','$matchesInfo[6]','$matchesInfo[7]','$matchesInfo[8]')";
				$res=$connect->query($q);
				echo $q.'<br>';
			}
		}
	}
}


/*
$matchesInfo
0- ИД матча
1 - время матча
2 - лого команды 1
3 - название команды 1
4 - лого команды 2
5 - название команды 2
6- лого чемпионата
7 - название чемпиоата
8- формат матча BO3 BO1 BO5
*/
$html->clear;
echo 'OK!';




mysqli_close($connect);
?>