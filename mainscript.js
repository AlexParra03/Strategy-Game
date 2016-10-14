
var totalUsers;
var getUsers = function(allUsers) {
	totalUsers = allUsers;
};

//atackingID = get the id from the button
var AttackID = function(attackingID) {
	for (var searchID=1; searchID <= totalUsers; searchID++ ) {
		var matchID = "attackID"  + searchID;
		if(attackingID == matchID) {
			alert("yeah" + attackingID);
			//example on JS: window.location.href = "myphpfile.php?|..name=..|" + javascriptVariable; 
			//example PHP:$_GET['|..name..|']
		}
	}
};


