<?php

    $x = "nome";   // Imprimo nome

    echo "$x <br>";

    $$x = "Alleph"; // Aqui eu digo que nome vai ser minha nova variavel
    // $nome agora é minha variavel e recebe = Alleph

        // Ficando assim     nome = "Alleph"

    echo "$nome"; // Imprimo o resultado de nome

    // Fazendo 3 exemplos aqui



    $a = "carro";


    $$a = "Citroen";


    echo  "<br> $carro";


    // Proximo exemplo



    $b = "familia";

    $$b = "Nogueira";

    echo "<br> $familia";

        // é como se tivesse fazendo isso

            // $familia = "Nogueira";
            // echo "$familia";

    // Proximo exemplo


    $c = "Modelo";
    $$c = "Citroen";
    echo "<br> $Modelo";

    // Mais um exemplo


    $celular = "Samsung";     //$samsung = S21
    $$celular = "S21";        //$ Valor que vai entrar dentro de $Samsung

    echo "<br> $Samsung";     // Imprime o S21


    // Mais um exemplo

    $abc = "i5";
    $$abc = "10ht";

    echo "<br> $i5";



?>