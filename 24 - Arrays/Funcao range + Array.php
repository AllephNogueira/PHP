<?php


    $meuArr = range(10, 45);



    for($c = 0; $c < count($meuArr); $c++){

        $soma = $meuArr[$c] + 6;



        if($soma > 30){
            echo "Os numeros utrapassaram o limite de 30\n";
        }else{

            echo $soma. " - ";

        }

    }