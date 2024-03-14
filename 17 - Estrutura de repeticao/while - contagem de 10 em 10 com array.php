<?php 

    // Precisamos criar um while que conta de 10 em 10
    
    // Depois vamos retirar desses valores os numeros 30 e 70
    // e vamos prosseguir com a lista.


    $contador = 0;
    $lista = []; // Lista esta vazia

    while ($contador < 110){ // Contar de 1 ate 100

        
        // Lista recebe de 10 em 10
        $contagem = $lista[] = $contador; // Pegando os valores que estao dentro da lista e passando para a variavel $Contagem


        

        if ($contagem == 30 || $contagem == 40){
        // Agora vamos excluir esses valores da nossa contagem
            $contador +=10; // incrementar de 10 em 10
            continue; // comando para excluir esses numeros e continuar.
        }

        echo $contagem . "<br>"; // Imprimindo os numeros que esta dentro da Lista[]
        $contador +=10; // Atribuição de 10 em 10.



    }