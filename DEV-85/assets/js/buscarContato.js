function buscarContato(){
	let consulta, registros, nome, contador;
	
	/*Retorna o texto em maiúsculo digitado pelo usuário no campo input*/
	consulta = document.getElementsByTagName('input')[0].value.toUpperCase();

	/*Retorna todas as linhas da tabela*/
	registros = document.getElementsByTagName('tr');

	/*Varre cada linha de registro contido na tabela, e o contador começa em 2 por que as duas primeiras tr[0 e 1] são do THEAD da tabela [h1 e input]*/
	for(contador=2; contador < registros.length; contador++){
	
	/*Retorna o conteúdo de Texto já em maiúsculo do segundo filho da TR da Tabela, que é onde está o nome do registro ao invés de children[0] que é onde está a letra inicial do nome do contato*/

		nome = registros[contador].children[1].innerText.toUpperCase();
		
	/*Se alguma letra no nome que foi capturado na linha anterior existir na variavel consulta que foi o que o usuario digitou no campo de busca, então ele vai aplicar o display: table-row na linha do registro, caso contrário vai aplicar display: none para o nome desaparecer da lista da agenda */

		if(nome.indexOf(consulta) > -1){
			registros[contador].style.display = "table-row";
		} else {
			registros[contador].style.display = "none";
		}
	}
}