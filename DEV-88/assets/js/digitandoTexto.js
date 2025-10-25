let contador = 0, texto = 'Carlos Eduardo Silva';

function digitandoTexto(){
	if(contador < texto.length){
		document.getElementById("digitando").innerHTML += texto.charAt(contador);
		contador++;

		setTimeout(digitandoTexto,50);
	}
}

digitandoTexto();