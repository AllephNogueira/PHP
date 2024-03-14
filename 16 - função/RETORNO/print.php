<?php

    print("Usando a funcao ja pronta <br><br><br>");


    // Fazendo minha propria funcao




    function Texto($texto){
        echo $texto;

        // Se quiser colocar o return

        return $texto;

    }

    $texto = "Ola mundo!!! <br><br><br>";

    Texto($texto);

    // Fazendo com return

    $funcaotexto = Texto($texto);

    echo $funcaotexto;

    // Outra forma tambem podemos chamar a funcao direto no return

    echo Texto($texto);
