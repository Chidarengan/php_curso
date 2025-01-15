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

        <pre>
            <!-- da uma arrumada no array -->
            <?php 

                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);
                // coloca um novo cookie, ele guarda as info por uma hora, 3600 sao segundos

                session_start();
                $_SESSION["teste"] = "funcionou!";

                echo "<h1>Superglobal GET</h1>";

                var_dump($_GET);

                echo "<h1>Superglobal POST</h1>";

                var_dump($_POST);

                echo "<h1>Superglobal REQUEST</h1>";

                var_dump($_REQUEST);

                echo "<h1>Superglobal COOKIE</h1>";

                var_dump($_COOKIE);

                echo "<h1>Superglobal SESSION</h1>";

                var_dump($_SESSION);

                echo "<h1>Superglobal ENV</h1>";

                var_dump($_ENV);

                
            ?>

        </pre>

    </main>
    
</body>
</html>