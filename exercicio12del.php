<?php
// Conexão com o banco de dados
$conn = mysqli_connect("localhost", "root", "", "cadastro_alunos");

// Verifica se a conexão foi estabelecida
if (!$conn) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}
?>

<!-- Formulário de exclusão -->
<link rel="stylesheet" type="text/css" href="styles.css">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="nome">Nome do Aluno:</label>
    <input type="text" id="nome" name="nome"><br><br>
    <label for="matricula">Matrícula:</label>
    <input type="text" id="matricula" name="matricula"><br><br>
    <label for="email">E-mail Institucional:</label>
    <input type="email" id="email" name="email"><br><br>
    <input type="submit" value="Excluir">
    <input type="button" value="Realizar cadastro" onclick="location.href='exercicio12.php'">
</form>

<?php
// Processamento da exclusão
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $email = $_POST["email"];

    // Consulta SQL para buscar os dados
    $sql = "SELECT * FROM alunos WHERE nome LIKE ? OR matricula LIKE ? OR email LIKE ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'sss', $nome, $matricula, $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Verifica se há registros encontrados
    if (mysqli_num_rows($result) > 0) {
        // Exibe os resultados
        echo "<table>";
        echo "<tr><th>Nome do Aluno</th><th>Matrícula</th><th>Curso</th><th>E-mail Institucional</th><th>Telefone</th><th>Endereço</th><th>CEP</th><th>Cidade</th><th>UF</th><th>Curso para Horas Complementares</th><th>Carga Horária</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>" . $row["matricula"] . "</td>";
            echo "<td>" . $row["curso"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["telefone"] . "</td>";
            echo "<td>" . $row["endereco"] . "</td>";
            echo "<td>" . $row["cep"] . "</td>";
            echo "<td>" . $row["cidade"] . "</td>";
            echo "<td>" . $row["uf"] . "</td>";
            echo "<td>" . $row["curso_horas"] . "</td>";
            echo "<td>" . $row["carga_horaria"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        // Pergunta se o usuário deseja excluir o registro
        echo "Deseja excluir o registro?";
        echo "<form action='" . $_SERVER['PHP_SELF'] . "' method='post'>";
        echo "<input type='hidden' name='nome' value='" . $nome . "'>";
        echo "<input type='hidden' name='matricula' value='" . $matricula . "'>";
        echo "<input type='hidden' name='email' value='" . $email . "'>";
        echo "<input type='submit' value='Sim'>";
        echo "</form>";
    } else {
        echo "Nenhum registro encontrado.";
    }
}

// Processamento da exclusão
if (isset($_POST["nome"]) && isset($_POST["matricula"]) && isset($_POST["email"])) {
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $email = $_POST["email"];

    // Consulta SQL para excluir o registro
    $sql = "DELETE FROM alunos WHERE nome LIKE ? OR matricula LIKE ? OR email LIKE ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'sss', $nome, $matricula, $email);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "Registro excluído com sucesso!";
    } else {
        echo "Erro ao excluir registro: " . mysqli_stmt_error($stmt);
    }
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>