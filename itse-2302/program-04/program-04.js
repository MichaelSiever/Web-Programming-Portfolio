// JavaScript equations and functions for Michael T. Siever Program 04

"use strict";

var $ = function (elementID) {
	return document.getElementById(elementID);
}

var req1_x = function Req1LateForAVeryImportantDate(dd) {
	var d = new Date();
	return $(dd).innerHTML = d;
}

function Req2TasteTheRainbow(color) {
    var val = color.value;
    return $('dateDisplay').style.color = val;
}

function Req3CIsForCookie() {
	var user = document.cookie;
    if (user != "") {
    	$("omNomNom").innerHTML = "Welcome back " + user + ".";
    } else {
        user = prompt("Enter your name:", "");
        if (user != "" && user != null) {
            document.cookie = user;
            $("omNomNom").innerHTML = "cookie set.";
        }
    }
}

var Req4CoffeeIsForClosures = (function () {
    var clickNum = 0;
    return function () {
        clickNum += 1;
        var rNum = parseFloat(Math.floor(Math.random() * 100) + 1);
        return $("closure").innerHTML = "Number of Clicks: " +
            clickNum + "<br/>Random Number:  " + rNum;
    }
})();

function Req5tItTogglesTheMind(paragraph) {
     var parags = $("para").children;
        for(var i = 0; i < parags.length; i++) {
        parags[i].className = "FreshPrints";
    }
    paragraph.className = "FreshPrintsOff";
}


function Req6ChangeThatFont() {
    var parags = $("para").children;
    for(var i = 0; i < parags.length; i++) {
        parags[i].style.fontSize = "20px";
        parags[i].style.fontFamily = "Courier New";
    }
}

function Req7EverythingButTheKitchenSink() {
	var obj = document.querySelectorAll('*');
	var result = "";
    for (var i= 0; i < obj.length; i++) {
        result += obj[i].innerHTML + "; ";
    }
	$("pardonOurDust").innerHTML = result;
}

function Req8DinnersOnTheTable(food) {
    var id = food.value;
    var sel = $('tablePic').selectedIndex;
    var selImg = document.getElementsByClassName('pic')[sel].value;
    var currentImage = $('shownImage');
    if(currentImage) {
        var parent = currentImage.parentElement;
        parent.removeChild(currentImage);
    }
    $(id).innerHTML += "<img id='shownImage' style='height:320px' src='images/" + selImg + ".jpg'>";
}

var w;

function Req9StartWorker() {
    if (typeof(Worker) !== "undefined") {
    	if (typeof(w) == "undefined") {
       		w = new Worker("workHardForTheMoney.js");
       	}
        w.onmessage = function(event) {
      		$("work").innerHTML = event.data;
      		var loopImg = "images/9_" + event.data + ".jpg";
      		console.log(loopImg);
      		$("work").src = loopImg;
    	};
  	} else {
    	$("work").innerHTML = "Sorry! No Web Worker support.";
  	}
}

function Req9StopWorker() {
	w.terminate();
  	w = undefined;
}

function Req10TheInvisibleMan() {
    $("work").classList.toggle("ClassOutputAlt");
}

function Req13AndOnTheSeventhDayHeCreatedANewParagraph() {
    var myDiv = $("DivyItUp");
    var parag = document.createElement("P");
    myDiv.appendChild(parag);
    var txtnode = document.createTextNode("I've just been created!");
    parag.appendChild(txtnode);
}

function Req14GottaPSoBadlyRightNow() {
    var para = document.getElementsByTagName('P');
    var paraCount = para.length;
    $('pCount').innerHTML = "There are " + paraCount + " paragraph elements on this page.";
}

function Req15SunnierDaysAreComing(elem) {
	if (elem.value === "Open Curtains") { 
		elem.value = "Sunshine!";
		elem.style.backgroundColor = "yellow";
	} 
}