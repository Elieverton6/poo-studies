<?php

require_once "Veiculo.php";

class Carro extends Veiculo
{
    public int $portas;

    public function __construct(string $marca, string $modelo, int $ano,int $portas)
    {
        parent::__construct($marca, $modelo, $ano); 
        $this->portas = $portas;
    }

    public function ligar(): string
    {
        return "O carro foi ligado. Vamos dar uma volta!";
    }
}