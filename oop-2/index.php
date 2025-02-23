<?php

require_once "src/Classes/Carro.php";
require_once "src/Classes/Moto.php";
require_once "src/Classes/Veiculo.php";

$carro = new Carro("Toyota", "Corolla", 2022, 4);
$moto = new Moto("Kawasaki", "Z900", 2021, "Esportiva");

echo $carro->ligar();
echo "<br/>";
echo $moto->ligar();