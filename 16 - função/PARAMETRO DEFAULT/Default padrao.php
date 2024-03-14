<?php

    // Parametro default é sempre quando deixamos algo definido nele por padrao

    // Caso a gente nao passe um padrao para ele, ele sempre vai usar o padrao pre definido.


    // Criando um funcao calculo

    function Calculo ($x = 10, $b = 20){
        return $x + $b;
    }



    echo "<br>  Numeros default = padrao : " .Calculo(); // Nesse caso aqui vou utilizar o padrao
    echo "<br>  Numeros definidos : " .Calculo(22,50); // Também posso utilizar os numeros que eu quiser.




    function Calculo2 ($a,$b = 10){ // Assim eu sou obrigado a preencher o primeiro
        return $a + $b;
    }

    echo "<br>". Calculo2(10); // Aqui eu sou obrigado a preencher o primeiro