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
        <h1>Resultado Em Dolar</h1>
        <p>
            <?php 
                $real = $_REQUEST["din"] ?? 0;
                // esse ?? é pro caso o numero nao vir ele usar o zero de default
                // $dolar = $real/ 6.05;
                // echo "Seus R\$" . number_format($real, 2,"," , ".") . " equivalem a US\$" . number_format($dolar, 2,"," , ".");
             //--------------------------------------------
                $cotação = 6.05;
                $dolar = $real/ $cotação;
                $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                // numfmt é numberformat, o br tem q ser maiusculo
                //formatação de moedas com internacionalização
                echo "Seus " .numfmt_format_currency($padrão, $real,"BRL"). " equivalem a " . numfmt_format_currency($padrão, $dolar, "USD");
                // o numfmt_create talvez esteja desabilitado
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
    
</body>
</html>