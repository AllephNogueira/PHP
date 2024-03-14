<?php
    // Operador de identico
    // === 
    // Ele precisa que o dado seja igual
    // O tipo do dado tambem precisa ser igual



    $a = 10; // inteiro
    $b = 10; // inteiro
    $c = "10"; // string
    $senhaServidor = "G@memastter1";
    $senhaUsuario = "G@memastter1";


    // criar dois if
    // um retorna verdadeiro
    // o segundo retorna falso


    if ($a === $b){ // True

        echo "Resposta correta <br>";
    }


    if ($a === $c){ // False

        echo "Resposta correta 2 <br>";
    }

    // Testar a senha com o a letra minuscula

    if ($senhaServidor === $senhaUsuario){
        // Observação tanto no == como no === ele deve ter letras iguais, como Maiuscula e minuscula para ele validar.
        
        echo "Dados correto <br>";
    }