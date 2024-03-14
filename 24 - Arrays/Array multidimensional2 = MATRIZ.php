<?php

    $arr = [   // Criar 3 arrays 
        [1,2,3,4],
        [5,6,7,8],
        [9,10,11,12]
    ];

    echo "O numero total de arrays é ". count($arr). "\n";
    // Imprimir o array com for
    for($contador = 0; $contador < count($arr); $contador++){


        
        // Aqui vamos imprimir o array externo
        echo "Imprimindo o total de arrays ". $contador+1 . " : ";    // o +1 é para ele nao começar com 0 e sim com 1.




        // Imprimindo os arrays de dentro
        for($contador2 = 0; $contador2 < count($arr[$contador]); $contador2++){

            echo $arr[$contador][$contador2]. " - ";     // Aqui estou pegando um loop para iniciar o array e outro para iniciar as colunas.
        }

        echo "\n";

    }
    