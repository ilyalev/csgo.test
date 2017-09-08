<?php
require '../steamauth/SteamConfig.php';
session_unset();
session_destroy();
header('Location: '.$steamauth['logoutpage']);
exit;
?>