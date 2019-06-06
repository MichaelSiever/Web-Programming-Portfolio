/*
-----------------------------------------------------------------------------------------
Name: Michael Siever 6189804
Assignment: 09
Purpose: JavaScript File for Form Validation Assignment
Notes: Completed 12/03/2018
-----------------------------------------------------------------------------------------
*/

var $ = function (elementID) {
	return document.getElementById(elementID);
}

function clearOut() {
    /* Resets input boxes; removes red borders and text from message area. */
    $("name").value = "";
    $("remail1").value = "";
    $("remail2").value = "";
    $("subject").value = "";
    $("message").value = "";
    $("name").classList.add("normal-box");
    $("name").classList.remove("error-box");
    $("remail1").classList.add("normal-box");
    $("remail1").classList.remove("error-box");
    $("remail2").classList.add("normal-box");
    $("remail2").classList.remove("error-box");
    $("subject").classList.add("normal-box");
    $("subject").classList.remove("error-box");
    $("message").classList.add("normal-box");
    $("message").classList.remove("error-box");
    $("message-area").innerHTML = "";
}

function verfiyName() {
    /* Verifies info from name input box. If empty, returns false; else, returns name. */
    var name = $("name").value;
        name = name.trim();

        if (name.length == 0 ) {
        return false;
        }
    else
    {
        $("message-area").classList.remove("error-text");
        $("message-area").classList.add("normal-text");
        $("name").classList.add("normal-box");            
        $("name").classList.remove("error-box");
        return name;
        }
}

function verifyEmail1() {
    /* Verifies info from remail1 input box. If remail1 is empty or if remail1 does not have a "@" character, returns false; else, returns email1. */
    var email1 = $("remail1").value;
        email1 = email1.trim();
    var foundAt = -1;
    var len = email1.length;

    for (var i = 0; i < len && foundAt == -1; i++){
        if (email1[i] == "@"){
            foundAt += i;
        }
    }

        if (email1.length == 0 || foundAt < 0 || foundAt + 3 > len) {
        return false;
        }
    else
    {
        $("message-area").classList.remove("error-text");
        $("message-area").classList.add("normal-text");
        $("remail1").classList.add("normal-box");         
        $("remail1").classList.remove("error-box");
        return email1;
    }
}

function verifyEmail2() {
    /* Verifies info from remail2 input box. If empty or if remail2 does not match remail1, returns false; else, returns email2. */
    var email2 = $("remail2").value;
        email2 = email2.trim();

        if (email2.length == 0 || email2 != verifyEmail1()) {
        return false;
        }
    else
    {
        $("message-area").classList.remove("error-text");
        $("message-area").classList.add("normal-text");
        $("remail2").classList.add("normal-box");         
        $("remail2").classList.remove("error-box");
        return email2;   
    }
}

function verifySubject() {
    /* Verifies info from subject input box. If empty, return false; else, returns subject. */
        var subject = $("subject").value;
        subject = subject.trim();

        if (subject.length == 0) {
        return false;
        }
    else
    {
        $("message-area").classList.remove("error-text");
        $("message-area").classList.add("normal-text");
        $("subject").classList.add("normal-box");         
        $("subject").classList.remove("error-box");
        return subject;   
    }
}

function verifyMessage() {
    /* Verifies info from message input box. If less than 10 characters, returns false; 
    else, returns message. Message set at input box to take a max of only 1000 characters.*/
    var message = $("message").value;
    message= message.trim();

        if (message.length < 10) {
        return false;
        }
    else
    {
        $("message-area").classList.remove("error-text");
        $("message-area").classList.add("normal-text");
        $("message").classList.add("normal-box");         
        $("message").classList.remove("error-box");
        return message;
    }
}

function send() {
    var name = verfiyName();
    var email1 = verifyEmail1();
    var email2 = verifyEmail2();
    var subject = verifySubject();
    var message = verifyMessage();
    var errmsg = '';

    if (name == false){
        errmsg += "Please enter your name.<br>";
        $("name").classList.remove("normal-box");         
        $("name").classList.add("error-box");
        $("message-area").classList.add("error-text");
        $("message-area").classList.remove("normal-text");
		$("name").value = "";
    }
    if (email1 == false){
        errmsg += "Please enter your email address.<br>";
        $("remail1").classList.remove("normal-box");              
        $("remail1").classList.add("error-box");
        $("message-area").classList.add("error-text");
        $("message-area").classList.remove("normal-text");
		$("remail1").value = "";
    }
    if (email2 == false){
        errmsg += "Please confirm your email address.<br>";
        $("remail2").classList.remove("normal-box");              
        $("remail2").classList.add("error-box");
        $("message-area").classList.add("error-text");
        $("message-area").classList.remove("normal-text");
		$("remail2").value = "";
    }
    if (subject == false){
        errmsg += "Please input a subject.<br>";
        $("subject").classList.remove("normal-box");              
        $("subject").classList.add("error-box");
        $("message-area").classList.add("error-text");
        $("message-area").classList.remove("normal-text");
		$("subject").value = "";
    }
    if (message == false){
        errmsg += "Message requires a minimum of 10 characters and a maximum of 1000 characters.<br>";
        $("message").classList.remove("normal-box");              
        $("message").classList.add("error-box");
        $("message-area").classList.add("error-text");
        $("message-area").classList.remove("normal-text");
		$("message").value = "";
    }
    if (errmsg == ''){
        $("message-area").classList.remove("error-text");
        $("message-area").classList.add("normal-text");
        $("message-area").innerHTML = "Message Sent.";
        console.log("Submitted Form Data:");
        console.log("Name: " + name);
        console.log("E-mail: "+ email2);
        console.log("Subject: " + subject);
        console.log("Message: " + message);
		postSubmit();
    }
    else{
        $("message-area").classList.add("error-text");
        $("message-area").classList.remove("normal-text");
        $("message-area").innerHTML = errmsg;
    }
}

function show() {
    var t = "edu";
    var yz = "michael.siever";
    var a = "@";
    var u = "austincc.";
    var j = "mailto:";
    $("3mai1").classList.add("clicked-text");
    $("3mai1").innerHTML = "<a href = " + j + yz + a + "g." + u + t + ">" + yz + a + "g." + u + t + "</a>";
}

function postSubmit() {
	/* This will clear out the contact form upon a successful submission */
	var name = $("name").value;
	var email1 = $("remail1").value;
	var email2 = $("remail2").value;
	var subject = $("subject").value;
	var message = $("message").value;
	$("name").value = "";
    $("remail1").value = "";
    $("remail2").value = "";
    $("subject").value = "";
    $("message").value = "";
}