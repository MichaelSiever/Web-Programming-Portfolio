// Michael Siever JavaScript file for Program 11

var $ = function (elementID) {
	return document.getElementById(elementID);
}

function displayURL() {
	$("req2_paragraph").innerHTML = window.location.href;
}

function cookieStatus() {
    $("req2_paragraph2").innerHTML = "Cookies enabled is " + navigator.cookieEnabled + ".";
}

function javaStatus() {
   $("req2_paragraph3").innerHTML = "Java enabled is "+ navigator.javaEnabled() + ".";
}

function goBack() {
    window.history.back()
}

function goForward() {
    window.history.forward()
}

function abracaDIVra() {
    var xhttp = new XMLHttpRequest();
    
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            myXML(xhttp)
        }
    };
    
    xhttp.open("GET", "divcolors.xml", true);
    xhttp.send();

    function myXML(xml) {
        var xmlDoc = xml.responseXML;

        for (var i = 0; i < 20; i++) {
            $("div" + (i+1)).style.backgroundColor =
                xmlDoc.getElementsByTagName("color" + (i+1))[0].childNodes[0].nodeValue;
        }
    }
}

function makeRandomColor() {
    var hex = '0123456789ABCDEF'.split('');
    var color = '#';
    while (color.length < 7) {
        color += hex[Math.floor(Math.random() * 16)];
    }
    return color;
}

function colorEachDiv() {
    for(var i = 0; i < 20; i++) {
        $("div" + (i + 1)).style.backgroundColor = makeRandomColor();
    }
}

var intervalId;
function setTimer() {
    if(intervalId) {
        clearInterval(intervalId);
        intervalId = undefined;
    }
    else {
        intervalId = setInterval(colorEachDiv, parseInt($("time").value) * 1000);
    }
}

function sizeMonitorsNot() {
	var h = "Total height of your screen is " + screen.height + "px. <br>";
    $("result6").innerHTML = h;
    var w = "Total width of your screen is "+ screen.width + "px.";
    $("result6").innerHTML += w;
}

function iCastThyOut() {
    window.location.assign("http://www.codeandtheory.com/");
}

function writeCookie(name, value, days) {
    if(days){
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires ="; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
    alert(document.cookie);
}

function deleteCookie(name) { // Using yesterday's date
    writeCookie(name, "", -1);
}
