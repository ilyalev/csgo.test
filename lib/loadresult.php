<?php
require_once ('simple_html_dom.php');
require_once("bdconfig.php");
$html = file_get_html('https://www.hltv.org/results'); 
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
				echo $matchesResult[3],$matchesResult[4];
				if ($res->num_rows==0){
					$q="INSERT INTO result VALUES 
					('$matchesResult[0]','$matchesResult[1]','$matchesResult[2]','$matchesResult[3]','$matchesResult[4]','$matchesResult[5]','$matchesResult[6]','$matchesResult[7]','$matchesResult[8]','$matchesResult[9]')";
					$res=$connect->query($q);
					echo $q.'<br>';
			
				}
		}
	}
}


$html->clear;


/*
$matchesResult[]
0- ID матча
1- лого первой команды
2-название первой команды
3- счет первой команды
4- счет второй команды
5 - лого второй команды
6 - название второй команды
7 - лого Эвента
8- название эмента
9 - формат  встречи

*/
echo 'OK!';
mysqli_close($connect);
?>