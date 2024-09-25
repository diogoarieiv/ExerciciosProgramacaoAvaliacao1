<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - Verificação de número par ou ímpar.</title>
</head>
<body>
    <h2>Resolução do Exercício 5<p>Verificação de número par ou ímpar.</h2>
    <?php 
        $numero = $_POST['numero'];
        
        if ($numero % 2 == 0) {
            echo "Número par.";
        } else {
            echo "Número ímpar.";
        }
    ?>
</body>
</html>