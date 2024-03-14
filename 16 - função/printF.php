<?php


    $nome = "Alleph";
    $dataNascimento = 22;


    // %s = string

    printf("Seja bem vindo %s", $nome); // Aqui ele entende que vai sair um string

    // %d = int

    $ano = 2024;
    $mes = 03;
    // Onde esta o %d é onde vai ser impresso o numero da variavel

    printf("<br> Hoje estamos no mes %d, do ano %d" , $mes, $ano);


    // %f = isso usamos para float

    printf("<br> Hoje estamos no mes %f, do ano %.2f" , $mes, $ano); // Aqui colocamos o %.2f para dizer que vai ter apenas 2 casas.