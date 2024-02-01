<?php
    $nomeA = (int) $_GET["a"];
    $nomeB = $_GET["b"];
    var_dump($nomeA);
    echo "<BR/>";
    var_dump($nomeB);
    $ipNum = $_SERVER["REMOTE_ADDR"];
    echo "<BR/>";
    var_dump($ipNum);
    echo "<BR/>";
    $scriptName = $_SERVER["SCRIPT_NAME"];
    var_dump($scriptName);

?>