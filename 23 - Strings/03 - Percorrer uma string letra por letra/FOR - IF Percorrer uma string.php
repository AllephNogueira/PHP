<?php


    $frase = "O rato roeu a roupa do rei de Roma";
    $totalLetras = 0;
    $BuscarLetra = 'A';

    // Agora vamos iniciar uma contagem para verificar quantas letras A tem nessa frase


    for($contador = 0; $contador < strlen($frase); $contador++){

        if($frase[$contador] == strtolower($BuscarLetra)){
            // Agora vamos acumular a quantidade de letras A

            $totalLetras++;
           
        }
    }

    echo "Quantidade de letras encontradas ". $totalLetras;