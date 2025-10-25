var i=0, text;

text = "Welcome to DarkCode";

function typing(){
console.log(i);
	if(i<text.length){
		document.getElementById("text").innerHTML += text.charAt(i);
		i++;
		setTimeout(typing,50);
	}
}

typing();