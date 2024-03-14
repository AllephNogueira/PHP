<?php

    $encontrar = "ip"; // Palavra que queremos encontrar

    $string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa assumenda laborum enim nemo eaque tenetur veritatis autem temporibus fugiat minus, impedit totam doloribus incidunt possimus eligendi minima. Natus, velit perspiciatis.";
    

    $resto = strstr($string, "resto");
    $resto = strstr($string, $encontrar); // Aqui podemos passar duas formas de localizar a palavra

    echo $resto;