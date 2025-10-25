/*Retorna o número de links na página, neste caso são 5 quadrados*/
let tamanhoDaLista = document.querySelectorAll('a').length;

/*Varre cada link e atribui o fundo do link com a código da cor que está contido no atributo ID de cada elemento*/

for(let i=0; i<tamanhoDaLista; i++){
	document.querySelectorAll('a')[i].style.background = document.querySelectorAll('a')[i].id;
}

/*Esta função recebe o link que foi clicado e altera o estilo de fundo do body de acordo com o valor que está no atributo ID do link clicado.*/

function mudarCorDeFundo(linkClicado){
	document.body.style.background = linkClicado.id;
}