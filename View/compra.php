<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/pagamento.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/7c890cd723.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="top-nav-bar">
        <div class="search-box">
            <i class="fas fa-bars" id="menu-btn" onclick="openmenu()"></i>
            <i class="fas fa-times" id="close-btn" ondblclick="closemenu()"></i>
            <a href="index.php"><img src="imagem/logo.png" class="logo"></a>
            <input type="text" class="form-control">
            <span class="input-group-text"><i class="fas fa-search"></i></span>
        </div>
        <div class="menu-bar">
            <ul>
                <li><a href="MeuCarrinho.php"><i class="fas fa-shopping-cart"></i>Carrinho</a></li>
                <li><a href="historico.php">Histórico</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="compra.php">Compra</a></li>
            </ul>
        </div>
    </div>
    <section>
        <div class="wrapper">
            <div class="checkout_wrapper">
            <div class="produto_info">
                <img src="imagem/produto3.jpg">
                <div class="content"></div>
                <form action="comprar.php" method="POST">
                <h3>Relogio de Pulso</h3>
                <p class="text-center">R$ 460,00</p>
            </div>
        <div class="checkout_form">
            <p>Dados do Cartão</p>
            
             <div class="text-primary input-group mt-2">
             <i class="fab fa-cc-visa fa-2x"><input type="radio"  id="bandeira"  name="bandeira" checked></i>
             <i class="fab fa-cc-mastercard fa-2x mx-3"><input type="radio"  id="bandeira" name="bandeira"></i>
             <i class="fab fa-cc-amex fa-2x" ><input type="radio"  id="bandeira" name="bandeira"></i>
             
            <div class="details">
                <div class="section">
                <input  name="numero_cartao" type="text"  required autofocus id="numero_cartao" placeholder="Número do Cartão">

                </div>
                <div class="section">
                    <input name="nome_do_titular"  type="text" placeholder="Nome do titular do cartão">
                </div>
                <div class="form-group">
                  <label for="validade">Validade:</label>
                  <select name="mes" class= id = "mes">
                    <?php for($cont=1;$cont<13;$cont++){  ?>
                     <option><?php echo $cont ?></option>
                    <?php } ?>
                  </select>
                 <select name="ano" class= id = "ano">
               <?php for($cont=2020;$cont<2028;$cont++){  ?>
                <option><?php echo $cont ?></option>
               <?php } ?>
               </select>
                    <div class="item">
                     <input name="cvv"  type="text" placeholder="CVV">
                 </div>
                </div>
                <div class="btn">
                <a href="comprar.php"></a><button type="submit"  class="btn btn-default">Finalizar</button></a>
                </div>
            </div>
        </div> 
     </div>
    </div>
    </form>
  </section>
</body>
</html>