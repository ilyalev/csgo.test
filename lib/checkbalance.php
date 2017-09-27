<?php
	require_once('bdconfig.php');
	$qo='SELECT * FROM users WHERE steamID='.$_SESSION['steamid'];
	//echo $q.'select';
	$result = $connect->query($qo);
	if ($result->num_rows>0){
	$row = $result->fetch_assoc();	
	$_SESSION['balance']= $row['balance'];
	} else
	{
		$q='INSERT INTO users(steamID,balance) VALUES('.$_SESSION['steamid'].',0)';
		//echo $q.'insert';
		$result = $connect->query($qo);
		$_SESSION['balance']= 0.00;
	}


?>