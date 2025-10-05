<?php

/*Dados de conexão com o Banco de Dados*/
$servidor_do_banco='127.0.0.1';
$usuario_do_banco='root';
$senha_do_banco='';
$nome_do_banco='dev58';

$conectar_no_banco = mysqli_connect($servidor_do_banco,$usuario_do_banco,$senha_do_banco,$nome_do_banco) or die("Houve um erro no momento da conexão com o Banco de Dados, por gentileza entrar em contato com o Administrador do Sistema para analisar e corrigir o erro!");

if(isset($_POST["carrinho"])){
	$tamanho_produto = $_POST["tamanho"];
	$cor_produto = $_POST["cor"];

	if(empty($tamanho_produto) || empty($cor_produto)){
		echo "Não foi preenchido os dados necessários para gravar a venda no Banco, por favor tente novamente.<a href='index.html'>VOLTAR</a>";
	} else {
		
		mysqli_query($conectar_no_banco,"INSERT INTO `vendas` (`nome_produto`, `preco_produto`, `tamanho_produto`, `cor_produto`) VALUES ('Camiseta Original do CódigoProfundo', 'R$ 99,00', '$tamanho_produto', '$cor_produto')");
		echo "Obrigado pela compra, em breve seguiremos com a etapa de entrega do produto escolhido!";
	}

}else{
	echo "Não foi preenchido os dados necessários para gravar os dados da venda no Banco, por favor tente novamente.<a href='index.html'>VOLTAR</a>";
}

?>