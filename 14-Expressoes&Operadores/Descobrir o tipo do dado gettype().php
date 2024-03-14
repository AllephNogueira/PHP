<?php


    // montar uma expressao


    $a = "5";
    $b = 10;


    $total = $a * $b;


    echo $total;

    // descobrir o tipo de dado que esta saindo

    echo "<br>";
    echo gettype($total);
    echo "<br>";


    // Segundo exemplo

    echo "______________________________________________<br>";
    $nome = "Alleph";


    echo $nome." é uma ".gettype($nome);

    echo "<br><br><br><br>";
    // Imprimir os tipos de dados
    echo "______________________________________________<br>";

    echo "<br>" . gettype(10);
    echo "<br>" . gettype(10.5);
    echo "<br>" . gettype([]);
    echo "<br>" . gettype("Alleph");

    

    echo "<br> Resto da divisao de: ". 14 % 2 . "<br>";


    // Descobrir se o numero é par ou impar
    
    $numero = 14;

    // entao aqui seria 14 / 2 é 7:
    // e sobra? 0
    // o % serve para pegar o resto que sobrou da divisao
    echo "<br> 14/2 = " . 14 / 2; // aqui vai imprimir o resultado da divisao
    echo "<br> resto da divisao 14/2 = " . 14 % 2 . "<br>";  // aqui vai imprimir o resto da divisao

    if($numero % 2 == 0 ){

        echo "<br> O seu numero é par";

    }else{
        echo "<br> O seu numero é impar";
    }


