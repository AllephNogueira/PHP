<?php

    $lista = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

    $novaLista = implode(' - ' ,$lista); // Aqui estamos pegando e passando para uma variavel

    echo "<br>";

    echo $novaLista;


    echo "<br><br> Contando quantos itens tem dentro da lista: ". count($lista)."<br>";



    for ($contador =0; $contador < count($lista)+1; $contador++){ 
        // Aqui estou colocando o contador < count$Lista=20
        if ($contador % 2 == 0){
            echo "<br>".$contador;
        }
    }