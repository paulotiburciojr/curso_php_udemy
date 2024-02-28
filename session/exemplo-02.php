<?php
//session_start();
require_once("config.php");

//session_unset($_SESSION['nome']);

//OBS: no curso, a função session_unset foi utilizada para matar todas as variávies de sessão
// e também uma variável esepcífica. Mas parece que nas versões atuais, session_unset não funciona com 
//parÂmetro representando uma variável. Para isso, utilizamos a função unset($_SESSION[<nome variável])

//session_unset();
unset($_SESSION['nome']);

echo $_SESSION["nome"];
echo "<br>";
echo $_SESSION['idade'];

/*limpa a variável e destrói o usuário*/
session_destroy();
?>