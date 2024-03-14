<?php
// Novas regras no PHP 7
// - determianr o ntipo de dado e sua extensão
// - Determinar o tipo de retorno
//Utiliar reticências na passagem de parâmetros  para designar vários parâmetros


//declaração de tipos escalares
function soma(int ... $valores){
    return array_sum($valores);
}

echo soma(2,2);
echo "<br>";
echo soma(25,33);
echo "<br>";
// vai converter para inteiro
echo soma(1.5, 3.2);
echo "<br>";
echo soma(1,2,3,4,5,6);

?>