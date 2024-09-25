<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8 - Cálculo da média final de um aluno SGA.</title>
</head>
<body>
    <h2>Resolução do Exercício 8<p>Cálculo da média final de um aluno SGA.</h2>
    <?php 
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        
        $media = (($nota1 * 2) + ($nota2 * 2) + ($nota3 * 1)) / 5;
        
        if ($media >= 7) {
            echo "Média: $media - Status: Aprovado.";
        } else {
            echo "Média: $media - Status: Reprovado.";
        }
    ?>
</body>
</html>