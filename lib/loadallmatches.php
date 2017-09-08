<?php
require_once ('simple_html_dom.php');
require_once("bdconfig.php");
$base = 'https://www.hltv.org/matches';
$curl = curl_init();
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_URL, $base);
curl_setopt($curl, CURLOPT_REFERER, $base);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
$str = curl_exec($curl);
curl_close($curl);

// Create a DOM object
$html = new simple_html_dom();
// Load HTML from a string
$html->load($str);

unset($str);
// search upcoming matches
$q = "TRUNCATE TABLE matches";
$connect->query($q);
$q = "TRUNCATE TABLE livematches";
$connect->query($q);

$days = 0;
if (!empty($html)){
$upcomingMatches = $html->find('.upcoming-matches',0);
//echo '<table class="table table-bordered table-condensed">';
foreach ($upcomingMatches->find('.match-day') as $matchDay) { //находим матчи по дням
//	echo '<tr ><td colspan = "6">'.$matchDay->children(0)->plaintext.'</td></tr>';   // выводим день матчей
$days++;
if ($days >= 3) break;
	foreach ($matchDay->find('a') as $matchDayA){
		$matchesInfo[0] = explode("/", $matchDayA->href)[2];   // получаем ИД матча

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
}else echo "not matches";

//search live matches

$liveMatches = $html->find('.live-matches',0);
if (isset($liveMatches)){
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

			//удаляем из таблицы грядущие матчи, то которые начались
			$q= "SELECT id FROM matches WHERE id = $matchesInfo[0]";
			$res=$connect->query($q);
			if ($res->num_rows>0){
				$q1 = "DELETE FROM matches WHERE id =$matchesInfo[0]";
				$res=$connect->query($q1);
				echo $q1;
			}
	}
}
}

$html->clear;

$base = 'https://www.hltv.org/results';
$curl = curl_init();
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_URL, $base);
curl_setopt($curl, CURLOPT_REFERER, $base);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
$str = curl_exec($curl);
curl_close($curl);

// Create a DOM object
$html = new simple_html_dom();
// Load HTML from a string
$html->load($str);


$resultAll=$html->find('.results-all',0);
$days=0;
foreach ($resultAll->find('.results-sublist') as $resultSublist) { //находим результаты по дням
	//print(htmlspecialchars($resultCon->text));
	$days++;
	if ($days>=3) break;
	foreach ($resultSublist->find('.result-con') as $resultCon) { // результаты внутри дня
		$temp = $resultCon->find('a',0);
		$matchesResult[0] = explode("/",$temp->href)[2];
		foreach ($resultCon->find('table tbody tr') as $resultTableTr) {  //таблица результата
			$i=0;
			foreach ($resultTableTr->find(td) as $resultTableTd) { 

				if ($resultTableTd->class=="team-cell"){
					$i++;
					$matchesResult[$i] = $resultTableTd->children(0)->find('img',0)->src;
					$i++;
					$matchesResult[$i]= $resultTableTd->children(0)->find('img',0)->title;
				}
				if ($resultTableTd->class=="result-score"){
					$i++;
					$matchesResult[$i]=$resultTableTd->find('span',0)->plaintext;
					$i++;
					$matchesResult[$i]=$resultTableTd->find('span',1)->plaintext;
				}
				if ($resultTableTd->class=="event"){
					$i++;
					$matchesResult[$i]= $resultTableTd->find('img',0)->src;
					$i++;
					$matchesResult[$i]=$resultTableTd->find('img',0)->title;
				}
				if ($resultTableTd->class == "star-cell"){
					$i++;
					$matchesResult[$i] = trim($resultTableTd->plaintext);
				}
			}

			$q= "SELECT id FROM result WHERE id = $matchesResult[0]";
				$res=$connect->query($q);
				//echo $matchesResult[3],$matchesResult[4];
				if ($res->num_rows==0){
					$q="INSERT INTO result VALUES 
					('$matchesResult[0]','$matchesResult[1]','$matchesResult[2]','$matchesResult[3]','$matchesResult[4]','$matchesResult[5]','$matchesResult[6]','$matchesResult[7]','$matchesResult[8]','$matchesResult[9]')";
					$res=$connect->query($q);
					echo $q.'<br>';
				}
				// удаляем из текущих матчей, те которые закончились
				$q= "SELECT id FROM livematches WHERE id = $matchesResult[0]";
				$res=$connect->query($q);
				if ($res->num_rows>0){
					$q1 = "DELETE FROM livematches WHERE id =$matchesResult[0]";
					$res=$connect->query($q1);
					echo $q1.'<br>';
				}
		}
	}
}

$html->clear;
mysqli_close($connect);
?>