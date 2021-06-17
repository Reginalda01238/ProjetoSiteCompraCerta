<?php

require "PedidoDAO.php";


class Pedido{
    private $idPedido = array();
    private $statusPedido;
    private $statusHistorico;
    private $enderecoEntrega;

    public function __constuct($enderecoEntrega){

        $this->enderecoEntrega = $enderecoEntrega;
        $this->statusPedido = "Aguardando Separação";
    }  
    public function addPedido($ped){
        $this->idPedido[count($this->idPedido)] =$ped;
    }
    public function getPedido(){
        return $this->idPedido;
        
    }
    public function setPedido(){
        $this->idPedido=$idPedido;
    }
    public function getStatusPedido(){
        return $this->statusPedido;
    }
    public function setStatusPedido($statusPedido){
        $this->statusPedido=$statusPedido;
    }
    public function getStatusHistorico(){
        return $this->statusHistorico;
    }
    public function setStatusHistorico($statusHistorico){
        $this->statusHistorico=$StatusHistorico;
    }
    public function getEndereco(){
        return $this->enderecoEntrega;
    }
    public function setEndereco(){
        return $this->enderecoEntrega;
    }
    public function PesquisarTodos(){
        $pedidoDao = new PedidoDAO();
        return $pedidoDao = PesquisarTodos();
    }
}


?>