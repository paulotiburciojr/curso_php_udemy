<?php
// Função date() não é sensível ao setLocale()
echo date("d/m/Y H:i:s", 0);
echo "<br>";
echo time();


?>