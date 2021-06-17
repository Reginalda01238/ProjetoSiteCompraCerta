<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes Cadastrado</title>
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
   <i class="fa fa-users"><span>Lista de Clientes Cadastrados</span></i>
   </h3>
<section>
     <div class="btn">
         <div class="btn btn-lg  btn text-rigth">
        <a href="PaginaRegistro.php"  class="btn btn-lg btn-warning btn-block"><i class="far fa-user">Novo</a></i>
     </div>
     </div>
</div>
</div>
<table class="table table-hover table-sm">
    <thead>
        <tr>
            <th>Nome</th>
            <th class="text-center">CPF</th>
            <th class="text-center">Data Nascimento</th>
            <th class="text-center">Telefone</th>
            <th class="text-center">Endereço</th>
            <th colspan="3">Açoes</th>  
        </tr>
    </thead>
    <tbody>
        <tr>
        
            <td><?$cliente['id']?></td>
            <td><?$cliente['nome']?></td>
            <td><?$cliente['cpf']?></td>
            <td><?$cliente['dataNascimento']?></td>
            <td><?$cliente['telefone']?></td>
            <td><?$cliente['endereco']?></td>
            <td>
<!------colocado forech mas deu erro ------->

                <form method="POST" action="">
                    <button type="button" class="btn btn-primary">
                        <i class="fa fa-user-edit"></i>
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
        </tr>
    </tbody>
</table>
</div>
</div>
</section>
</section>
</body>
</html>
