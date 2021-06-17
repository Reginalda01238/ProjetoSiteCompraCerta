<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pedidos</title>
    <link rel="stylesheet" href="View/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css>
    <script src="https://kit.fontawesome.com/7c890cd723.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<section>
<div class="container">
   <h3 class="text-center"><br>
   <i class="fas fa-store-alt"><span>Lista de Pedidos</span></i>
   </h3>
<section>
     <div class="btn">
         <div class="btn btn-lg  btn text-rigth">
        <a href="MeuCarrinho.php"  class="btn btn-lg btn-warning btn-block"><i class="fa fa-plus-square">Novo</a></i>
     </div>
     </div>
</div>
</div>
<table class="table table-hover table-sm">
    <thead>
        <tr>
            <th>Id Pedido</th>
            <th class="text-center">Status Pedido</th>
            <th class="text-center">Status Histórico</th>
            <th class="text-center">Status Entrega</th>
            <th colspan="3">Açoes</th>  
        </tr>
    </thead>
    <tbody>
        <tr>
<!------colocado forech mas deu erro ------->
            
            <td><?$idPedido['idPedido']?></td>
            <td><?$pedido['statuspedido']?></td>
            <td><?$pedido['statushistorico']?></td>
            <td><?$pedido['statusentrega']?></td>
            <td>
                <form method="POST" action="">
                    <button type="button" class="btn btn-primary">
                        <i class="far fa-edit"></i>
                    </button>
                </form>
            </td>
            <td>
            <form method="POST" action="">
                <button class="btn btn-danger btn-xs">
                    <i class="fa fa-trash"></i>
                </button>
            </form>
            </td>
            <td>
            <form method="POST" action="">
            <button type="button" class="btn btn-info">
            <a href="AvaliacaoCli.php"><i class="fas fa-thumbs-up"></i></button></a>
            </form>
            </td>
        </tr>   
    </tbody>
</table>
</div>
</div>
</section>
</section>
</section>
<form method="POST" action="">
<button type="button" class="btn btn-success btn-lg">
<a href="index.php"><i class="fa fa-arrow-circle-left"></i> Voltar</button></a>
</form>
</body>
</html>
