<?php
$servername = "localhost";
$username = "root"; // Substitua com o seu usuário do MySQL, se necessário
$password = ""; // Substitua com a sua senha do MySQL, se houver
$dbname = "cadastro_alunos"; // Certifique-se de que este é o nome correto do seu banco de dados

// Cria a conexão
$conexao = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se a conexão foi estabelecida corretamente
if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Opcional: Definir o charset para evitar problemas com caracteres especiais
mysqli_set_charset($conexao, "utf8");

// Se a conexão foi bem-sucedida, você pode adicionar outros códigos aqui ou em outros scripts que incluam este arquivo
?>