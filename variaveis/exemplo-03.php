<?php
    //Tipos basicos
    $nome = "hcode";
    $site = 'www.hcode.com.br';
    $ano = 1990;
    $salario = 5500.99;
    $bloqueado = false;

    // Tipos compostos
    $frutas = array("abacaxi", "laranja", "manga");
    echo $frutas[2];

    $nascimento = new DateTime();
    echo "<br>";
    var_dump($nascimento);

    echo "<br>";

    //Tipos especiais
    //resource
    $arquivo = fopen("exemplo-01.php", "r");
    var_dump($arquivo);
    echo "<br>";

    //null
    $nulo = NULL;


?>