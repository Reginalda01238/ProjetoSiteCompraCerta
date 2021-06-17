<?php

require "Conexao.php";

class Cliente{
 
    private $nome;
    private $cpf;
    private $datanascimento;
    private $emmail;
    private $senha; 
    

    public function __construct( $nome, $cpf, $datanascimento,$email,
    $senha){    
    }

    
    
    public function getNome(){
        return $this->nome;
    }

    public function getCpf(){
        return  $this->cpf;
    }

    public function  getDatanascimento(){
        return $this->datanascimento;
    }

    public function  getEmail(){
        return $this->telefone;
    }
    public function  getSenha(){
        return $this->senha;
    }


    public function setNome($nome){
        $this->nome= $nome;
    }

    public function setCpf($cpf){
         $this->cpf= $cpf;
    }

    public function  setDatanascimento($datanascimento){
        $this->datanascimento= $datanascimento;
    }
    
    public function setEmai($email){
        $this->email= $email;
    }
    
    public function setSenha($senha){
        $this->senha= $senha;
    }
 

     


    public function incluirCliente(){
        $CadCliente = new Cliente();  
        $CadCliente->incluirCliente($this);
   }
   public function listarTodos(){
       $CadCliente = new Cliente();
       return $CadCliente->listarTodos();
   }
   public function pesquisarCliente(){
       $CadCliente = new Cliente();
       $CadCliente->pesquisarCliente($this);
   }
}
?>