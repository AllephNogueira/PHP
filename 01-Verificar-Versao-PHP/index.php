<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando PHP com HTML</title>
    <style>
        body{
            color: brown;
        }
    </style>
</head>
<body>

        <html>
        <a href="01-Verificar-Versao-PHP/index.php">02 - Conceitos Basicos</a>
            <a href="02-Conceitos-basicos/index.php">02 - Conceitos Basicos</a>
        </html>
    <?php

        echo "Testando PHP com HTML";

        echo "Meu nome é Alleph Nogueira"; 

        phpinfo(); #Aqui é o comando para verificar a versão do php

    ?>
</body>
</html>