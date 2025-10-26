function buscarContato(buscaDoUsuario){
	let entradaDoUsuario, listaContatos, nomeEncontrado, contador;

/*Retorna o nome digitado pelo usuário e deixa em maiúscula.*/
	entradaDoUsuario = buscaDoUsuario.value.toUpperCase();

/*Retorna a lista de da tabela na ultima coluna onde consta os nomes dos contatos.*/
	listaContatos = document.querySelectorAll('tbody>tr>td:last-child');

/*Varre toda a listaContatos e verifica que se o texto digitado pelo usuario existe na tabela*/
	for(contador = 0; contador < listaContatos.length; contador++){

		nomeEncontrado = document.querySelectorAll('tbody>tr>td:last-child')[contador].innerText.toUpperCase();

/*Em caso positivo atribui na linha o display: table-row para exibir o contato.*/
		if(nomeEncontrado.indexOf(entradaDoUsuario) > -1){
			document.querySelectorAll('tbody>tr')[contador].style.display = "table-row";
		} else{

/*Em caso negativo atribui na linha o display: none para esconder o contato.*/
			console.log(nomeEncontrado.indexOf(entradaDoUsuario));
			document.querySelectorAll('tbody>tr')[contador].style.display = "none";
		}
	}
}