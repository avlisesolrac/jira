function modificarImagem(elementoDoLink){

	/*Primeiro atribuo o caminho da imagem que foi clicada no menu e depois atribuo ao elemento de imagem com o id chamado quadro e depois altero o display deste mesmo elemento para block, caso o usuário tenha clicado no X para fechar a imagem que foi aberta.*/

	document.getElementById('quadro').src = elementoDoLink.src;
	document.getElementById('quadro').parentElement.style.display = "block";

}

function esconderImagem(xDoQuadro){

	xDoQuadro.parentElement.style.display = "none";

}