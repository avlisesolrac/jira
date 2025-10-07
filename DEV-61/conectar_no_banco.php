<?php

$servidorDoBanco = '127.0.0.1';
$usuarioDoBanco = 'root';
$senhaDoBanco = '';
$nomeDoBanco = 'dev61';

$conectarNoBanco = mysqli_connect($servidorDoBanco,$usuarioDoBanco,$senhaDoBanco,$nomeDoBanco) or die ("Verificar os dados de conexão na base ou entrar em contato com o administrador!");

?>