<?php

    // Operadores de atribuiçao
    // +=
    // -=
    // /=
    // *=
    // %=


    $numero1 = 10;
    $numero2 = 15;
    $total = 2;


    // Aqui estou multiplicando o valor de numero1 * 2

    // total * numero1
    // total = 2 * numero1 = 10

    // numero1 passa para dentro de total e multiplica

    $total *= $numero1;

    echo $total." *  <br>";

    // Outras operações em baixo

    $total = 2;
    
    $total += $numero1;

    echo $total." + <br>";

    $total = 2;

    $total -= $numero1;

    echo $total." - <br>";

    $total = 2;

    $total /= $numero1;

    echo $total." / <br>";

    $total = 2;

    $total %= $numero1;

    echo $total." % <br>";


    // A forma correta aqui seria asssim

    // $total = $total + numero1 = 12

    // e para digitar sera assim

    // $total += numero1 = 12