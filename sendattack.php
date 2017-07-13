<?php 

$defenderNAME = $_POST['attackUser'];
echo "<p>" . $defenderNAME . "</p>";

session_start();
$userID = $_SESSION['ID'];
		
$connection = mysql_connect("mysql2.000webhost.com","a6173051_admin","") or die("Could not connect to server SQL");
mysql_select_db("a6173051_data1",$connection) or die("Could not connect to database");
$query = mysql_query("SELECT * FROM User WHERE ID = '$userID' ");
$myData = mysql_fetch_array($query);
$query = mysql_query("SELECT * FROM User WHERE NAME = '$defenderNAME' ");
$defData = mysql_fetch_array($query);

echo $defData['ID'];

$mySoldiers = array($_POST['sendSoldier1'],$_POST['sendSoldier2'],$_POST['sendSoldier3']);
$defSoldiers = array($defData['SOLDIER1'], $defData['SOLDIER2'], $defData['SOLDIER3']);

//sol_1: 10 - sol_2:13 - sol_3:15
$myPoints = ($mySoldiers[0] * 10) + ($mySoldiers[1] * 13) + ($mySoldiers[2] * 15);
$defPoints = ($defSoldiers[0] * 10) + ($defSoldiers[1] * 13) + ($defSoldiers[2] * 15);

$defID = $defData['ID'];

if($myPoints > $defPoints) {
	//attacker wins
	echo "Attacker Wins";
	mysql_query("UPDATE User SET  SOLDIER1 = '0', SOLDIER2 =  '0', SOLDIER3 = '0' WHERE  ID = '$defID';" );
} else {
	//attacker looses
	echo "Attacker looses";
	mysql_query("UPDATE User SET  SOLDIER1 =  '0', SOLDIER2 = '0', SOLDIER3 = '0' WHERE  ID = '$userID';" );
};



//header('Location: home.html');
?>
