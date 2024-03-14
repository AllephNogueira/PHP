<?php

    $nome = "Alleph";


    for ($contador = 0; $contador < strlen($nome); $contador++){


        echo "<br>$contador º ". $nome[$contador]; // Aqui estamos percorrendo cada letra

        // Puxando as vogais

        if ($nome[$contador] == 'A' ||$nome[$contador] == 'e' ||$nome[$contador] == 'i' ||$nome[$contador] == 'o' || $nome[$contador] == 'u'){
            echo "  Achamos a primeira vogal $nome[$contador]";
        }
    }