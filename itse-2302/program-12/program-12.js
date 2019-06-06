// Michael Siever's JavaScript file for Program 12

var $ = function (elementID) {
	return document.getElementById(elementID);
}

function movieHint(value) {
	if (value.length == 0) {
        $("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                $("txtHint").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "movieHints.php?q="+value, true);
        xmlhttp.send();
    }
}

function showTeam(str) {
    if (str == "") {
        $("results2").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                $("results2").innerHTML = this.responseText;
            }
        };
        
        xmlhttp.open("GET","getTeams.php?q="+str,true);
        xmlhttp.send();
    }
}

function showCar(str) {
  if (str == "") {
    $("carHint").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      $("carHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getCars.php?q="+str,true);
  xmlhttp.send();
}