<?php

    // Variavel Local / Global
    // Variavel global



    // Global


    $nome = "Alleph";


    echo "$nome <br>";



    // Local

    function dados(){

        $nome = "Nogueira";
        
        $idade = 29;

        echo "$nome $idade";

        // chamando uma variavel la de fora aqui para dentro

        global $nome;

        echo "<br><br>$nome informacao global";
    }

    dados()



?>