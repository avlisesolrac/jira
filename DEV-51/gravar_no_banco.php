<?php

$servidor_do_banco='127.0.0.1';
$usuario_do_banco='root';
$senha_do_banco='';
$nome_do_banco='dev51';
$preferencias_escolhidas = $_POST['preferencias'];

/*
echo "$preferencias_escolhidas[0]";
echo "$preferencias_escolhidas[1]";
echo "$preferencias_escolhidas[2]";
echo "$preferencias_escolhidas[3]";
echo "$preferencias_escolhidas[4]";
*/

/*
foreach($preferencias_escolhidas as $preferencia){
	echo "$preferencia<br>";
}
*/


$conectar_no_banco = mysqli_connect($servidor_do_banco,$usuario_do_banco,$senha_do_banco,$nome_do_banco);

/** 
*
*Retorna o próximo ID para ser utilizado no momento de gravar os itens selecionados na tabela.
*
*/
$tableName = "preferencias_estudos";

$query = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ?";

if ($stmt = $conectar_no_banco->prepare($query)) {
    $stmt->bind_param("s", $tableName);
    $stmt->execute();
    $stmt->bind_result($nextAutoIncrementId);
    $stmt->fetch();
    $stmt->close();

    if ($nextAutoIncrementId !== null) {

    } else {
        echo "Table '$tableName' not found or no auto-increment column.";
    }
} else {
    echo "Error preparing statement: " . $conectar_no_banco->error;
}


/**
*
*Coleta cada item selecionado no formulário pelo usuário e após armazenar na variável realiza a gravação no banco.
*
*/
if(isset($_POST['preferencias']) && is_array($_POST['preferencias'])){
	$preferencias_escolhidas = $_POST['preferencias'];

/*
	foreach($preferencias_escolhidas as $preferencia){
		if($preferencia == 'HTML'){
			mysqli_query($conectar_no_banco, "INSERT INTO `preferencias_estudos` (`identificador`, `html`, `css`, `javascript`, `php`, `mysql`) VALUES ('$nextAutoIncrementId', '$preferencia', '', '', '', '')");
		}elseif($preferencia == 'CSS'){
			mysqli_query($conectar_no_banco, "INSERT INTO `preferencias_estudos` (`identificador`, `html`, `css`, `javascript`, `php`, `mysql`) VALUES ('$nextAutoIncrementId', '', '$preferencia', '', '', '')");
		}elseif($preferencia == 'JAVASCRIPT'){
			mysqli_query($conectar_no_banco, "INSERT INTO `preferencias_estudos` (`identificador`, `html`, `css`, `javascript`, `php`, `mysql`) VALUES ('$nextAutoIncrementId', '', '', '$preferencia', '', '')");
		}elseif($preferencia == 'PHP'){
			mysqli_query($conectar_no_banco, "INSERT INTO `preferencias_estudos` (`identificador`, `html`, `css`, `javascript`, `php`, `mysql`) VALUES ('$nextAutoIncrementId', '', '', '', '$preferencia', '')");
		}elseif($preferencia == 'MYSQL'){
			mysqli_query($conectar_no_banco, "INSERT INTO `preferencias_estudos` (`identificador`, `html`, `css`, `javascript`, `php`, `mysql`) VALUES ('$nextAutoIncrementId', '', '', '', '', '$preferencia')");
		}
	}
*/

/* Aqui é uma maneira de gravar os dados usando variáveis ao invés do posicionamento do array. 
*
$html = $preferencias_escolhidas[0];
$css = $preferencias_escolhidas[1];
$javascript = $preferencias_escolhidas[2];
$php = $preferencias_escolhidas[3];
$mysql = $preferencias_escolhidas[4];

	mysqli_query($conectar_no_banco, "INSERT INTO `preferencias_estudos` (`identificador`, `html`, `css`, `javascript`, `php`, `mysql`) VALUES ('$nextAutoIncrementId', '$html', '$css', '$javascript', '$php', '$mysql')");
*/


/*VERSÃO FINAL 1*/

	mysqli_query($conectar_no_banco, "INSERT INTO `preferencias_estudos` (`identificador`, `html`, `css`, `javascript`, `php`, `mysql`) VALUES ('$nextAutoIncrementId', '$preferencias_escolhidas[0]', '$preferencias_escolhidas[1]', '$preferencias_escolhidas[2]', '$preferencias_escolhidas[3]', '$preferencias_escolhidas[4]')");

		echo "Dados gravados com sucesso no banco. <a href='index.html'>VOLTAR</a>";
}else{
	echo 'Nenhum item foi selecionado ou foi apresentado erro no envio.<br><a href="index.html">VOLTAR</a>';
}


?>