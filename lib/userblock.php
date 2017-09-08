<div class="col-md-2" style = "background-color: #1b2838; border: 1px solid black; text-align: left"  align="right">
	<h3 class="page-header">User info</h3>
  <?php
  //echo 'SteamID64 - '.$steamprofile['steamid'].'<br>';
  echo '<img src="'.$steamprofile['avatar'].'" title="" alt="" />'; // Display their avatar!
	echo $steamprofile['personaname'].'<br>';
  echo 'balance - '.$_SESSION['balance'].'$<br>';
  echo 'Last bet<br>';
  echo '1.';
  logoutbutton();
  ?>
</div>