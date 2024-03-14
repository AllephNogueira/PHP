<?php



    include_once "teste.php"; // Aqui serve para a gente incluir apenas uma vez
    // Dessa forma podemos evitar o loop infinito

    require_once "teste.php"; // Aqui serve para a gente incluir apenas uma vez
    // Dessa forma podemos evitar o loop infinito

    // include_once __DIR__ "/../teste.php"; # esse comando serve para se no caso quiser voltar e pegar uma pasta que esta antes