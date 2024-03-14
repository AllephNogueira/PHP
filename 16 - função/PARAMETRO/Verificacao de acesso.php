


<?php


    $idade = 18;
    $acesso = null;


    function verificarAcesso($idade, $acesso){
        echo "Vamos verificar se você pode ter acesso ao filme<br>";

        if ($idade >= 18 && $acesso == 1){
            echo "Você pode entrar para assistir esse filme<br>";
        }else if($idade < 18){
            echo "Erro. <br> Você precisa ser maior de 18 anos <br>";
        }else if($idade >=18 && $acesso == 0){
            echo "Você tem idade, mas não tem permissao";
        }

    }






    verificarAcesso($idade, $acesso);