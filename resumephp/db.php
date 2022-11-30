<?php
$username = 'deedeegr';
$password = 'd2Vzy@zND(475A';
$hostname = 'localhost';
$database = 'deedeegr_main';
$cnxn = @mysqli_connect($hostname, $username, $password, $database) or
die("Error Connecting to DB: " . mysqli_connect_error());
echo 'connected to Database!';
?>
