<?php

    // Operador OR


    $senhaUsuario = "1234";
    $senhaServidor = "1234";
    $loginUsuario = "allephn";
    $loginServidor = "alleph";


    // Nesse caso aqui o usuario acertou apenas a senha e errou o login.

    if ($senhaUsuario == $senhaServidor || $loginUsuario == $loginServidor){
        echo "Voce acertou apenas alguma das duas opcoes";
    }
