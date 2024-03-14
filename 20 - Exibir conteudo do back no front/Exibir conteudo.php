<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir uma variavel</title>
</head>
<body>

<?php

$nome = "Alleph";

$sobrenome = "Nogueira";


?>


    <h1>Aqui vamos exibir um botao com uma variavel</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem deserunt rerum illum beatae ut nihil maxime soluta consectetur, sit blanditiis unde recusandae repellendus laudantium illo natus praesentium officia in a.</p>


    <form action="">                            <!--  Abertura de um formulario   -->
        <div>
            <h2>Digite o seu ID</h2>
            <input type="text" value="<?php echo $nome ?>">  <!--  Entrada de dados vai ser texto   -->
        </div>

        <div>
            <h2>Digite sua senha</h2>
            <input type="text" value="<?php echo $sobrenome ?>">  <!--  Entrada de dados vai ser texto   -->
        </div>

        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>                                      <!-- Fechar formulario   -->






    
</body>
</html>


