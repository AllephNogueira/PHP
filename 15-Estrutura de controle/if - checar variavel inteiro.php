<?php 

    // Criar todos os tipos de varivel e testar se é inteiro


    $String = "Alleph";
    $Inteiro = 1994;
    $Boleano = 1;

    $msgInteiro = "Essa variavel é inteiro<br>";
    $msgFalso = "Essa variavel não é inteiro<br>";




    if (is_int($String) == 1){
        echo $msgInteiro;
    }
    else{
        echo $msgFalso;
    }



    if (is_int($Inteiro) == 1){
        echo $msgInteiro;
    }
    else{
        echo $msgFalso;
    }

    

    if (is_int($Boleano) == 1){
        echo $msgInteiro;
    }
    else{
        echo $msgFalso;
    }






    echo gettype($String); // Verificar qual o tipo de dado
    echo is_int($Inteiro); // Verificar se é inteiro