<?php
require_once ('simple_html_dom.php');
require_once("bdconfig.php");


$html = file_get_html('https://www.hltv.org/matches'); 

$liveMatches = $html->find('.live-matches',0);
foreach ($liveMatches->find('.live-match') as $liveMatch){ //поиск всех Лайв матчей
	foreach ($liveMatch->find('a') as $liveMatchA){     // 
		$matchesInfo[0]=explode("/",$liveMatchA->href)[2]; 
		//echo $matchesInfo[0];
		$temp = $liveMatchA->find('div.live-match-header',0);

		//echo '1- '.htmlspecialchars($temp->children(0)->children(0)->innertext);
		$array = explode('"', $temp->children(0)->children(0)->innertext);
		
		$matchesInfo[6] = $array[3];
		$matchesInfo[7] = $array[7];
		//echo '6- '.$matchesInfo[6].', 7-'.$matchesInfo[7];
		$team1=false; 
		foreach ($liveMatchA->find('td.teams') as $tableTd){
			 //		заносим в базу лайв матчи и удаляем из базы будущие матчи
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
		$q = "INSERT INTO livematches VALUES('$matchesInfo[0]','live','$matchesInfo[2]','$matchesInfo[3]','$matchesInfo[4]','$matchesInfo[5]','$matchesInfo[6]','$matchesInfo[7]')";
			echo $q;
			$res=$connect->query($q);

			$q= "SELECT id FROM matches WHERE id = $matchesInfo[0]";
			$res=$connect->query($q);
			if ($res->num_rows>=0){
				$q1 = "DELETE FROM matches WHERE id =$matchesInfo[0]";
				$res=$connect->query($q);
			}
}
}
?>

