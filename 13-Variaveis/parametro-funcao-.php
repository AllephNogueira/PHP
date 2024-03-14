<?php

    // parametros para funcao
    
    function calculo($a,$b,$c){

        echo "Calculo a+b*c: $a+$b*$c = ";
        echo $a+$b*$c;
        echo "<br>";




    }

    // Passando valor eu digitando por variaveis.


    $valor1 = 10;
    $valor2 = 15;
    $valor3 = 35;


    calculo($valor1, $valor2, $valor3);

    // passando o valor para a funcao eu digitando os numeros



    calculo(50,20,80);
    calculo(5,280,80);


?>