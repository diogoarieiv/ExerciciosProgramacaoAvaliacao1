<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7 - Comparação de valores A e B.</title>
</head>
<body>
    <h2>Resolução do Exercício 7<p>Comparação de valores A e B.</h2>
    <?php 
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];
        
        if ($valorA > $valorB) {
            echo "A é maior que B.";
        } elseif ($valorA < $valorB) {
            echo "A é menor que B.";
        } else {
            echo "A é igual a B.";
        }
    ?>
</body>
</html>