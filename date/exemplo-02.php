<?php

$ts = strtotime("2001-09-2011");
echo date("l, d/m/Y", $ts);
echo "<br>";

//strtotime aceita expressões
$ts = strtotime("now");
echo date("l, d/m/Y", $ts);
echo "<br>";

$ts = strtotime("+1 day");
echo date("l, d/m/Y", $ts);
echo "<br>";


$ts = strtotime("+1 week");
echo date("l, d/m/Y", $ts);
echo "<br>";
?>