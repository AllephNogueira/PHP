<?php


    // Orientados a objetos
    // Primeiro precisamos criar um molder

    Class Pessoa{

        function falar(){
            echo "Ola, mundo!";
        }
    }

    $alleph = new Pessoa();

    $alleph -> nome = "Alleph2";

    echo $alleph -> nome;

    echo "<br>";

    $alleph -> falar();



?>