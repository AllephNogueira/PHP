<?php

    // Vamos contar ate 10


    $contador = -10;


    while($contador < 10){    // enquanto $contador for menor que 10 FAÇA.
        

        // Aqui estamos fazendo o incremento que pode ser feito de duas maneiras.
        //$contador = $contador +1;


        $contador ++;


        echo " ".$contador;


        
    }


    echo "<br><br>";

        // Agora vamos fazer para contador contar de 2 em 2

        // Vamos contar ate 10


        $contador = 0;


        while($contador < 10){    // enquanto $contador for menor que 10 FAÇA.
            
    
            // Aqui estamos fazendo o incremento que pode ser feito de duas maneiras.
            $contador = $contador +2;
   
    
    
            echo " ".$contador;
    
    
            
        }


        // Agora vamos fazer ele ir descendo ate 0
        echo "<br><br>";
        echo "<br><br>";


        $contador2 = 50; // Aqui ele vai contar de 50 ate 0


        while($contador2 > 0){    // enquanto $contador for maior que 0 FAÇA.
            
    
            // Aqui estamos fazendo o decremento
            $contador2--;
   
    
    
            echo " ".$contador2;
    
    
            
        }



        // Agora vamos fazer ele ir descendo de 50 a 0 aparecendo apenas os numeros impares
        echo "<br><br>";
        echo "<br><br>";


        $contador2 = 50; // Aqui ele vai contar de 50 ate 0


        while($contador2 > 0){    // enquanto $contador for maior que 0 FAÇA.
            
    
            // Aqui estamos fazendo o decremento
            $contador2--;

            if ($contador2 % 2 == 0){
                echo " PAR = ".$contador2 ."<br>";


            }

            echo "<br>";

            
            if ($contador2 % 2 != 0){ // Se o resto da divisao for diferente de 0 ele aparece
                // Nesse caso aqui estamos exibindo os numeros impares.

                echo " IMPAR = ".$contador2 ."<br>";
            }
   

    

    
    
            
        }