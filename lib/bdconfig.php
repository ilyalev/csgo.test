<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$hostname_connect = "localhost";
$database_connect = "betsite";
$username_connect = "root";
$password_connect = "";

$connect = new mysqli($hostname_connect,$username_connect,$password_connect,$database_connect);
if ($mysqli->connect_errno) {
    echo "beda";
}


$connect->query("SET NAMES utf8");


//define('ADMIN', 'admin');
?>