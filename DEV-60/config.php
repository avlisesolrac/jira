<?php

$servidor='localhost';
$usuario='root';
$senha='';
$nomeDoBanco='dev60';

$conectar = mysqli_connect($servidor,$usuario,$senha) or die("Não foi possível conectar no Banco de Dados!");

$consultaNoBanco = mysqli_select_db($conectar,$nomeDoBanco) or die("Não foi possível consultar a base!");

?>