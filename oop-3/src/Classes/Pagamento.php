<?php

require_once "FormaDePagamento.php";

class Pagamento
{
    public function processarPagamento(FormaDePagamento $formaDePagamento): string 
    {
        return $formaDePagamento->pagar();
    }
}