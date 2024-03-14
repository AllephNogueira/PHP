<?php

    function Calculo($x){

        if (is_int($x)){ // Verifcando se o numero é um inteiro



            if ($x % 2 == 0){
                echo "O seu numero é par $x<br>";
            }else if ($x % 2 != 0){    // fazendo a formula para impar.
                echo "O seu numero é impar $x <br>";
            }


        }
        else{ // Se o nao for um numero vamos gerar uma mensagem de erro
            echo "ERRO: Favor digitar apenas numeros";
        }
    }


    $numero = "a"; // numero que vamos verificar

    Calculo ($numero);
