<?php

    // Relembrando os escopos

    $a = 10; // Global
    $b = 15; // Local

    function testeEscopo (){

        $a = 5;
        $a ++; // Aqui somente a variavel do local vai ser alterada

        global $b; // declarando a variavel global aqui dentro
        $b ++; // incrementando no B, mas ele so vai alterar aqui dentro da funcao

        static $c;
        $c ++;

        echo  strtoupper("Escopo local de A $a" . "<br><br>") ;  // Local
        echo  strtoupper("Trazendo o Global para dentro da função B $b e incrementando" . "<br><br>") ;  // Global
        echo  strtoupper("STATIC DE C $c" . "<br><br>"); // Static

    }


    echo strtoupper("Escopo global de a $a <br>");
    echo strtoupper("Escopo global de b $b <br>");


    echo "============================================<br>";

    testeEscopo();
    testeEscopo();
    testeEscopo();

    echo "============================================<br>";

    echo strtoupper("Escopo global de a $a <br>");
    echo strtoupper("Escopo global de b $b <br>");


    echo "============================================<br>";