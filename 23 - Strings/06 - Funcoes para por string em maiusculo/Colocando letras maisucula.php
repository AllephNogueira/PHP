<?php


    // transformar o texto dessa forma
        // Este item esta em PROMOÇAO

    $frase = ucfirst('este item esta em'); // Colocar a primeira letra em Maiusculo
    $detalhe = strtoupper('promoçao'); // Colocar promocao tudo em maiusuculo

    // Agora vamos imprimir a frase com concatenação

    echo $frase . $detalhe; // Formula 1

    echo "<br>";

    echo ucfirst($frase) . strtoupper($detalhe); // Formula 2