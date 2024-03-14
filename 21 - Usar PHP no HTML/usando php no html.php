<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando PHP no HTML</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 

    include_once "backend.php" // incluindo UMA vez os dados do servidor.
    
    ?>

    <h1><?= $titulo ?></h1>
    <p>Obrigado por acessar o meu site - <?= $nome ?> hoje é dia <?= $dia ?></p>
    
    <p>Precisamos comprar esses produtos: <?= $produtosArr ?></p>

    <!-- Fazendo uma lista com os produtos -->

    <ul>
        <?php foreach ($produtos as $lista): ?>   <!-- Lembrar de inciar o foreach -->


                <li> <?= $lista; ?></li>     <!-- Iniciando uma lista com os produtos -->


        <?php endforeach; ?>    <!-- Lembrar de encerrar o foreach -->
    </ul>              
    
    
</body>
</html>