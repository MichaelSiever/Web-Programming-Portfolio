/*
-----------------------------------------------------------------------------------------
Name: Michael Siever 6189804
Assignment: 08
Purpose: JavaScript File for JavaScript Loops Assignment
Notes: Completed 11/10/2018
-----------------------------------------------------------------------------------------
*/

function getNumber() {
	
	var input = parseInt(document.getElementById("number").value);
	var message = 0;
	
	if(isNaN(input)) { // For non-number input
		message = -1;
	}
	
	else if((input < 1) || (input > 20)) { // For numeric input outside the range of 1 and 20
		message = 0;
	}
	
	else if((input >= 1) && (input <= 20)) { // For numeric input inside the range of 1 and 20
		message = input;
	}
	
	return message; 
}

function stars() {

	var limit = getNumber(); // Calls the getNumber function
	var linestr = '';

	if(limit == -1) {
		console.log("Sorry, that's not a valid integer."); // Error message
	} 
	else {
		for(var i = limit; i > 0; i--) {
			for(var j = 1; j <= i; j++) {
				linestr += "*";
			}
			linestr += "\n";
			}
			console.log(linestr); 
	}
}

function hashes() {
	var limit = getNumber(); // Calls the getNumber function
	var linestr = '';

	if(limit == -1) {
		console.log("Sorry, that's not a valid integer."); // Error message
	} 
	else {
		for (var i = 1; i <= limit; i++)
			{
			linestr += "#"; // Opening hash
			for(var j = 1; j <=(i - 2); j++) 
			{
				linestr += " "; // Spaces between each hash
			}
			/* If statement needed to add a hash to the 
			end of each output line after the first line */
			if(i >= 2) 
				linestr += "#";
				linestr += "\n";
			}
		console.log(linestr); 
		} 
}