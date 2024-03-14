<?php

    // sintaxe do for

    // Aqui estamos contando de 10 ate 0

    // Primeiro é o contador ;
    // depois condição ;
    // Incremento ou decremento ;
    for ($contador=10; $contador >0; $contador-- ){
        echo $contador. "<br>";
        
    }
    echo "Outra parte do codigo";
    // aqui estamos contando de 0 ate 30

    for ($contador=0; $contador <30; $contador ++){

        if ($contador == 22){ // quando contador for igual a 22 vamos dar os parabens
            echo "Parabens ";
        }

        if ($contador == 25){ // quando contador for igual a 25 vamos parar o codigo
            break;
        }
        echo $contador."<br>";

    }