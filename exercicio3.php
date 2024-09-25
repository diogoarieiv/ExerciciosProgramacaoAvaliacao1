<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Cálculo do fatorial de um número – RECURSIVO.</title>
</head>
<body>
    <h2>Resolução do Exercício 3<p>Cálculo do fatorial de um número – RECURSIVO.</h2>
    <?php 
        echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-=-<br>\n";
     
        function fatorial($n) {
            if ($n == 0) {
                return 1;
            } else {
                return $n * fatorial($n - 1);
            }
        }

        $numero = $_POST['numero'];
        $resultado = fatorial($numero);

        echo "Fatorial de $numero: $resultado<br>\n";

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