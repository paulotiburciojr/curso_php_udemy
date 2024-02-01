<?php
$frase = "A repetição é a mãe da retenção";
$palavra = "mãe";

$q = strpos($frase, "mãe");
//retorna a posição da string:
var_dump($q);

echo "</br>";

$texto = substr($frase, 0, 19);

echo $texto;

$texto2 = substr($frase, $q+strlen($palavra), strlen($frase));
echo "</br>";
echo $texto2;
?>