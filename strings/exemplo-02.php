<?php
$nome = "joão rangel da graça";
echo $nome;

echo "</br>";

echo strtoupper($nome);
//obs: Não converte o a com til e outros acentos e cedilha

echo "</br>";
$nome = "PAULO";
echo strtolower($nome);

echo "</br>";
$nome = "paulo pereira";
//converte a primeira letra de cada palavra
echo ucwords($nome);


echo "</br>";
$nome = "paulo pereira";
//converte a primeira letra da primeira palavra
echo ucfirst($nome);
?>