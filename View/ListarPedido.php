<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pedidos</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/7c890cd723.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <h2>Lista de Pedidos</h2>
  <table border="1">
      <tr>
          <td>id Pedido</td>
          <td>Status do Pedido</td>
          <td>Status Historico</td>
          <td>Endereço de Entrega</td>
      </tr>

      <?php if(isset($_POST['$listaPedidos'])){
      for($i=0; $i<is_countable($listaPedidos); $i++){ ?>
        <tr>
      <td><?php echo $listaPedidos[$i]->getId() ?></td>
      <td><?php echo $listaPedidos[$i]->getStatusPedido() ?></td>
      <td><?php echo $listaPedidos[$i]->getStatusHistorico() ?></td>
      <td><?php echo $listaPedidos[$i]->getEnderecoEntrega() ?></td>
      </tr>
      <?php } 
      }?>   
  </table>    
  <div class="btn"><br><br>
    <a class="btn btn-lg btn-warning btn-block" href= "View/carrinho.php">Voltar</a>
   </div>
</body>
</html>