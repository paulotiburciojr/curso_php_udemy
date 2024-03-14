<?php
// referÊncia serve para outros escopos também, como um bloco foreach
$pessoa = array(
    'nome' => 'João',
    'idade' => 20
);

foreach($pessoa as &$value){
    if (gettype($value) === 'integer'){
        $value+=10;
    }
    echo $value."<BR>";
}
print_r($pessoa);


?>