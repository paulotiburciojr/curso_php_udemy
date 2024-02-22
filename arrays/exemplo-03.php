<?php

$pessoas = array();
array_push($pessoas, array(
    'nome'=>'João',
    'idade'=>20
));

array_push($pessoas, array(
    'nome'=>'Gláucio',
    'idade'=>25
));

print_r($pessoas);
$pessoa = $pessoas[0];
echo "<br>";
/* Aceita arrays com índices não numéricos"*/
echo $pessoa['nome'];

?>