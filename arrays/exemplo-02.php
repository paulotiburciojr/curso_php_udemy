<?php

$carros [0][0] = "GM";
$carros [0][1] = "Cobalt";
$carros [0][2] = "Onix";
$carros [0][3] = "Camaro";
$carros [1][0] = "Ford";
$carros [1][1] = "Fiesta";
$carros [1][2] = "Fusion";
$carros [1][3] = "Eco Sport";

echo $carros[0][3];
echo "<br>";
/* Obs: o end só aceita como parâmetro um array unidimensional - verificar*/
echo end($carros[0]);




$carros1 [0][0][0] = "GM";
$carros1 [0][0][1] = "Cobalt";
$carros1 [0][1][0] = "Onix";
$carros1 [0][1][1] = "Camaro";
$carros1 [1][0][0] = "Ford";
$carros1 [1][0][1] = "Fiesta";
$carros1 [1][1][0] = "Fusion";
$carros1 [1][1][1] = "Eco Sport";

echo "<br>";
/* no exemplo abaixo ele pega a posição 0 */
print_r(end($carros1));


?>