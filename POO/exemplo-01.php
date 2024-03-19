<?php
class Pessoa{
    public $nome;
       
        public function falar(){
            return "O meu nome é ".$this->nome;

        }

}
 //Se for o método construtor padrão, não precisa de colocar os parênteses (opcional)
$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();


?>