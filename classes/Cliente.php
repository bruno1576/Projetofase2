<?php



class Cliente{
    public $id;
    public $Nome;
    public $idade;
    public $sexo;
    public $cpf;
    public $endereco;
    public $telefone;

    public function __construct ($id,$Nome,$idade,$sexo,$cpf,$endereco,$telefone){
        $this->id=$id;
        $this->Nome=$Nome;
     $this->idade=$idade;
     $this->sexo=$sexo;
     $this->cpf=$cpf;
     $this->endereco=$endereco;
     $this->telefone=$telefone;

    }

    
   
}





?>

