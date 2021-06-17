<?php
    
	
	//testa a variável url que veio lá do htaccess
	if (isset($_GET['url'])) //se estiver preenchida, pega o valor
	  {
            $url =  strtoupper($_GET['url']);
    		switch ($url){
	    		case "NOVOCLIENTE":
					require "Controller/ControladorCadCliente.php";    
				    $controlador = new ControladorCadCliente();
					$controlador->processaRequisicao();
					break;
				case "INCLUIRCLIENtE":
					require "Controller/ControladorNovoCliente.php";    
					$controlador = new ControladorNovoCliente();
					$controlador->processaRequisicao();
					break;
			    case "LISTARCLIENTE":
					require "Controller/ControladorCadCliente.php";
                    $controlador = new ControladorCadCliente();
                    $controlador->processaRequisicao();
					break;
				default:
				    require "Controller/ControladorCadCliente.php";
				    $controlador = new ControladorCadCliente();
				    $controlador->processaRequisicao();
				    break;
			  }
			  }
			  else                     //senão, vai para uma página padrão, neste caso a home do site
                $url = '404.php';
//echo "Esta Pagina Funciona";

?>
	