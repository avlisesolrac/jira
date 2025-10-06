<?php

$servidorDoBanco = '127.0.0.1';
$usuarioDoBanco = 'root';
$senhaDoBanco = '';
$nomeDoBanco = 'dev61';

$conectarNoBanco = mysqli_connect($servidorDoBanco,$usuarioDoBanco,$senhaDoBanco,$nomeDoBanco) or die ("Houve um erro de conexão na base, por favor verificar com o Administrador do Sistema!");

?>