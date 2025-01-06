<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>heredoc e nowdoc</title>
</head>
<body>
    <h1>teste php </h1>

    <?php 
    // heredoc
    $canal = "Curso em Vídeo";
    $ano = date('Y');
    echo <<< "TESTE"
    Ola galerinha do $canal!
    Tudo bem com vocês?
         Como esta sendo esse ano de $ano?
        Abraços! \u{1F596}
    <br>
    TESTE;
    ?>


<?php 
// nowdoc
    $canal = "Curso em Vídeo";
    $ano = date('Y');
    echo <<< 'TESTE'
    Ola galerinha do $canal!
    Tudo bem com vocês?
         Como esta sendo esse ano de $ano?
        Abraços! \u{1F596}

    TESTE;
    ?>


</body>
</html>