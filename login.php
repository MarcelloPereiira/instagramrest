<?php

session_start();

if( isset($_SESSION['user_info']) ){
	header("Location: index.php");
	return false;
}

include 'config.php'; 

$_SESSION['login'] = 1;

header("Location: https://api.instagram.com/oauth/authorize/?client_id=$client_id&redirect_uri=$redirect_uri&response_type=code&scope=basic");

?>