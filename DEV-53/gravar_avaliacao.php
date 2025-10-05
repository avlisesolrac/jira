<?php

$servidor_do_banco='127.0.0.1';
$usuario_do_banco='root';
$senha_do_banco='';
$nome_do_banco='dev53';

// Conecta ao banco
$conectar_no_banco = new mysqli($servidor_do_banco, $usuario_do_banco, $senha_do_banco, $nome_do_banco);

// Checa conexão
if ($conectar_no_banco->connect_error) {
    die("Conexão falhou: " . $conectar_no_banco->connect_error);
}

// Recebe a avaliação enviada pelo fetch
$avaliacao = isset($_POST['avaliacao']) ? (int)$_POST['avaliacao'] : 0;

if ($avaliacao > 0 && $avaliacao <= 5) {
    // Prepara e executa a query
    $stmt = $conectar_no_banco->prepare("INSERT INTO avaliacoes (pontuacao) VALUES (?)");
    $stmt->bind_param("i", $avaliacao);

    if ($stmt->execute()) {
        echo "Avaliação registrada com sucesso!";
    } else {
        echo "Erro ao registrar a avaliação: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Avaliação inválida.";
}

$conn->close();

?>