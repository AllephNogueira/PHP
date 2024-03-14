<?php

    function Lista($itens){


        return $itens; // Minha variavel que vai acumular meu Array
    }

   
    // Vamos selecionar os itens que vamos por na nossa lista
    $lista = ['Arroz', 'Feijao', 'Batata', 'Frango', 'Carne', 'Peixe'];
    
    // Aqui estamos fazendo 4 coisas
    // 1 Chamando para imprimir na tela com a funcão implode para imprimir um Array
    // 2 Separando por traços os itens da lista
    // 3 Chamando a funçao e passando o parametro para ela.
    // 4 Encerrando a lista com um ponto final (string)

    echo implode(' - ', Lista($lista)) . ".";
