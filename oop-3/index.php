<?php

require_once "src/Classes/Boleto.php";
require_once "src/Classes/CartaoDeCredito.php";
require_once "src/Classes/Pagamento.php";

$boleto = new Boleto(10.20, "1234 5678 0987 6543");
$cartao = new CartaoDeCredito(15.50, "12345678901234567890");

$pagamento = new Pagamento;

echo $pagamento->processarPagamento($cartao);
echo "<br/>";
echo $pagamento->processarPagamento($boleto);