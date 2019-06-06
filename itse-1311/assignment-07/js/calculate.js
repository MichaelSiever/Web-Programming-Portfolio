/*
-----------------------------------------------------------------------------------------
Name: Michael Siever 6189804
Assignment: 07
Purpose: JavaScript File for Decision-Making Assignment
Notes: Completed 12/14/2018
-----------------------------------------------------------------------------------------
*/

function getLetterGrade(grade){
	/* Takes the numeric grade value passed from the calculate function and converts
	it to a string letter grade to be returned into the final outputted message in 
	the HTML page. */
	var letterGrade = " ";
	
	if(grade >= 90) {
		letterGrade = "an A.";
	} else if(grade >= 80 && grade < 89.99) {
		letterGrade = "a B.";
	} else if(grade >= 70 && grade < 79.99) {
		letterGrade = "a C.";
	} else if(grade >= 60 && grade < 69.99) {
		letterGrade = "a D.";
	} else { 	// grade = 59.99 or below
		letterGrade = "an F.";
	}
	return letterGrade;
}

function checkTest1() {
    var number1 = parseInt(document.getElementById("test1").value);
    if (isNaN(number1) || number1  > 100 || number1 < 0) {
        return false;
    }
    else {
        return number1;
    }
}

function checkTest2() {
    var number2 = parseInt(document.getElementById("test2").value);
    if (isNaN(number2) || number2  > 100 || number2 < 0){
        return false;
    }
    else {
        return number2;
    }
}

function checkHomework() {
    var number3 = parseInt(document.getElementById("homework").value);
    if (isNaN(number3)|| number3  > 100 || number3 < 0){
        return false;
    }
    else {
        return number3;
    }
}

function checkProject(){
    var number4 = parseInt(document.getElementById("project").value);
    if (isNaN(number4)|| number4  > 100 || number4 < 0){
        return false;
    }
    else {
        return number4;
    }
}

function calculate() {
    var number1 = checkTest1();
    var number2 = checkTest2();
    var number3 = checkHomework();
    var number4 = checkProject();
    var answerArea = document.getElementById("answer-area");
    var err = '';

    if (number1 == false) {
        err += "Test 1 score invalid. Please enter a valid number 0-100.<br>"
    }
    if (number2 == false) {
        err += "Test 2 score invalid. Please enter a valid number 0-100.<br>"
    }
    if (number3 == false) {
        err += "Homework Average invalid. Please enter a valid number 0-100.<br>"
    }
    if (number4 == false) {
        err += "Final Project Average invalid. Please enter a valid number 0-100.<br>"
    }
    if (err == '') {
        var numGrade = ((number1 * 0.15) + (number2 * 0.15) + (number3 * 0.50) + (number4 * 0.20));
		numGrade = numGrade.toFixed(1);       
        document.getElementById("answer-area").classList.remove("error-text");
        document.getElementById("answer-area").classList.add("normal-text");
        answerArea.innerHTML= "Your calculated final grade for this class is " + numGrade + "%, which is " + getLetterGrade(numGrade);
    }
    else {
        document.getElementById("answer-area").classList.add("error-text");
        document.getElementById("answer-area").classList.remove("normal-text");
        document.getElementById("answer-area").innerHTML= err;
	}
}