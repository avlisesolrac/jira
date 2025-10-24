function buscarContato(){
	let busca, registros, nome, contador;

	busca = document.getElementById("busca").value.toUpperCase();
	
	registros = document.getElementsByClassName("registro");

	for(contador = 0; registros.length; contador++){
		/*
			O cells[0] retorna a coluna da letra do contato
			O cells[1] retorna a coluna do nome do contato
		*/
		nome = registros[contador].cells[1].innerText;

		/*
			o indexOf(busca) retorna o número do indice em que se encontra a letra que foi buscada, ou seja qualquer valor maior ou igual a 0 quer dizer que a letra foi encontrada então pode exibir a linha ou as linhas de contatos que existem na tabela.
		*/
		if(nome.toUpperCase().indexOf(busca) > -1){
			registros[contador].style.display = "table-row";
		} else {
			registros[contador].style.display = "none";
		}
	}
}