<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
    // 0x = hexadecimal 0b = binario 0 = octal
    // $num = 300;
    // echo "O valor da variável é $num";
    // var_dump($num)

    // coerção - força a ser do tipo q eu quero 

    $nume = (string) 300;
    echo "O valor da variável é $nume";
    var_dump($nume)

    ?>
</body>
</html>