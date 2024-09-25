<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 - Calculadora com switch.</title>
</head>
<body>
    <h2>Resolução do Exercício 4<p>Calculadora com SwitchCase.</h2>
    <?php 
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacao = $_POST['operacao'];
        
        switch ($operacao) {
            case 'soma':
                $resultado = $numero1 + $numero2;
                break;
            case 'subtracao':
                $resultado = $numero1 - $numero2;
                break;
            case 'multiplicacao':
                $resultado = $numero1 * $numero2;
                break;
            case 'divisao':
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                } else {
                    $resultado = "Erro: Divisão por zero!";
                }
                break;
            default:
                $resultado = "Erro: Operação inválida!";
        }
        
        echo "Resultado: $resultado";
    ?>
</body>
</html>