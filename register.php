<?php  

include '.../admin.php'	;

$connection = mysql_connect($host,$admin,$password) 
    or die("Could not connect to server SQL");
	
mysql_select_db($database,$connection)
	or die("Could not connect to database");
	
$user = $_POST['regUser'];
$password = $_POST['regPass']; 

//check name avaliable
$query = mysql_query("SELECT * FROM User WHERE NAME = '$user' ");

if (mysql_num_rows($query) > 0) {
	echo "User already exists. Please choose a different name. <a href='index.html'> Go Back </a> ";
} else {
	if($user =! "" || $password =! "" ) {
		echo "Username and password not valid, please check <a href='index.html'> Go Back </a> ";
	} else {
	mysql_query("INSERT INTO User(NAME,PASSWORD) VALUES ('$user','$password')",$connection);
	echo "<br><br> <h3> Account succesfully created!, please <a href='index.html'> CLICK HERE </a>to Log In your account </h3>";
	};
};



mysql_close($connection);


?>