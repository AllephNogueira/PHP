<?php

    for ($contador = 0; $contador < 21; $contador++){
        echo $contador."<br>";

        $lista[$contador] = $contador;
    }

    echo "<br> Agora vamos contar quantos numeros tem dentro da lista<br><br>";
    
    echo "Esse é a quantidade de itens dentro da lista: ". count($lista). "<br>";




    for ($contador = 0; $contador < count($lista); $contador++){
        

        if ($lista[$contador] % 2 == 0){

            //print_r ($lista[$contador]);
            echo $lista[$contador];
            echo "<br>";
        }


    }