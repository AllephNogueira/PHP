<?php


    function somar($x, $y){
        $total = $x + $y;
        echo $total. "<br>";
    }


    $numero1 = 10;
    $numero2 = 25;

    somar($numero1, $numero2); // Podemos colocar essas variaveis como parametro
    somar(10, 80);  // Tambem podemos colocar os numeros como parametros

    // Também podemos fazer uma onde o usuario escolhe a operação


    echo "Me diga 2 numeros e vou trazer todos os resultados para ele.";

    function somarTotal ($x, $y){
        echo "<br>";
        echo $x + $y. "Sua operação é +<br>";
        echo $x - $y. "Sua operação é -<br>";
        echo $x * $y. "Sua operação é *<br>";
        echo $x / $y. "Sua operação é /<br>";
    }


    somarTotal(10,80);
