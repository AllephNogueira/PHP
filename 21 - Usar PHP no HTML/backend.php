<?php 

$titulo = "Bem vindo a minha pagina dinamica";   // Mensagem de boas vindas
$nome = "Alleph";   // Nome do usuario que esta acessando
$dia = date('d');    // Data que estamos acessando.
$produtos = ['Arroz', 'Feijao', 'Carne', 'Frango', 'Leite', 'Macarrao'];

$produtosArr = implode(' - ', $produtos);

?>