<?php
    $res = 50 / 2 + 3 ** 2;
    echo "O Resultado é $res<br>";
    $res = 50 / (2 + 3) ** 2;
    echo "O Resultado é $res<br><br>";

// ------- valor absoluto  - retira o sinal de um dado abs()
    echo  ("valores absolutos \n");
    $r = abs(500);
    echo ("A Resposta é $r\n\n");

    $r = abs(-2000);
    echo ("A Resposta é $r\n\n");

// -------- conversor de bases- base_convert() 
    echo  ("conversor de bases \n");
    $r = base_convert(254, 10, 8);
    // ^quero converter 254 da base 10 para base 8
    echo ("A Resposta é $r\n\n");

    $r = base_convert(254, 10, 16);
    echo ("A Resposta é $r\n\n");
    $r = base_convert(254, 10, 2);
    echo ("A Resposta é $r\n\n");

// ------- ceil() , floor(), round()
// ele vai fazer um ex só pra isso
// ceil/ de ceiling, teto, é arredondar pra cima 
//floor/ chao, é arredondar para baixo
// e round (arredondar msm) é para o mais proximo 
    echo ("teste com round()\n\n")
        $r = round((253)/3);
        echo ("A Resposta é $r\n\n");
        
        $r = round((254)/3);
        echo ("A Resposta é $r\n\n");
// hypot() - hipotenusa (diz o tamanho dos 2 catetos pra ele achar a hipotenusa)

//intdiv() é equivalente a divisao inteira (o // do python)

// min() max() mostra o valor minimo e maximo entre uma quantidade de valores

// pi() acha o valor de pi ou M_PI 

// pow() - power - potencia pow(3,2) o primeiro e a potencia. é o mesmo que ** nao tem pq usar. voce perde a ordem de precedencia ao fazer isso mas da pra resolver usando parenteses.

// funções trigonometricas para calcular seno coseno e tangente de um angulo sin(),cos(), tan()

// sqrt() - square root - raiz quadrada 

