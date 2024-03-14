<?php 

    function CalculoPots($pot50, $pot100, $pot500, $pot1000){

       echo "Esse é o total de ap disponivel para seu evento: ". ($total = $pot50 + $pot100 + $pot500 + $pot1000). "<br>";

       $ataque = 32;

       $totalAtaque = $total / $ataque;

       echo "Voce pode fazer o total de ataques ". ($totalAtaque/5). " considerando que voce vai mandar 5 marchas para o campo de batalha." ;

        
    }

    $pot50 = 629*50;
    $pot100 = 306*100;
    $pot500 = 25*500;
    $pot1000 = 1*1000;

    CalculoPots($pot50, $pot100, $pot500, $pot1000);