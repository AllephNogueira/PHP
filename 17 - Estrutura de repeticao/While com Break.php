<?php

    function Contador(){
        $contador = 0;

        while($contador < 10){ // Enquanto for menor que 10 faça a contagem
            echo "Contagem: ".$contador++ . "<br>";

            if ($contador == 5){
                echo "Contagem IF: $contador"; // Vamos imprimir esse codigo quando ele for igual a 5
                break; // Aqui vamos parar o programa quando ele for igual a 5
            }

            

        }

        echo "<br>Saimos do loop";
    }


    function ContagemAte30($c, $l){
        $contador = 0;

        while ($contador < $c){
            echo "<br>Contagem ". $contador +=2;

            if ($contador === $l){
                echo "<br>Sua contagem terminou em $contador";
                break;
            }
        }
    }

    $contador = 100;
    $limite = 26;

    ContagemAte30($contador,$limite);