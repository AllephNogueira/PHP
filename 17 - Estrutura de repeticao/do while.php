<?php

    // fazer enquanto a condicao nao é alcançada

    $contador = 1;

    do { // fazer enquanto 

        echo $contador. "<br>";

        $contador ++;
    }while ($contador < 10); // nao alcançamos a condição



    // Criando uma contador como funcao do while


    function dowhile($c){

        $c;

        do {

            if ($c == 2 || $c == 4){ // Quando bater esses numeros ele vai incrementar +1
                // Nao quero exibir esses numeros

                $c ++;

                continue;
            }
            echo "Contagem: $c <br>";
            $c ++;

            // agora quero fazer um break para ele parar em um numero

            if ($c == 7 ){
                // Quando chegar no 7 ele vai encerrar o bloco de comando.
                break;
            }
        }while ($c < 10);
    }


    $contador = 1;
    dowhile($contador);