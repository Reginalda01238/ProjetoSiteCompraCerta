<?php

class Produto{
    private $idProduto = array();
    private $nome;
    private $descProduto;
    private $categoria;
    private $preco;

    public function __construct($idProduto, $nome, $descProduto, $categoria, $valor){
   
        $this->idProduto= $idProduto;
        $this->nome=$nome;
        $this->descProduto = $descProduto;
        $this->categoria = $categoria;
        $this->valor = $preco;
    }
}

?>