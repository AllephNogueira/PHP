<?php

    // vamos criar um array para testa valores

    $arr = [
        "teste",
        123,
        123124.22,
        true,
        [12,40,5,0,6,0,4],
    ];


    print_r($arr);
    echo "<br><br>Verificando o indice 0<br>";
    print_r($arr[0]);




    echo "<br><br><br>Diferenças <br><br><br><br><br><br><br>";

    var_dump($arr);

    // Aqui podemos ver a diferença no indice tambem

    echo "<br><br>Verificando o indice 0<br>";
    var_dump($arr[0]);

    echo "<br><br>Verificando o indice 4<br>";
    var_dump($arr[4]);