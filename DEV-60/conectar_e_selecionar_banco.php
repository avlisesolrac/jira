<?php

$servidor_do_banco='127.0.0.1';
$usuario_do_banco='root';
$senha_do_banco='';
$nome_do_banco='dev60';

$conectar_no_servidor_de_banco = mysqli_connect($servidor_do_banco,$usuario_do_banco,$senha_do_banco) or die ("Verifique os dados de conexão no Banco de dados ou entre em contato com o administrador do sistema!");

$selecionar_o_banco = mysqli_select_db($conectar_no_servidor_de_banco,$nome_do_banco) or die ("Verifique o banco de dados ou entre em contato com o administrador do sistema!");

?>