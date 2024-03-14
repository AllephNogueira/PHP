<?php


    // Criar uma varivavel com numero e outra com string

    $numero = 2;
    $nome = "Alleph";
    $numero2 = (float) 12.00;

    // faça um if checando se é numero


    if (is_int($numero)){
        echo "<br> Sua variavel é um numero ";
        // Caso minha variavel for um numero
        // Faça uma multiplicação por 2 em outra variavel
        $numero2 *= $numero;
        echo $numero2;
    }

    // Criar outro if para checar se o numero é maior que 10

    if($numero2 > 100){
        echo "A sua conta passou de 100$";
    } else {
        echo "<br> Parabens você gastou menos que 100$";
        
        echo "<br> Continue assim, o seu gasto total foi: ". $numero2 = (float)$numero2;
    }

    echo "<br>".gettype($numero2);






?>