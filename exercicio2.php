<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 - Exibição da tabuada de um número.</title>
</head>
<body>
    <h2>Resolução do Exercício 2<p>Exibição da tabuada de um número.</h2>
    <?php 
        echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-=-<br>\n";
        $numero = $_POST['numero'];

        echo "Tabuada do número $numero:<br>\n";
            for ($i = 0; $i <= 10; $i++) {
                echo "$numero x $i = " . ($numero * $i) . "<br>\n";
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