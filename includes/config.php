<?php

	$dbHost = 'eu-cdbr-west-03.cleardb.net';
	$dbUser = 'b27beb21fb1d11';
	$dbPass = 'dcd38a91';
	$dbName = 'heroku_f16a9c545956ab9';

$dbConn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName) or die ('MySQL connection failed. ' . mysqli_error());
mysqli_select_db($dbConn,$dbName) or die('Cannot select database. ' . mysqli_error());

mysqli_set_charset($dbConn,'utf8'); 

date_default_timezone_set('Asia/Amman');


?>






 
							
				