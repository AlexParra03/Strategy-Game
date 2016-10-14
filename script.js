// Food, Gold, Metal
var resources = [100, 100, 100];
var soldier = [0, 0, 0];



var addSoldier = function(soldierType) {
	// soldierPrice1 = [10, 10, 10];

	switch(soldierType) {
		case 1:
			if (spendResources(10, 10, 10)) {
				soldier[0] += 1;
				updateText("soldier1", soldier[0]);
			};
			break;
		case 2:
			if (spendResources(13, 13, 13)) {
			soldier[1] += 1;
			updateText("soldier2", soldier[1]);
			};
			break;
		case 3:
			if (spendResources(15, 15, 15)) {
			soldier[2] += 1;
			updateText("soldier3", soldier[2]);
			};
			break;
	}
};

var updateText = function(elementID, newText) {
	document.getElementById(elementID).innerHTML = newText;
};

var spendResources = function(foodCost, goldCost, metalCost){
	if ( resources[0] >= foodCost) {
		if (resources[1] >= goldCost) {
			if (resources[2] >= metalCost) {
				resources[0] -= foodCost;
				resources[1] -= goldCost;
				resources[2] -= metalCost;
				return true;
			} else { alert("Not enough Metal"); return false };
		} else { alert("Not enough Gold"); return false};
	} else { alert("Not enough Food"); return false};
};


var updateResources = function() {
	resources[0] += 13;
	resources[1] += 28;
	resources[2] += 7;
	update();
	
		
};

var update = function() {
	document.getElementById("goldA").innerHTML = resources[0];
	document.getElementById("foodA").innerHTML = resources[1];
	document.getElementById("metalA").innerHTML = resources[2];
	updateText("soldiersA", soldier[0] + soldier[1] + soldier[2])
};

update();
setInterval(updateResources,4000);








