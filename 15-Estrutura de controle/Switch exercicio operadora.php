<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recarga TIM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Recarga TIM</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam perferendis dignissimos porro sapiente ullam blanditiis voluptatem veniam repellat corrupti quis. Quis rem accusamus fugit natus totam dolore pariatur? Nihil, quae.</p>
        <h2>Digite o valor da sua Recarga <input type="text"></h2>
    </header>
    

    <?php


    $valor = 10;
    $opcao = 1;
    $saldo = $valor;



    switch ($valor){
        case 10:
            echo "Voce deseja recarregar 10$";
                if ($opcao == 1){
                    echo "<br>Seu saldo é $saldo$ ";


                }
                break;
        case 20: 
            echo "Voce deseja recarregar 20$";
            break;
        case 30: 
            echo "Voce deseja recarregar 30$";
            break;
        default:
            echo "Opcão não encontrada, tente novamente.";



    }



    ?>

    
    
</body>
</html>