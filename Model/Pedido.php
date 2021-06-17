<?php


class Pedido{
    private $idPedido = array();
    private $statusPedido;
    private $statusHistorico;
    private $enderecoEntrega;

    public function __construct($statusPedido, $statusHistorico, $enderecoEntrega)
    {
      $this->statusPedido = $statusPedido;
      $this->statusHistorico = $statusHistorico;
      $this->enderecoEntrega = $enderecoEntrega;
    }

    public function getIdPedido(){
        $i=1;
        For($i=0; $i<[count($this->idPedido)]; $i++)
        echo $this->idPedido[$i];
    
    }  
   
    public function getStatusPedido(){
        return $this->statusPedido;
    }
    
    public function getStatusHistorico(){
        return $this->statusHistorico;
    }
     
    public function getEndereco(){
        return $this->enderecoEntrega;
    }

    public function setStatusPedido($statusPedido){
         $this->statusPedido= $statusPedido;
    }
    
    public function setStatusHistorico($statusHistorico){
         $this->statusHistorico= $statusHistorico;
    }
    
    public function setEnderecoEntrega($enderecoEntrega){
       $this->enderecoEntrega=$enderecoEntrega;
    }
    public function addPedido($pedido){
        $this->idPedido[count($this->idPedido)] = $pedido; 
    }   
}
?>