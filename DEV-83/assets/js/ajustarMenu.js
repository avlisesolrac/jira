/*Função para alterar a classe do menu de navegação e do margin-top do main para se adapatar de acordo com o tamanho da tela*/

function ajustarMenu(){
	let menu = document.querySelector('nav').className;

	if(menu == 'esconderMenu'){
		document.querySelector('nav').className = 'exibirMenu';
		document.querySelector('main').className = 'exibirMenu';


	} else {
		document.querySelector('nav').className = 'esconderMenu';

		document.querySelector('main').className = 'esconderMenu';
	}
}