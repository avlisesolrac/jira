let nome = "Carlos Eduardo Silva", contador = 0;

function digitandoTexto(){
	document.querySelector("main>h1").innerHTML += nome.charAt(contador);
	contador++;
	
	setTimeout(digitandoTexto,50);
}

digitandoTexto();