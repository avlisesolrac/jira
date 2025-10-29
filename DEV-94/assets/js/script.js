var nav = document.getElementsByClassName("navigation");

//Função para acompanhar o rolamento da página e caso o rolamento da página ocorra então é adicionado a classe nav na DIV com a classe navigation e com isso o CSS aplica o efeito de fixed na div superior e o fundo preto nela e remove essa clas quando a barra de rolagem volta ao topo da página.

window.onscroll = function sticky(){
	if(window.pageYOffset > nav[0].offsetTop){
		nav[0].classList.add("nav");
	} else {
		nav[0].classList.remove("nav");
	}
}