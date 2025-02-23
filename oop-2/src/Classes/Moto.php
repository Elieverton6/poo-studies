<?php

require_once "Veiculo.php";

class Moto extends Veiculo
{
    public string $tipo;

    public function __construct(string $marca, string $modelo, int $ano, string $tipo)
    {
        parent::__construct($marca, $modelo, $ano);
        $this->tipo = $tipo;
    }

    public function ligar(): string
    {
        return "A moto foi ligada. Hora de acelerar!";
    }
}