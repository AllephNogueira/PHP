<?php

    // Aqui vamos fazer contar de 1 a 60
    // Vamos pular os numeros 10-8-22-27

    $contador = 0;


    while ($contador < 60){ // enquanto contador for menor que 50 execute.


        if ($contador == 8 || $contador == 10 || $contador == 22 || $contador == 27){
            // Aqui estamos dizendo que nao queremos contar com esses numeros a cima.
            echo "Continue, estamos pulando os numeros $contador <br>";


            $contador++;

            continue;
        }


        // Agora vamos fazer um break porque eu quero parar de contar quando chegar no 48

        if ($contador == 48){

            echo "Estamos encerrando o codigo aqui no numero $contador";
            break;
        }
        echo $contador. "<br>";

        $contador++;
    }