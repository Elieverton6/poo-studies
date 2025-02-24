<?php

require_once "FormaDePagamento.php";

class CartaoDeCredito extends FormaDePagamento
{
    public string $numeroDoCartao;

    public function __construct(float $valor,string $numeroDoCartao)
    {
        parent::__construct($valor);
        $this->numeroDoCartao = $numeroDoCartao;
    }

    public function pagar(): string
    {
        $this->status = "Pago";
        return "Pagamento de R$ {$this->valor} realizado com cartão de crédito!";
    }

    public function validarCartao(): string
    {
        return "Cartão validado com sucesso!";
    }
}