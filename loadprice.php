<?php
	require_once('lib/bdconfig.php');
  $query = "https://api.opskins.com/IPricing/GetAllLowestListPrices/v1/?appid=730";
  $json = file_get_contents($query,true);
  $data_price = json_decode($json, true);
  
  foreach ($data_price[response] as $key => $value) {
  	echo $key.'--';
  	echo $value[price].'<br>';
$q="INSERT INTO items VALUES ('$key',$value[price])";
echo $q.'<br>';
$res=$connect->query($q);
  }
  

?>