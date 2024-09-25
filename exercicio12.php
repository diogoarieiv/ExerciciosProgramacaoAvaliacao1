<?php
// Conexão com o banco de dados
$conn = mysqli_connect("localhost", "root", "", "cadastro_alunos");

// Verifica se a conexão foi estabelecida
if (!$conn) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}
?>
<link rel="stylesheet" type="text/css" href="styles.css">
<!-- Formulário de busca -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="nome">Nome do Aluno:</label>
    <input type="text" id="nome" name="nome"><br><br>
    <label for="matricula">Matrícula:</label>
    <input type="text" id="matricula" name="matricula"><br><br>
    <label for="email">E-mail Institucional:</label>
    <input type="email" id="email" name="email"><br><br>
    <input type="submit" value="Buscar">
    <input type="button" value="Excluir cadastro" onclick="location.href='exercicio12del.php'">
    </form>
</form>

<?php
// Processamento da busca
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $email = $_POST["email"];

    // Consulta SQL para buscar os dados
    $sql = "SELECT * FROM alunos WHERE nome LIKE '%$nome%' OR matricula LIKE '%$matricula%' OR email LIKE '%$email%'";
    $result = mysqli_query($conn, $sql);

    // Exibe os resultados
    if (mysqli_num_rows($result) > 0) {
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
    } else {
        echo "Nenhum registro encontrado.";
    }
}


// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>