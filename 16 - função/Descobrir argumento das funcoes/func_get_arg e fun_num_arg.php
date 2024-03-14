<?php


    // FUNC_GET_ARG
    // Aqui descobrimos o numero de entrada de cada indice

    function Calculo($a, $b){

        print_r(func_get_arg(0));  // Descobrindo o argumento 0 = $a

        echo " Indice 0 tem o numero <br>";

        print_r(func_get_arg(1)); // Descobrindo o argumento 1 = $b

        echo " Indice 1 tem o numero <br>";

        // obtendo todos os argumentos de uma só vez


        return $a + $b;
    }

    
    echo Calculo(2,7);

    echo "<br><br><br>=============================<br><br><br> ";


    // FUN_NUM_ARG
    // Aqui descobrimos a quantidade de argumentos da funçao

    function Calculo2($a, $b){

        print_r(func_num_args()); // Numero de argumentos na funcão
        echo " <= numero de argumentos na funçao<br><br>";

        // obtendo todos os argumentos de uma só vez


        return $a + $b;
    }

    echo Calculo2(1,5);

