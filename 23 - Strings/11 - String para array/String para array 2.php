<?php
    $lista = "Carro - Navio - Helicóptero - Barco - Jangada";
    print_r(explode(" - ", $lista));
    echo "<br><br><br><br>";

    



    // Agora vamos imprimir essa lista em um LOOP

    $listaArr = explode(" - ", $lista);

    foreach($listaArr as $item){
        echo "Item da minha lista: $item <br>";
    }