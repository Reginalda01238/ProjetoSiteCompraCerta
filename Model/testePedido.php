<?php

require("Pedido.php");



$p = new Pedido("Aguardando Entrega","em separacao","rua a");

$p->AddPedido($p);

echo $p->getStatusPedido();
$p->setStatusPedido("Entregue");

echo $p->getStatusPedido();

echo $p->getEndereco();

?>