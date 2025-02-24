<?php

require_once "FormaDePagamento.php";

class Boleto extends FormaDePagamento
{
    public string $codigoDeBarras;

    public function __construct(float $valor,string $codigoDeBarras)
    {
        parent::__construct($valor);
        $this->codigoDeBarras = $codigoDeBarras;
    }

    public function pagar(): string
    {
        $this->status = "Pago";
        return "Pagamento de {$this->valor} realizado com boleto!";
    }

    public function gerarBoleto(): string
    {
        return "Boleto gerado com sucesso!";
    }
}