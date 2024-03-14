<?php

    // Operador and = &&
    // Os 2 precisa ser verdadeiro para aceitar


    $numero1 = 10;
    $numero2 = 220;


    if ($numero1 == 10 && $numero2 == 20){


        echo "<br> Operador AND <br>Comando deu certo! 1 ";
    
    }

    // Operador or = ||
    // Se qualquer opcao estiver certa ele aceita.

    if ($numero1 == 10 || $numero2 == 20){


        echo "<br><br> Operador OR <br>Comando deu certo! 2 ";
    
    }

    // Operador not = !
    // Ele retorna sempre ao contrario 
    // Se for verdadeiro e eu colocar not ele retorna falso

    // Falso = not retorna TRUE
    // True = not retorna FALSE

    // Sempre vai retorna ao contrario
    // Sempre vai inverter o resultado 
    // 0 = false
    // 1 = true

    // 0 retorna 1
    // 1 retorna 0

    
    $numero1 = 10;
    $numero2 = 220;

    if (!($numero1 == 10 && $numero2 == 20)){
        // Aqui era para sair um false
        // mas estou usando o NOT entao ele retorna um TRUE


        echo "<br><br> Operador NOT <br>Comando deu certo! 3 ";
    
    }

    

