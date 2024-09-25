<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9 - Verificação de maioridade.</title>
</head>
<body>
    <h2>Resolução do Exercício 9<p>Verificação de maioridade.</h2>
    <?php 
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        
        if ($idade >= 18) {
            echo "$nome é maior de 18 e tem $idade anos.";
        } else {
            echo "$nome não é maior de 18 e tem $idade anos.";
        }
    ?>
</body>
</html>