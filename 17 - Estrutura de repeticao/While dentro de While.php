<?php


    function contagem ($cont){

        $contagem1 = 0;
        $contagem2 = 0;
        $cont;

        while ($contagem1 < $cont){


            while ($contagem2 < $cont){
                echo "Loop interno: ". $contagem2++;
                echo "<br>";

                if ($contagem2 == $cont){

                    echo "<br>Loop interno ENCERRADO.<br><br>";
                    echo "==============================<br>";
                    echo "<br>Loop externo INICIADO.<br><br>";

                }
    
            }

            // iniciar lop externo



            echo "Loop externo: ". $contagem1++;
            echo "<br>";
        }
    }


    $contador = 10;   // Aqui vamos definir o valor maximo da contagem.
    contagem($contador);