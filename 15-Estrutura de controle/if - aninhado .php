<?php

    // if aninhado == um if dentro do outro

    // vamos criar um ir a praia ou nao

    // Para ir a praia, precisamos que
        // Tempo esteja com SOL
        // Dinheiro esteja com POUCO ou Muito
        // Cartao esteja OK


    $tempo = "sol";
    $dinheiro = "MUiTo"; 

    $opcaoDinheiro = strtolower($dinheiro); // Transformar entrada de dados em minusculo para evitar erros.

    $cartao = "ok";

    if ($tempo == "sol"){
        echo "Ok, sabemos que o tempo esta com $tempo <br>";

        if($dinheiro == "pouco" || $opcaoDinheiro == "muito" ){ // Convertendo a forma
            echo "Voce tem $dinheiro dinheiro <br>"; // Aqui esta na forma que o usuario digitou.
            echo $opcaoDinheiro."<br>"; // Como ficou apos a conversao

            if ($cartao == "ok"){
                echo "Seu cartao esta $cartao <br>";
            } else {
                echo "Seu cartao esta $cartao, fique em casa <br>";
            }

        }else{
            echo "Voce tem reserva $dinheiro não podemos ir <br>";
        }

        
    }else{
        echo "O tempo não esta legal. <br>";
    }


    // transformar todas as letras de maisculo para minusculo

