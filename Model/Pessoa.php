<?php

class Pessoa{
    private $nome;
    private $dataNascimento;
    private $cpf;
    private $idPedido = array();

    public function __construct($nome, $cpf, $dataNascimento){
        $this->nome =$nome;
        $this->cpf = $cpf;
        $this->dataNascimento= $dataNascimento;
    }

    public function addPedido($ped){
        $this->idPedido[count($this->idPedido)] =$ped;
    }
 
    public function getnome() {
         return $this->nome;
   }

   public function setnome($nome){
        $this->nome= $nome;
  }
   public function getdataNascimento() {
        return $this->dataNascimento;
  }
   public function setdataNascimento($dataNascimento) {
        $this->dataNascimento= $dataNascimento;
  }
   public function getCpf() {
        return $this->cpf;
  }  
   public function setCpf($cpf) {
        $this->cpf= $cpf;
}

}


class Cliente extends Pessoa{
    private $id;
    private $enderecoEntrega;
    private $telefone;
    private $idPedido = array();

    public function __construct($nome, $dataNascimento, $cpf, $enderecoEntrega,  $telefone){
        parent::__construct($nome,$dataNascimento, $cpf);
        $this->enderecoEntrega = $enderecoEntrega;
        $this->telefone = $telefone;
    }
    public function addPedido($ped){
        $this->idPedido[count($this->idPedido)] =$ped;
    }
    public function getEndereco(){
        return $this->enderecoEntrega;
    }
    public function setEndereco($endereco){
        $this->enderecoEntrega = $endereco;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
}

class Funcionario extends Pessoa{
    private $matricula;
    private $dataAdmissao;
    private $telefone;

    public function __constuct($nome,$dataNascimento,$cpf, $telefone, $matricula, $dataAdmissao){
        parent::__construct($nome,$dataNascimento, $cpf);
    $this->matricula = $matricula;
    $this->dataAdmissao = $dataAdmissao;
    $this->telefone = $telefone;
    }
    public function getAdmissao(){
        return $this->dataAdmissao;
    }
    public function setAdmissao($dataAdmissao){
        $this->dataAdmissao = $dataAdmissao;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
}

?>