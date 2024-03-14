<?php


    $a = 22; // Inicio a com 22
    $b =& $a; // passo o valor de $A para $B

    echo "$b"; // Imprimir o valor de $B

    // Outro exemplo


    $aniversario = 22;

    $dia =& $aniversario;

    $mes = 03;

    $m =& $mes;

    $ano = 1994;

    $a =& $ano;

    echo "<br> $dia / $m / $a";


?>