<?php

require "../Model/conexao.php";
require_once "IControlador.php";

class ControladorCadPedido implements IControlador{
    
    public function processaRequisicao(){
        require "../View/CadPedido.php";
    }
}
   //está funcionando   
?>