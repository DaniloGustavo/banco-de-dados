<?php
$nome = filter_input(INPUT_POST,"nome");
$email = filter_input(INPUT_POST,"email");
$salarioFixo = filter_input(INPUT_POST,"SalarioFixo");

$dados = array($nome, $email, $salarioFixo);


include("Vendedor.php");
$vend = new Cliente();
$vend->cadastrar($dados);
?>