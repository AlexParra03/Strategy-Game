<?php
session_start();
		$userID = $_SESSION['ID'];
		
		$connection = mysql_connect("mysql2.000webhost.com","a6173051_admin","camote2434") or die("Could not connect to server SQL");
		mysql_select_db("a6173051_data1",$connection) or die("Could not connect to database");
		$query = mysql_query("SELECT * FROM User WHERE ID = '$userID' ");
		$userData = mysql_fetch_array($query);
		
		
?>