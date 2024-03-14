<?php

    // criar uma funcao que recebe um array de numeros


    $arr = [];

    for ($contador = 7; $contador < 30; $contador++){
        array_push($arr, $contador);
        
    }

    echo implode(' - ', $arr);

    echo "<br><br><br><br><br><br>";

    // Agora vamos criar uma função que recebe esse Array

    function NovoArray ($x){ // Aqui vamos dizer de qual numero devemos começar a contagem

        $newArray = [];   // Minha lista de Array vazia
        $Arr7 = []; // Minha lista de Array vazia

        for ($contador = $x; $contador < 30; $contador++){ // Parametro do usuario

            array_push($newArray, $contador);  // Inserir o numero que o usuario quer ate 30

            if ($contador > 7){ // Se for maior que 7 colocamos nesse Array

                array_push($Arr7 , $contador); // Adicionando o incide dentro do Array
                

            }

        }

        return implode(' - ', $Arr7); // Retornando para a funcao o Arr > 7

    }


    echo NovoArray(25);


