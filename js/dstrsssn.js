document.getElementById("dstrSssn").addEventListener("click",destroySession);


function destroySession() {
	console.log("hallo, hier kommt was an...");
  var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("dstrSssn").style.display = "none";
                document.getElementById("ajaxBox").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST", "./lib/destroySession.php");
        xmlhttp.send();
}