/*--
-----------------------------------------------------------------------------------------
Name: Michael Siever
Assignment: Final Project
Purpose: JS File for Xmas Xpress Contact Page
Notes: Completed 12/10/2018
-----------------------------------------------------------------------------------------
--*/

/* This function displays the email address hidden under the "Display Email Address" link  upon click. */
function show() {
    var t = "edu";
    var yz = "michael.siever";
    var a = "@";
    var u = "austincc.";
    var j = "mailto:";
    document.getElementById("3mai1").classList.add("clicked-text");
    document.getElementById("3mai1").innerHTML = "<a href = " + j + yz + a + "g." + u + t + ">" + yz + a + "g." + u + t + "</a>";
}

function clearOutContact() {
    /* Resets input boxes; removes red borders and text from message area. */
    document.getElementById("name").value = "";
    document.getElementById("remail1").value = "";
    document.getElementById("remail2").value = "";
    document.getElementById("subject").value = "";
    document.getElementById("message").value = "";
    document.getElementById("name").classList.add("normal-box");
    document.getElementById("name").classList.remove("error-box");
    document.getElementById("remail1").classList.add("normal-box");
    document.getElementById("remail1").classList.remove("error-box");
    document.getElementById("remail2").classList.add("normal-box");
    document.getElementById("remail2").classList.remove("error-box");
    document.getElementById("subject").classList.add("normal-box");
    document.getElementById("subject").classList.remove("error-box");
    document.getElementById("message").classList.add("normal-box");
    document.getElementById("message").classList.remove("error-box");
    document.getElementById("message-area").innerHTML = "";
}

/* This function checks for valid full name input in the Contact Form,
which requires a whitespace character between first and last names. */
function validName() {
	var regex = /^([a-zA-Z]+)\s([a-zA-Z]+)$/;
	var name = $("#name").val().trim();
	$("#name").val(name);
	return name.match(regex) ? true : false;
}

/* This function checks for valid email address input for 
the second email instance of the Contact Form. */
function verifyEmail() {
	if(document.getElementById("remail2").value != document.getElementById("remail1").value) {
		return false;
	} else {
    	var regex = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
    	var email2 = $("#remail2").val().trim();
    	$("#remail2").val(email2);
    	return email2.match(regex) ? true : false;
    }
}

/* This function checks for a valid subject input in 
the Contact Form. */
function validSubject() {
	var regex = /^.+$/;
	var subject = $("#subject").val().trim();
	$("#subject").val(subject);
	return subject.match(regex) ? true : false;
}

/* This function checks for a valid message input in 
the Contact Form. */
function validMessage() {
	var regex = /^.{10,}$/;
	var message = $("#message").val().trim();
	$("#message").val(message);
	return message.match(regex) ? true : false;
}

function sendContact() {
    var name = validName();
    var email1 = validEmail();
    var email2 = verifyEmail();
    var subject = validSubject();
    var message = validMessage();
    var errmsg = '';

    if (name == false) {
        errmsg += "Please enter your first and last name.<br>";
        document.getElementById("name").classList.remove("normal-box");         
        document.getElementById("name").classList.add("error-box");
        document.getElementById("message-area").classList.add("error-text");
        document.getElementById("message-area").classList.remove("normal-text");
		document.getElementById("name").value = "";
    }
	else {
		document.getElementById("message-area").classList.remove("error-text");
        document.getElementById("message-area").classList.add("normal-text");
        document.getElementById("name").classList.add("normal-box");            
        document.getElementById("name").classList.remove("error-box");
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
	
    if (email2 == false) {
        errmsg += "Please confirm your email address.<br>";
        document.getElementById("remail2").classList.remove("normal-box");              
        document.getElementById("remail2").classList.add("error-box");
        document.getElementById("message-area").classList.add("error-text");
        document.getElementById("message-area").classList.remove("normal-text");
		document.getElementById("remail2").value = "";
    }
	else {
		document.getElementById("message-area").classList.remove("error-text");
        document.getElementById("message-area").classList.add("normal-text");
        document.getElementById("remail2").classList.add("normal-box");            
        document.getElementById("remail2").classList.remove("error-box");
	}
	
    if (subject == false) {
        errmsg += "Please input a subject.<br>";
        document.getElementById("subject").classList.remove("normal-box");              
        document.getElementById("subject").classList.add("error-box");
        document.getElementById("message-area").classList.add("error-text");
        document.getElementById("message-area").classList.remove("normal-text");
		document.getElementById("subject").value = "";
    }
	else {
		document.getElementById("message-area").classList.remove("error-text");
        document.getElementById("message-area").classList.add("normal-text");
        document.getElementById("subject").classList.add("normal-box");            
        document.getElementById("subject").classList.remove("error-box");
	}
	
    if (message == false) {
        errmsg += "Message requires a minimum of 10 characters and a maximum of 1000 characters.<br>";
        document.getElementById("message").classList.remove("normal-box");              
        document.getElementById("message").classList.add("error-box");
        document.getElementById("message-area").classList.add("error-text");
        document.getElementById("message-area").classList.remove("normal-text");
		document.getElementById("message").value = "";
    }
	else {
		document.getElementById("message-area").classList.remove("error-text");
        document.getElementById("message-area").classList.add("normal-text");
        document.getElementById("message").classList.add("normal-box");            
        document.getElementById("message").classList.remove("error-box");
	}
	
    if (errmsg == '') {
        document.getElementById("message-area").classList.remove("error-text");
        document.getElementById("message-area").classList.add("normal-text");
        document.getElementById("message-area").innerHTML = "Message Sent.";
        console.log("Submitted Form Data:");
        console.log("Name: " + document.getElementById("name").value);
        console.log("E-mail: "+ document.getElementById("remail2").value);
        console.log("Subject: " + document.getElementById("subject").value);
        console.log("Message: " + document.getElementById("message").value);
		postSubmit();
    }
    else {
        document.getElementById("message-area").classList.add("error-text");
        document.getElementById("message-area").classList.remove("normal-text");
        document.getElementById("message-area").innerHTML = errmsg;
    }
}

function postSubmit() {
	/* This will clear out the contact form upon a successful submission */
	var fname = document.getElementById("name").value;
	var email1 = document.getElementById("remail1").value;
	var email2 = document.getElementById("remail2").value;
	var subject = document.getElementById("subject").value;
	var message = document.getElementById("message").value;
	document.getElementById("name").value = "";
    document.getElementById("remail1").value = "";
    document.getElementById("remail2").value = "";
    document.getElementById("subject").value = "";
    document.getElementById("message").value = "";
}