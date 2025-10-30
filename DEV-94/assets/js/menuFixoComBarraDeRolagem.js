window.onscroll = function menuFixoComBarraDeRolagem(){
	if(window.pageYOffset > 0){
		document.querySelector('nav').classList.add("exibirMenu");
	}else{
		document.querySelector('nav').classList.remove("exibirMenu");
	}
}