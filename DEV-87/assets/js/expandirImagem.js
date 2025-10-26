function expandirImagem(imagemClicada){
	document.getElementsByClassName("imagemExpandida")[0].src = imagemClicada.src;
	document.getElementsByTagName("picture")[0].style.display = "block";
}

function fecharImagem(elemento){
	document.getElementsByTagName("picture")[0].style.display = "none";
}