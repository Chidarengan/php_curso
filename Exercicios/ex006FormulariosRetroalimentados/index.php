<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <?php 
    // Capturandoos dados doFormulário Retroalimentado
    $valor1 = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <!-- acima é uma simplificaçao do echo, php self faz ele se retroalimentar -->
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section>
        <h2>Resultado da Soma</h2>
        <?php 
        $soma = $valor1 + $valor2;
        echo "<p>a soma dentre $valor1 e $valor2 é igual a $soma</p>";
        ?>
        <!-- estando no mesmo documento ele consegue puxar o valor 1 la em cima -->
    </section>
</body>
</html>
