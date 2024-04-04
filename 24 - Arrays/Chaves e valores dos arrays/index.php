<?php

    $arr = [
        'marca' => 'Citroen',
        'modelo' => 'C4 Lounge',
        'cambio' => 'Automatico',
        'km' => '192.800',
        'teto_solar' => false
    ];


    // Pegando as chaves do array associativo

    $chaves = array_keys($arr);
    echo implode(' - ', $chaves);
    print_r($chaves);

    // Pegando todos os valores

    $valores = array_values($arr);
    echo implode(' - ', $valores);
    print_r($valores);
