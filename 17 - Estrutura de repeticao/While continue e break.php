<?php

    $a = 10;


    while($a > 0){


        if ($a == 7 || $a == 5){ // Sempre que o valor for 3 ou 5 vamos entrar no IF
            echo "Pulou a execução $a <br>";

            $a--; // Aqui vamos decrementar para nao virar um loop infinito
            // No caso aqui quando for 10 9 8 7 6 " 5 " ele vai pular a instrução
            // 4 " 3 " tambem vamos pular a instrução
            
            // o $a-- serve para decrementar, se nao ele vai ficar sempre no 3 e 5.

            continue; // serve para não exibir aquela determinada chamada e pular para a proxima, no meu caso eu to usando para ele nao informar o numero 7 e 5 e pular para o 4
        }

        // Agora uma maneira de terminar com o BREAK

        if ($a == 3){
            // quando a for igual a 3 terminamos o while

            echo "Terminamos o break com o numero $a";
            
            break;
        }


        echo "Contagem: $a <br>"; 

        $a--;
    }