<?php

$connection = mysql_connect($host,$admin,$password) 
    or die("Could not connect to server SQL");
	
mysql_select_db($database,$connection)
	or die("Could not connect to database");
	
$user = $_POST['logUser'];
$password = $_POST['logPass']; 

$query = mysql_query("SELECT * FROM User WHERE NAME = '$user' AND PASSWORD = '$password' ");
$rows = mysql_num_rows($query);

if ($rows == 0) {
	echo "UserName and Password do NOT exists"; 
} else {
	session_start();
	$userData = mysql_fetch_array($query);
	
	$_SESSION['ID'] = $userData['ID'];
	header('Location: home.html');

	
mysql_close($connection);
};


?>