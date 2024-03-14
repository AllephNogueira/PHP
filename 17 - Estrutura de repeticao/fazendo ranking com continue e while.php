<?php 



    $rank = ['Alleph', 'Matheus', 'Gabriel', 'Crixus', 'Fernanda', 'Ingrid', 'Fernando', 'Livia', 'Larissa'];

    $contador = 0;

    while($contador < count($rank)){
        // Passar os dados para dentro de uma variavel

        $rankking = $rank[$contador];

        // Agora eu quero excluir desse rank algumas pessoas

        if ($rankking == "Alleph" || $rankking == "Fernanda" || $rankking == "Ingrid"){
            $excluidos[] = $rankking;

            $contador ++;
            continue;
        }

        echo "$contador - $rankking <br>";
        $contador ++;
    }

    $exclusao = implode(' - ', $excluidos);

    echo "Excluidos $exclusao";
    

