<?php

    // Usando conversao Cast
    // Aqui vamos obrigar uma variavel a sempre ser oque a gente quer
    // Seja inteiro, string, float....
    


    
    // Agora forçando um valor e testando para ver se é isso mesmo
    // Conversao diretamente para o CAST

    $teste = (string) 123;

    if ($teste === "123"){
        echo "<br>Operador teste é identico a uma string"; // Primeira maneira de teste
    }


    echo "<br> esse é o tipo de dado de teste: ".gettype($teste); // Segunda forma de testar
    echo "<br>";


    // transformando o c sempre para inteiro

    // Duas formas de transformar o numero que esta chegando em float para inteiro


    //$c = (int)  5.3458;
    $c = intval(5.3458);

    echo $c;

    $b = 0.3452;

    $c = intval($c - $b); // Pegando o resultado de $c - $b e transformando em inteiro.
       // $c = intval($c); // transformando $c em inteiro

    echo "<br>". $c;


    echo "<br> o C é: ". gettype($c);

