/*--
-----------------------------------------------------------------------------------------
Name: Michael Siever
Assignment: Final Project
Purpose: JS File for Xmas Xpress Registration Page
Notes: Completed 12/10/2018
-----------------------------------------------------------------------------------------
--*/

function clearOutReg() {
    /* Resets input boxes; removes red borders and text from message area. */
    document.getElementById("fname").value = "";
	document.getElementById("lname").value = "";
    document.getElementById("remail1").value = "";
    document.getElementById("fname").classList.add("normal-box");
    document.getElementById("fname").classList.remove("error-box");
	document.getElementById("lname").classList.add("normal-box");
    document.getElementById("lname").classList.remove("error-box");
    document.getElementById("remail1").classList.add("normal-box");
    document.getElementById("remail1").classList.remove("error-box");
    document.getElementById("message-area").innerHTML = "";
}

/* This function checks for valid first name input in 
the Registration Form, which only accepts letters as input. */
function validFirstName() {
	var regex = /^[a-zA-Z]+$/;
	var fname = $("#fname").val().trim();
	$("#fname").val(fname);
	return fname.match(regex) ? true : false;
}
	
/* This function checks for valid last name input in 
the Registration Form, which only accepts letters as input. */
function validLastName() {
	var regex = /^[a-zA-Z]+$/;
	var lname = $("#lname").val().trim();
	$("#lname").val(lname);
	return lname.match(regex) ? true : false;
}

function sendReg() {
    var fname = validFirstName();
	var lname = validLastName();
    var email1 = validEmail();
    var errmsg = '';

    if (fname == false) {
        errmsg += "Please enter your first name.<br>";
        document.getElementById("fname").classList.remove("normal-box");         
        document.getElementById("fname").classList.add("error-box");
        document.getElementById("message-area").classList.add("error-text");
        document.getElementById("message-area").classList.remove("normal-text");
		document.getElementById("fname").value = "";
    }
	else {
		document.getElementById("message-area").classList.remove("error-text");
        document.getElementById("message-area").classList.add("normal-text");
        document.getElementById("fname").classList.add("normal-box");            
        document.getElementById("fname").classList.remove("error-box");
	}
	
	if (lname == false) {
        errmsg += "Please enter your last name.<br>";
        document.getElementById("lname").classList.remove("normal-box");         
        document.getElementById("lname").classList.add("error-box");
        document.getElementById("message-area").classList.add("error-text");
        document.getElementById("message-area").classList.remove("normal-text");
		document.getElementById("lname").value = "";
    }
	else {
		document.getElementById("message-area").classList.remove("error-text");
        document.getElementById("message-area").classList.add("normal-text");
        document.getElementById("lname").classList.add("normal-box");            
        document.getElementById("lname").classList.remove("error-box");
	}
	
    if (email1 == false) {
        errmsg += "Please enter your email address.<br>";
        document.getElementById("remail1").classList.remove("normal-box");              
        document.getElementById("remail1").classList.add("error-box");
        document.getElementById("message-area").classList.add("error-text");
        document.getElementById("message-area").classList.remove("normal-text");
		document.getElementById("remail1").value = "";
    }
	else {
		document.getElementById("message-area").classList.remove("error-text");
        document.getElementById("message-area").classList.add("normal-text");
        document.getElementById("remail1").classList.add("normal-box");            
        document.getElementById("remail1").classList.remove("error-box");
	}
	
    if (errmsg == '') {
        window.location.href = 'success.html';
    }
    else{
        document.getElementById("message-area").classList.add("error-text");
        document.getElementById("message-area").classList.remove("normal-text");
        document.getElementById("message-area").innerHTML = errmsg;
    }
}