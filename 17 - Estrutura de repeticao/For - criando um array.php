<?php

    // Criar um array com numero de 0 ate 10


    for ($c = 0; $c < 10+1; $c++){

        $lista[$c] = $c;
    }

    // também podemos imprimir utilizando o print_R

    print_r($lista);

    echo "<br><br>";


    // Outra maneira de imprimir o array mais organizado.
    echo implode(' - ', $lista);


    