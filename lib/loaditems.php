<?php
require_once('bdconfig.php');
$base = "http://steamcommunity.com/profiles/".$_SESSION['steamid']."/inventory/json/730/2/";
$curl = curl_init();
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_URL, $base);
curl_setopt($curl, CURLOPT_REFERER, $base);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
$str = curl_exec($curl);
curl_close($curl);
$data = json_decode($str, true);
if(!$data) {
	$id = false;
	exit();
}

$items = $data["rgInventory"];
$itemsDesc = $data["rgDescriptions"];

foreach ($items as $item){
	$index =$item[classid].'_'.$item[instanceid];
	$assetsid=$item[id];
	$name = $itemsDesc[$index][name]; //название c Рарe
  $hash = $itemsDesc[$index][market_hash_name];
  $rare = $itemsDesc[$index][tags][5][name]; // Раре
  $q="SELECT price FROM items WHERE hash='$hash'";
  $res=$connect->query($q);
  $row=$res->fetch_assoc();
  $price=$row['price'];  //Цена
  if ($price<3) continue;
  $icon = 'http://cdn.steamcommunity.com/economy/image/'.$itemsDesc[$index][icon_url];
  echo '<div class="user-item" id ="'.$assetsid.'"><div class ="item-name">'.$name.'</div><div><img src="'.$icon.'"class="item-bg"></div><div class ="item-price">'.$price.'$</div></div>';
}

?>