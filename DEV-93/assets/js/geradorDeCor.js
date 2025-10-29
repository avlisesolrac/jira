function geradorDeCor(elemento){
	let familiaHexadecimal, novaCor = "#", contador = 0;

	familiaHexadecimal = "0123456789ABCDEF";

	for(; contador < 6; contador++){
		novaCor += familiaHexadecimal[Math.floor(Math.random()*16)];
	}
	
	elemento.style.background = novaCor;

	document.getElementsByTagName('h2')[0].innerText = novaCor;
}