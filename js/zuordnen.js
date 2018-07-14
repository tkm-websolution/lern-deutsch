var imgBoxes = document.getElementsByClassName("imgBox");

// console.log(imgBoxes);


var Evaluation = {
	notcorrect : 0,
	stashWrongGuess : ''
};



var wordBox = document.getElementById("wordBox");

var wordImgID = wordBox.dataset.imgid;


function evalZuordnen(){
	
	var imgId = this.dataset.imgid;

	if(imgId == wordImgID){
		
		this.style.border = "5px solid green";
		this.children[1].innerHTML = "richtig";
		// the user succeeded, therefore make 'Weiter' button visible
		document.getElementById("nxt").style.display = "inline-block";
		document.getElementById("nxt").style.border = "2px dotted green";

		for (i = 0; i < imgBoxes.length; i++){
			imgBoxes[i].removeEventListener("click",evalZuordnen);
			imgBoxes[i].style.cursor = "default";
			if (imgBoxes[i] != this) {
				// console.log("Comparing the same element! This keeps full opacity!!!");
				imgBoxes[i].style.opacity = .5;

			}
		}
		document.getElementsByName("nxt")[0].disabled = false;

	}else{
		this.style.border = "5px solid red";
		this.children[1].innerHTML = "falsch";
		this.removeEventListener("click", evalZuordnen);
		this.setAttribute("disabled", true);
		this.style.cursor = "default";
		this.style.opacity = .5;
		Evaluation.notcorrect++;
		Evaluation.stashWrongGuess = trim(wordBox.getElementsByTagName("b")[0].innerHTML);
		document.getElementsByName("commitedMstk")[0].value = 1;
		console.log("Fehler " + Evaluation.notcorrect);
	}
}


for (i = 0; i < imgBoxes.length; i++){
	imgBoxes[i].addEventListener("click",evalZuordnen);
}


document.getElementById('nxt-form').addEventListener('submit', function(evt){
	var mistakes = document.getElementsByName("mistakes")[0].value;
	document.getElementsByName("mistakes")[0].value = parseInt(mistakes) + parseInt(Evaluation.notcorrect);
})



