<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6 - Impressão de valores em ordem crescente.</title>
</head>
<body>
    <h2>Resolução do Exercício 6<p>Impressão de valores em ordem crescente.</h2>
    <?php 
        $numeroA = $_POST['numeroA'];
        $numeroB = $_POST['numeroB'];
        
        if ($numeroA < $numeroB) {
            echo "$numeroA, $numeroB";
        } else {
            echo "$numeroB, $numeroA";
        }
    ?>
</body>
</html>