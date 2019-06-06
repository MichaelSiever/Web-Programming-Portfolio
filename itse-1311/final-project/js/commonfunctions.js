/*--
-----------------------------------------------------------------------------------------
Name: Michael Siever
Assignment: Final Project
Purpose: JS File for Common Functions to be used in the Contact Form JS and the
Registration Form JS
Notes: Completed 12/10/2018
-----------------------------------------------------------------------------------------
--*/

/* This function checks for valid email address input in just the first email 
instance of the Contact Form and the Registration Form. */
function validEmail() {
    var regex = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
    var email1 = $("#remail1").val().trim();
    $("#remail1").val(email1);
    return email1.match(regex) ? true : false;
}