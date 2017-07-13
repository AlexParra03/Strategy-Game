<?php

ignore_user_abort(true); // run script in background
set_time_limit(0);       // run script forever 
$interval = 300;         // do every 1 minute...

$connection = mysql_connect("mysql2.000webhost.com","a6173051_admin","") 
    or die("Could not connect to server SQL");
	
mysql_select_db("a6173051_data1",$connection)
	or die("Could not connect to database");
	
$loop = 1;
do
{ 
    // add the script that has to be ran every 1 minute here
    // ...TRUE
	
	$query = mysql_query("SELECT FOOD FROM User WHERE NAME = '$user' AND PASSWORD = '$password' ");
	$d = mysql_query("UPDATE  'a6173051_data1'.'User' SET  'METAL' = () WHERE  'User'.'ID' =1 LIMIT 1 ;");
    
	$loop += 1;
    sleep($interval); // wait 5 minutes

} while($loop > 10); 
?>
