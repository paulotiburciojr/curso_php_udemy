<?php

$json = '[{"nome":"João","idade":20},{"nome":"Gláucio","idade":25}]';

$data = json_decode($json,  true); /*true é para vir como array, senão retorna um objeto*/

var_dump($data);

?>