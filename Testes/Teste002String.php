<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste de string </title>
</head>
<body>

    <h1>teste de php2</h1>

    <?php 
        echo "PHP \u{1F418}<br><br>" ;

        echo 'PHP \u{1F418}<br><br><br><br>' ;
    ?> 

    <?php 
    $nome ="Gustavo";
    echo "Olá $nome!<br><br>";
    echo 'Olá $nome!<br><br><br><br>'
    ?>

    <?php 
    $nome = "Gustavo";
    $sobrenome = "Guanabara";
    echo "$nome$sobrenome <br><br> " ;
    echo '$nome$sobrenome <br><br><br><br>' ;
    ?>

    <?php 
    $nome = "Gustavo🔥";
    $sobrenome = 'Guanabara🔥';
    echo "$nome$sobrenome <br><br> " ;
    echo '$nome$sobrenome <br><br><br><br>' ;
    // nesse exemplo era pro segundo fogo nao funcionar mas funcionou, talvez pq eu n to botando o codigo
    ?>

    <?php 
    const ESTADO = "RJ";
    echo "Moro no ESTADO <br><br>";
    echo 'Moro no ESTADO <br><br>';
    echo "Moro no " .ESTADO ;
    ?>

    <?php 
    $pais = "Brasil" ;
    echo " <br><br> Estamos no $pais no ano de " .date('Y'). " é um dia chuvoso <br><br><br><br>";
    ?>

    <?php 
    $nom = "Rodrigo";
    $snom = "Nogueira";
    echo "$nom \"minotauro\" $snom <br><br><br><br>"
    ?>

    <?php 
    $nom = "Rodrigo";
    $snom = "Nogueira";
    echo "$nom \"minotauro\" $snom <br><br><br><br>"
    ?>


</body>
</html>