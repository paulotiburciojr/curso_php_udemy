<?php

//Argumentos obrigatórios sempres vêm primeiro à esquerda - boas práticas
function ola($texto = "Mundo", $periodo = "Bom dia"){
    return "Olá $texto! $periodo<BR>";

}

echo ola(); //Assume o valor default definido na assinatura da função.
echo ola("", "Boa noite");
echo ola("Gláucio", "Boa tarde");
echo ola("João","");
?>