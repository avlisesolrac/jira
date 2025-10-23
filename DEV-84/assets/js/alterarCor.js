
/*
Aqui na função alterarCorDeFundo que recebeu o elemento de link, vai receber algo proximo desse exemplo:

<a onclick="alterarCorDeFundo(this)" href="#" id="#c0392b" name="vermelho"></a>

E então eu extraio apenas o conteúdo contido em ID do elemento e faço a atribuição para o estilo de background para o elemento body.

E assim a cor de fundo da página é alterado a cada click de botão realizado pelo usuário nas respectivas cores de cada botão.

*/

function alterarCorDeFundo(elemento){
	document.body.style.background = elemento.id;
}