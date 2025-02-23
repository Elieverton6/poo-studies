<?php

require_once "src/Classes/Carro.php";

$carro = new Carro("Toyota", "Corolla", 2022);

echo $carro->exibirDetalhes();