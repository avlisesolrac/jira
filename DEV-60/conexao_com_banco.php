<?php

$servidor='localhost';
$usuario='root';
$senha='';
$nome_do_banco='dev60';

$conectar = mysqli_connect($servidor,$usuario,$senha) or die("Não foi possivel conectar no Banco de Dados, verifique com o Administrador de Sistemas");

$selecionarBanco = mysqli_select_db($conectar,$nome_do_banco) or die("Não foi possível encontrar o Banco de Dados indicado, verifique com o Administrador de Sistemas");

?>