<?php

abstract class FormaDePagamento
{
    public float $valor;
    public string $status;

    public function __construct(float $valor)
    {
        $this->valor = $valor;
        $this->status = "Pendente";
    }

    abstract public function pagar();

    public function cancelar(): string
    {
        $this->status = "Cancelado";
        return "Pagamento Cancelado";
    }
}