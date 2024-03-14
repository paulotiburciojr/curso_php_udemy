<?php
// Novas regras no PHP 7
// - determianr o ntipo de dado e sua extensão
// - Determinar o tipo de retorno
//Utiliar reticências na passagem de parâmetros  para designar vários parâmetros

//tipo de retorno
function soma(int ... $valores):float{
    return array_sum($valores);
}

echo var_dump(soma(2,2));
echo "<br>";
echo soma(25,33);
echo "<br>";
echo soma(1.5, 3.2);
echo "<br>";
echo soma(1,2,3,4,5,6);

?>