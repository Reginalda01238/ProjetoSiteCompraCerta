<?php

require_once "../Model/Conexao.php";
require_once "../Model/Cliente.php";

?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Pedido</title>
    <link rel="stylesheet" href="View/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css>
    <script src="https://kit.fontawesome.com/7c890cd723.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body><br>
<h2 class="text-center">
    Registro de Pedido <i class="fa fa-list"></i>
</h2><br>

<form method="post">
    <div class="container">
        <div class="form-row">
            <!------foreach dando erro-------->

            <div class="col-md-6">
                Nome: <i class="fa fa-user"></i>
                <input class="form-control" type="text" name="nome" required autofocus values="<?=$cliente['nome']?>"><br>
            </div>
            <div class="col-md-4">
                CPF: <i class="fas fa-address-card"></i>
                <input class="form-control" type="text" name="cpf" required id="cpf" values="<?=$cliente['cpf']?>"><br>
            </div>
            <div class="col-md-4">
                Data Nascimento: <i class="far fa-calendar-alt"></i>
                <input class="form-control" type="date" name="birth" required values="<?=$cliente['data']?>"><br>
            </div>
            <div class="col-md-4">
                Telefone: <i class="fa fa-whatsapp"></i>
                <input class="form-control" type="text" name="telefone" required id="telefone" values="<?=$cliente['telefone']?>"> 
            </div>
            <div class="col-md-12">
                Endereço de Entrega: <i class="fa fa-map"></i>
                <input class="form-control" type="text" name="endereco" required values="<?=$cliente['endereco']?>"><br>
            </div>
            <input type="hidden" name="id" value="<? $cliente['id']?>">
           
            <div class="col-md-4">
                <a href="MeuCarrinho.php" class="btn btn-success btn-lg">
                Voltar<i class="fa fa-arrow-circle-left"></i></a>      
            </div>
            <div class="col-md-8 text-right">
                <a href="compra.php"><button type="submit" class="btn btn-primary btn-lg">
                    Finalizar<i class="fa fa-user-edit"></i></a>
                </button>
        </div>
    </div>
</form>
</body>
</html>