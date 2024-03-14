<?php

    echo "Variavel static";


    function teste(){

        $a = 0;
        $a++;

        echo "$a <br>";

    }


    teste();
    teste();
    teste();
    teste();


    function testeStatic(){

        static $a = 0; // o static o valor sempre aumenta quando é chamado
        $a++;

        echo "$a <br>";

    }

    testeStatic();
    testeStatic();
    testeStatic();

?>