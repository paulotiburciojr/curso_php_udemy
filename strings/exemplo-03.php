<?php
//troca exatamente a letra exata - maiúscula é diferente de minúscula
$empresa = "Hcode";
$empresa = str_replace("o", "0", $empresa);
echo $empresa;

$empresa = str_replace("e", "3", $empresa);
echo "</br>";
echo $empresa;


?>