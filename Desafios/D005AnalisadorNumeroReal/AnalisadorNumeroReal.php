


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <main>
        <?php
        // Verifica se o valor 'num' foi enviado via GET
        if (isset($_GET['num'])) {
            // Recebe o número enviado pelo formulário
            $numero = $_GET['num'];
        
            // Separa a parte inteira e a parte fracionária
            $parteInteira = floor($numero); // A parte inteira é o valor sem a parte decimal. o floor arredonda o numero pra baixo
            $parteFracionaria = $numero - $parteInteira; // A parte fracionária é a diferença entre o número e a parte inteira
        
            // Exibe os resultados
            echo "<h1>Resultado</h1>";
            echo "<p>O número digitado foi: <strong>{$numero}</strong></p>";
            echo "<p>A parte inteira é: <strong>{$parteInteira}</strong></p>";
            echo "<p>A parte fracionária é: <strong>" . number_format($parteFracionaria, 6) . "</strong></p>"; // Exibe a parte fracionária com 6 casas decimais
        } else {
            echo "<p>Por favor, digite um número no formulário.</p>";
        }
        ?>
    </main>
    
</body>
</html>