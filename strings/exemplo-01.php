<?php

// aspas duas: interpola a variável e coloca o conteúdo da variável
// aspas simples: concatena o nome da variável
$nome = "Hcode";
$nome2 = 'Treinamentos';


var_dump($nome);
echo "</BR>";
var_dump($nome2);

echo "</BR>";

//aparece o conteúdo da variável (interpolação de variáveis)
echo "ABC $nome";

echo "</BR>";

//aparece o nome da variável
echo 'ABC $nome';

echo "</BR>";

//aparece o conteúdo da variável (interpolação de variáveis)
echo "ABC $nome2";

echo "</BR>";

//aparece o nome da variável
echo 'ABC $nome2';


$nome = "Hcode $nome2";
echo "</BR>";

//aparece o nome da variável
echo $nome;

$nome = 'Hcode $nome2';
echo "</BR>";

//aparece o nome da variável
echo $nome;
?>