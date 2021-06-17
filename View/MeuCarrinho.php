<?php 
include ("header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Carrinho</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/7c890cd723.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
     <div class="row">
      <div class="col-lg-12 text-center border rounded bg-ligth my-5">
       <h1>Meu Carrinho</h1>
      </div>
       <div class="col-lg-8">      
 <table class="table">
 <thead class="text-center">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome Produto</th>
      <th scope="col">Preço</th>
      <th scope="col">Quantidade</th>
      <th scop="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
  <?php
    $total=0;
    if(isset($_SESSION['Carrinho']))
    {
    foreach($_SESSION['Carrinho'] as $key =>$value)
    {
        $sr=$key+1;
        $total=$total+$value['Preco'];
        //print_r($value);
        echo"
        <tr>
         <td>$sr</td>
         <td>$value[Item_Nome]</td>
         <td>$value[Preco]</td>
         <td><input class='text-center' type='number' value='$value[Quantidade]' min='1' max='10'></td>
         <td>
          <form action='gerirCarrinho.php' method='POST'>
           <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remover</button>
           <input type='hidden' name='Item_Nome' value='$value[Item_Nome]'>
           </form>
         </td>;
        </tr>";
    }
}
  ?>
  </tbody>
</table>
    </div>
     <div class="col-lg-3">
      <div class="border bg-light rounded p-4">
        <h4>Total:</h4>
        <h5 class="text-center"><?php echo $total ?></h5>
        <br>
        <form >
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Cartão Crédito/Débito
  </label>
</div>
<br>
<a class="btn btn-lg btn-warning btn-block" href="RegistraPedido.php">Corfirmar Pedido</a>
        </form>
      </div>
     </div>
    </div>
</div><br>

<!---------Recursos do site------------->

<section class="website-features">
  <div class="container"> 
    <div class="row">
      <div class="col-md-3 feature-box">
        <img src="imagem/feature-1.png">
        <div class="feature-text">
          <p><b>Itens 100% original</b>, estão disponíveis na loja.</p>
        </div>
      </div>
      <div class="col-md-3 feature-box">
        <img src="imagem/feature-2.png">
        <div class="feature-text">
          <p> Entregamos seu pedido em casa, <b> prazo de entrega até 15 dias.</b></p>
        </div>
      </div>
      <div class="col-md-3 feature-box">
        <img src="imagem/feature-3.png">
        <div class="feature-text">
          <p><b>Pague online através de várias opções de </b> pagamento (Cartão de crédito/Débito e Boleto bancário).</b> </p>
        </div>
      </div>
      <div class="col-md-3 feature-box">
        <img src="imagem/feature-4.png">
        <div class="feature-text">
          <p>Troca ou devolução <b> prazo de 7 dias.<b></b></p>
        </div>
    </div>
  </div>
</section>

<!---------Footer------->

<section class="footer">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-3">
        <h1>Links Utéis</h1>
        <p>Termos de Uso</p>
        <p>Políticas de privacidade</p>
        <p>Políticas de devolução</p>
        <p>Desconto e Promoções</p>
      </div>
        <div class="col-md-3">
          <h1>Empresa</h1>
          <p>Sobre Nós</p>
          <p>Contate-nos</p>
          <p>Carreira</p>
          <p>Afiliada</p>
        </div>
        <div class="col-md-3">
          <h1>Siga-nos</h1>
          <p><i  class="fa fa-facebook-official"></i><a href="https://m.facebook.com/login/?locale=pt_BR/">Facebook</p></a>
          <p><i class="fa fa-youtube-play"></i><a href="https://www.youtube.com/"> Youtube</p></a>
          <p><i class="fa fa-linkedin"></i><a href="https://br.linkedin.com/"> Linkedin</p></a>
          <p><i class="fa fa-twitter"></i><a href="https://twitter.com/login?lang=pt">Twitter</p></a>
        </div>
       <div class="col-md-3 footer-imagem">
         <h1>Download App</h1>
         <a href="https://www.apple.com/br/"><img src="imagem/app.Apple.png"></a>
         <a href="https://play.google.com/store?hl=pt_BR&gl=US"><img src="imagem/appGooglePlay.png"></a>
    </div>
  </div>
  <hr>
  <p class="copyrigth"> Compra Certa <i class="fa fa-heart-o"></i> Sua compra de forma
  rápida e segura.</p>
</section>
<script>
    function openmenu(){
        document.getElementById("side-menu").style.display="block"
        document.getElementById("menu-btn").style.display="none"
        document.getElementById("close-btn").style.display="block"
    }
    function closemenu(){
        document.getElementById("side-menu").style.display="none"
        document.getElementById("menu-btn").style.display="block"
        document.getElementById("close-btn").style.display="none"
    }
</script>

<section>
  
</section>

</body>
</html>