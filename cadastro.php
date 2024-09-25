<?php
include("conexao1.php");

// Verifica se a conexão foi estabelecida
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Recebe os dados do formulário
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$curso = $_POST['curso'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$curso_horas = $_POST['curso_horas'];
$carga_horaria = $_POST['carga_horaria'];

// Prepara a SQL para inserção com prepared statements
$sql = "INSERT INTO alunos (nome, matricula, curso, email, telefone, endereco, cep, cidade, uf, curso_horas, carga_horaria) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexao, $sql);

if ($stmt) {
    // Liga as variáveis aos parâmetros da consulta preparada
    mysqli_stmt_bind_param($stmt, "ssssssssssi", $nome, $matricula, $curso, $email, $telefone, $endereco, $cep, $cidade, $uf, $curso_horas, $carga_horaria);

    // Executa a consulta
    if (mysqli_stmt_execute($stmt)) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro: " . mysqli_stmt_error($stmt);
    }

    // Fecha o statement
    mysqli_stmt_close($stmt);
} else {
    echo "Erro ao preparar a consulta: " . mysqli_error($conexao);
}

// Fecha a conexão
mysqli_close($conexao);
?>
