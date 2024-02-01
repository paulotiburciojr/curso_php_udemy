<?php
//precedência de operador
$resultado = (10 + 3) / 2;
echo $resultado;

// operador AND -  &&; operador OR - ||
$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3;
echo "</BR>";

//obs: usar var_dump, porque echo não imprime boobleano
var_dump($resultado);

?>
