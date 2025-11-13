/*Quando o usuário clicar no botão 'Exibir Pop-up' vai ser removida a classe esconder da div*/
document.getElementsByTagName('button')[0].addEventListener('click', function(){
	document.getElementsByTagName('div')[0].classList.remove('esconder');
});

/*Quando o usuário clicar no botão 'X' do pop-up vai ser adicionada a classe esconder na div*/
document.getElementsByTagName('ion-icon')[1].addEventListener('click', function(){
	document.getElementsByTagName('div')[0].classList.add('esconder');
});