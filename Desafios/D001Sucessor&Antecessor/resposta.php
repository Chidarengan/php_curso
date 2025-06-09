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
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $n = $_REQUEST["num"] ?? 0;
                // esse ?? é pro caso o numero nao vir ele usar o zero de default
                $a = $n - 1;
                $s = $n + 1;
                echo "O número escolhido foi <em>$n</em>, seu antecessor é <em>$a</em> e seu sucessor é <em>$s</em>"
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
    
</body>
</html>