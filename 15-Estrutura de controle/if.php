<?php

    $dia = "sol";
    $conta = 100;


    // Se estiver sol e eu tiver com + de 50 reais vou a praia


    // operador AND &&

    if ($dia == "sol" && $conta >= 50){

        echo "Voce pode curtir sua praia<br>";

    }else{
        echo "Fique em casa e estude mais.<br>";
    }


    // Avaliando compra de celular voce pode comprar se acontecer qualquer opcao
    // Celular quebrado, celular roubado, cartao de credito disponivel

    // Operador OR ||


    $celularQuebrado = false;
    $celularRoubado = false;
    $creditoDisponivel = true;

    if ($celularQuebrado == 0 || $celularRoubado == 0 || $creditoDisponivel == 1){
        echo "Voce pode comprar seu novo celular <br>";
    }else{
        echo "Espere para comprar mais tarde.<br>";
    }

    // Operador not
    // Pegando pessoas manipuladoras que gosta de mudar a a verdade

    $pessoa = true;

    if (!($pessoa == 0)) {
        echo "Aqui ele pega o falso e inverte para verdadeiro<br>
        no caso ele esta pegando o 0 e invertendo para 1";
    }
