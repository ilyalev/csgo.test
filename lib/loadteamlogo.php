<?php
require_once ('simple_html_dom.php');
require_once("bdconfig.php");
$html = new simple_html_dom();
for ($i=6237;$i<6238;$i++){
$base = "https://www.hltv.org/team/$i/-";
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

// Load HTML from a string
$html->load($str);
unset($str);

if (!empty($html)){
	$team = $html->find(".teamlogo",0);
	if (empty($team)){echo "Team №$i - is game over <br>"; continue;}
	$teamname = $team->title;
	$teamlogo = $team->src;

}

echo "Team {id - $i} - $teamname, img - ".'<img src="'.$teamlogo.'" width=30><br>';
//getImg($teamlogo);
$q="INSERT INTO teamlogo VALUES ($i,'$teamname','$teamlogo')";
echo $q.'<br>';
$res=$connect->query($q);
}



function getImg($url){

$ch = curl_init($url); // инициализация
$path_parts = pathinfo($url); //получаем название файла из URL
 
$fp = fopen('images/team/'.$path_parts['basename'], 'wb');
curl_setopt($ch, CURLOPT_FILE, $fp);
 
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
fclose($fp);
}
?>