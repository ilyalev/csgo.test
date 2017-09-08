<?php


  $query = "https://api.opskins.com/IPricing/GetAllLowestListPrices/v1/?appid=730";
  $json = file_get_contents($query,true);
  $data_price = json_decode($json, true);




?>