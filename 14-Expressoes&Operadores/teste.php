<?php
// Define o tempo de espera em segundos
$tempoEspera = 1;

// Usa a função header para enviar um cabeçalho de redirecionamento
header("refresh:$tempoEspera;url=teste.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de documento</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Esta página será recarregada a cada <?php echo $tempoEspera; ?> segundos.</h1>



    <h1>Esse é o nosso teste implementando o PHP</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam et sed reiciendis architecto, quisquam magni eveniet, neque explicabo magnam sapiente dolorum at, ducimus ipsam nesciunt laudantium blanditiis voluptate obcaecati officiis.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, repellendus. Rerum distinctio deserunt quibusdam consectetur officiis nam reiciendis, nobis odio, maiores sed similique doloremque impedit velit excepturi beatae nemo quaerat?</p>
    
    
    <h1>Suas informações</h1>
    <p class="data_atual">
        <?php
            // Incremento
            $idade = 29;
            $idade++;
            echo $idade." sua idade.<br>";
            // decremento
            $tempoDeVida = 105;
            $tempoDeVida--;
            echo $tempoDeVida." seu tempo de vida. <br> ";
            // Define o fuso horário (opcional)
            date_default_timezone_set('America/Sao_Paulo');
            $dataAtual = date('d / m / y');
            $minutosAtual = date('h: i: s')
            
        
        ?>
    </p>

    <p>O seu tempo de visita no site
    <?php
        // Verifica se a variável de início já foi definida na sessão
        session_start();
        if (!isset($_SESSION['inicio'])) {
            // Se não foi definida, define-a agora
            $_SESSION['inicio'] = time();
        }

        // ... Código da sua página ...

        // Calcula o tempo decorrido desde o início até agora
        $tempo_decorrido = time() - $_SESSION['inicio'];

        // Converte o tempo decorrido em minutos e segundos
        $minutos = floor($tempo_decorrido / 60);
        $segundos = $tempo_decorrido % 60;

        echo "<p>O seu tempo de visita no site: $minutos minutos e $segundos segundos</p>";
        ?>
    </p>



        <h1 class="data_atual">Hoje é dia <?php echo $dataAtual; ?></h1>
        <p class="minuto_atual"><?php echo $minutosAtual; ?></p>
</body>
</html>