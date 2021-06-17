<?php

require "../Model/Conexao.php";
require_once "IControlador.php";
require "../Model/Usuario.php";

class ControladorCadUsuario implements IControlador{
    
    public function processaRequisicao(){
        require "../View/CadLogin.php";
    }
}
   //está funcionando   
?>