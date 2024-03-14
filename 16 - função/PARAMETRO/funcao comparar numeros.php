<?php

    

    $numero1 = 10;
    $numero2 = 20;

    function compararNumeros1 ($a, $b){

        echo "Teste comparar numeros<br>";

        echo "A soma dos numeros são: ".$a + $b."<br>";

        echo $a > $b ? "O $a é maior": "O $b é maior";

    }


    function compararNumerosIF ($a, $b){

        if($a > $b){
            echo "<br> O numero $a é maior que o numero $b";

        }else if($b > $a){
            echo "<br> O numero $b é maior que o numero $a";

        }else{
            echo "<br> Os numeros são iguais.";
        }
    }

    compararNumeros1($numero1, $numero2);
    compararNumerosIF($numero1, $numero2);


