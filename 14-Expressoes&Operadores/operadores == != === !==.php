<?php



    // Testar os operadores

        // Igualdade

        $a = 10;
        $b = 10;
        $infoTeste = "Igualdade";

        if ($a == $b){

            echo "Passamos no teste de $infoTeste <br>";
            
        }

        // Diferença

        $a = 10;
        $b = 5;
        $infoTeste = "Diferença";

        if ($a != $b){

            echo "Passamos no teste de $infoTeste <br>";
            
        }


        // Identico

        $a = 10;
        $b = 10;
        $infoTeste = "Identico";

        if ($a === $b){

            echo "Passamos no teste de $infoTeste <br>";
            
        }

        // Nao identico

        $a = 10;
        $b = 5;
        $infoTeste = "Nao identico";

        if ($a !== $b){

            echo "Passamos no teste de $infoTeste <br>";
            echo "<br> Aqui eu quero dizer que o numero NÃO pode ser IDENTICO";
            
        }