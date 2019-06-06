// Web Worker function for Requirement 9 - Michael T. Siever Program 04

var i = 0;

function timedCount() {
	i++;
	postMessage(i);
	setTimeout("timedCount()", 3000);
	if (i > 4) {
		i = 0;
	}		
}
timedCount();