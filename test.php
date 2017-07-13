<?php  
	
$connection = mysql_connect("mysql2.000webhost.com","a6173051_admin","") 
    or die("Could not connect to server");
	
mysql_select_db("a6173051_data1",$connection)
	or die("Could not connect to database");
	
$user = $_POST['logUser'];
$password = $_POST['logPass']; 

mysql_query("INSERT INTO User(NAME,PASSWORD) VALUES ('$user','$password')",$connection);





mysql_close($connection);


?>
