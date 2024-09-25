<?php
include("conexao1.php");

// Verifica se a conexão foi estabelecida
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Recebe os dados do formulário
$matricula = $_POST['matricula_atualizacao'];
$nova_carga_horaria = $_POST['nova_carga_horaria'];

// Prepara a SQL para consultar a carga horária atual do aluno
$sql = "SELECT carga_horaria FROM alunos WHERE matricula = ?";
$stmt = mysqli_prepare($conexao, $sql);

if ($stmt) {
    // Liga a variável ao parâmetro da consulta preparada
    mysqli_stmt_bind_param($stmt, "s", $matricula);

    // Executa a consulta
    if (!mysqli_stmt_execute($stmt)) {
        echo "Erro ao executar a consulta: " . mysqli_stmt_error($stmt);
        exit;
    }

    // Armazena o resultado
    mysqli_stmt_bind_result($stmt, $carga_horaria_atual);
    if (!mysqli_stmt_fetch($stmt)) {
        echo "Matrícula não encontrada.";
        exit;
    }

    // Fecha o statement de consulta
    mysqli_stmt_close($stmt);

    // Aluno encontrado, atualiza a carga horária
    $nova_carga_total = $carga_horaria_atual + $nova_carga_horaria;

    // Prepara a SQL para atualizar a carga horária
    $update_sql = "UPDATE alunos SET carga_horaria = ? WHERE matricula = ?";
    $update_stmt = mysqli_prepare($conexao, $update_sql);

    if ($update_stmt) {
        // Liga as variáveis aos parâmetros da consulta preparada
        mysqli_stmt_bind_param($update_stmt, "ii", $nova_carga_total, $matricula);

        // Executa a atualização
        if (!mysqli_stmt_execute($update_stmt)) {
            echo "Erro ao atualizar carga horária: " . mysqli_stmt_error($update_stmt);
            exit;
        }

        echo "Carga horária atualizada com sucesso!";
    } else {
        echo "Erro ao preparar a consulta de atualização: " . mysqli_error($conexao);
    }

    // Fecha o statement de atualização
    mysqli_stmt_close($update_stmt);
} else {
    echo "Erro ao preparar a consulta: " . mysqli_error($conexao);
}

// Fecha a conexão
mysqli_close($conexao);
?>