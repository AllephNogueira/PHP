<?php

    echo true;
    echo "<br>";
    echo false;
    echo "<br>";

    if(true){
        
        echo "Seu resultado é verdadeiro";
        echo "<br>";
    }



    if(5>2){
        
        echo "Seu resultado é verdadeiro";
        echo "<br>";
    }



    // Checagem se o usuario pode entrar ou não
    // 1 / True = verdadeiro
    // 0, 0.0, null, [] / False = Falso
    $podeEntrar = true;

    if ($podeEntrar) {

        echo "O usuario é bem-vindo";
        echo "<br>";
    }

    // Verificar se é booleano ou não

    if(is_bool($podeEntrar)){
        echo "É um boelano";
        echo "<br>";
    }


    if(is_bool(false)){
        echo "É um boelano";
        echo "<br>";
    }


    if(is_bool(0)){
        echo "É um boelano";
        // o 0 ele considera como um numero apenas e não um false usando dessa forma
        echo "<br>";
    }


    if(0 == false){
        echo "É um boelano";
        // Essa é a maneira correta de verificar se 0 e igual a false
        echo "<br>";
    }


?>