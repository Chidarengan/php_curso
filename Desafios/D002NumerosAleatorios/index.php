<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio 2 numeros aleatorios</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <main>
    
    
        <h1>Trabalhando com Números aleatorios</h1>
        <p>Gerando um número aleatorio entre 0 e 100.</p>
        <p>O valor gerado foi:</p>
        <?php
        $nrand = rand(0, 100);
        //rand() usa uma função bem antiga de 1951  chamada Linear Congretial Generator. minimo obviamente tem q ser maior q o maximo. tem o mt_rand q é mais moderno e recomendado
        // tbm tem o random_int() que gera numeros aleatorios criptograficamente seguros, mas é um algoritmo muito lento
        echo("O numero aleatório é <strong>$nrand</strong><br>");
        $arand = $nrand - 1;
        $srand = $nrand + 1;
        $unirrand = $srand + $arand;
        $finalrand = $unirrand + $nrand; 


        echo("seu Antecessor é  <strong>$arand</strong><br>");

        echo("seu Sucessor é  <strong>$srand</strong><br>");

        echo("A soma desses dois valores é<strong> $unirrand</strong><br>");

        echo("Somamos esse novo valor ao numero aleatorio para obter <strong> $finalrand</strong>");

        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar Outro</button>
    </main>
    
</body>
</html>
