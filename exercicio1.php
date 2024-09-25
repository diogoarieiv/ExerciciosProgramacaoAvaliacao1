<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Verificação de Número Positivo, Negativo ou Zero</title>
</head>
<body>
    <h2>Resolução do Exercício 1 <p>Verificação de Número Positivo, Negativo ou Zero.</h2>
    <?php 
        echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-=-<br>\n";
        $numero = $_POST['numero'];

        if ($numero > 0) {
          echo "Valor Positivo.<br>\n";
        } elseif ($numero < 0) {
            echo "Valor Negativo.<br>\n";
        } else {
            echo "Igual a Zero.<br>\n";
        }
        echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-=-<br>\n";
    ?>

    <?php
        echo "<p>";
        setlocale(LC_ALL, 'pt_BR.utf8');
        echo strftime('%d/%B/%G');
    
        echo "<p>";
        echo "Informações do browser (User agente):" . $_SERVER
        ['HTTP_USER_AGENT'];
    ?>
</body>
</html>
