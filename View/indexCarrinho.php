<?php include ("header.php");

//session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>indexCarrinho</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/7c890cd723.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php$_SESSION['Carrinho']; ?>
 
<section>
<div class="container mt-5"><br>
<h2 class="text-center"><i class="fas fa-shopping-cart">Produtos</i></h2><br>
     <div class="row">
      <div class="col-lg-3">
      <form action="gerirCarrinho.php" method="POST">
       <div class="card">
        <img src="imagem/foto3.jpg" class="card-img-top">
         <div class="card-body" class="text-center">
         <h6 class="card-title">Colcha Lancaster Casal</h6>
          <p class="card-text">Preço: R$ 917,90</p>
          <button type="submit" name="Adicione_ao_Carrinho" class="btn btn-info">Adicione ao Carrinho</buton>
           <input type="hidden" name="Item_Nome" value="Colcha Lancaster Casal">
           <input type="hidden" name="Preco" value="917">
         </div> 
       </div>
       </form>
      </div>
      <div class="col-lg-3">
      <form action="gerirCarrinho.php" method="POST">
       <div class="card">
        <img src="imagem/produto1.jpg" class="card-img-top">
         <div class="card-body" class="text-center">
         <h6 class="card-text">Tenis Adidas Feminino</h6>
          <p class="card-text">Preço: R$ 145,00</p>
          <button type="submit" name="Adicione_ao_Carrinho" class="btn btn-info">Adicione ao Carrinho</buton>
           <input type="hidden" name="Item_Nome" value="Tenis Adidas Feminino">
           <input type="hidden" name="Preco" value="145">
         </div> 
       </div>
       </form>
      </div>
      <div class="col-lg-3">
      <form action="gerirCarrinho.php" method="POST">
       <div class="card">
        <img src="imagem/produto4.jpg" class="card-img-top">
         <div class="card-body" class="text-center">
         <h6 class="card-text">Conjunto de panelas Tramontina</h6>
          <p class="card-text">Preço R$ 120,00</p>
          <button type="submit" name="Adicione_ao_Carrinho" class="btn btn-info">Adicione ao Carrinho</buton>
           <input type="hidden" name="Item_Nome" value="Conjunto de panelas Tamontina">
           <input type="hidden" name="Preco" value="120">
         </div> 
       </div>
       </form>
      </div>
      <div class="col-lg-3">
      <form action="gerirCarrinho.php" method="POST">
       <div class="card">
        <img src="imagem/produto3.jpg" class="card-img-top">
         <div class="card-body" class="text-center">
         <h6 class="card-text">Relógio de Pulso</h6>
          <p class="card-text">Preço: R$ 460,00</p>
          <button type="submit" name="Adicione_ao_Carrinho" class="btn btn-info">Adicione ao Carrinho</buton>
           <input type="hidden" name="Item_Nome" value="Relogio de pulso">
           <input type="hidden" name="Preco" value="460">
         </div> 
       </div>
       </form>
      </div>
      <div class="col-lg-3">
      <form action="gerirCarrinho.php" method="POST">
       <div class="card">
        <img src="imagem/promocao1.jpg" class="card-img-top">
         <div class="card-body" class="text-center">
         <h6 class="card-text">Smartphone Motorola</h6>
          <p class="card-text">Preço: R$ 999,99</p>
          <button type="submit" name="Adicione_ao_Carrinho" class="btn btn-info">Adicione ao Carrinho</buton>
           <input type="hidden" name="Item_Nome" value="Smartphone Motorola">
           <input type="hidden" name="Preco" value="999">
         </div> 
       </div>
       </form>
      </div>
      <div class="col-lg-3">
      <form action="gerirCarrinho.php" method="POST">
       <div class="card">
        <img src="imagem/promocao2.jpg" class="card-img-top">
         <div class="card-body" class="text-center">
         <h6 class="card-text">Faqueiro Tramontina</h6>
          <p class="card-text">Preço: R$ 33,90</p>
          <button type="submit" name="Adicione_ao_Carrinho" class="btn btn-info">Adicione ao Carrinho</buton>
           <input type="hidden" name="Item_Nome" value="Faqueiro Tramontina">
           <input type="hidden" name="Preco" value="33,90">
         </div> 
       </div>
       </form>
      </div>
      <div class="col-lg-3">
      <form action="gerirCarrinho.php" method="POST">
       <div class="card">
        <img src="imagem/promocao3.jpg" class="card-img-top">
         <div class="card-body" class="text-center">
         <h6 class="card-text">Colcha Casal</h6>
          <p class="card-text">Preço: R$ 279,90</p>
          <button type="submit" name="Adicione_ao_Carrinho" class="btn btn-info">Adicione ao Carrinho</buton>
           <input type="hidden" name="Item_Nome" value="Colcha Casal">
           <input type="hidden" name="Preco" value="279">
         </div> 
       </div>
       </form>
      </div>
      <div class="col-lg-3">
      <form action="gerirCarrinho.php" method="POST">
       <div class="card">
        <img src="imagem/promocao4.jpg" class="card-img-top">
         <div class="card-body" class="text-center">
         <h6 class="card-text">Toalha de Banho Santista</h6>
          <p class="card-text">Preço: R$ 11,99</p>
          <button type="submit" name="Adicione_ao_Carrinho" class="btn btn-info">Adicione ao Carrinho</buton>
           <input type="hidden" name="Item_Nome" value="Toalha de banho Santista">
           <input type="hidden" name="Preco" value="11,99">
         </div> 
       </div>
       </form>
       </div>
       </div>  
</section>
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
          <p>Troca ou devolucação <b> prazo de 7 dias.<b></b></p>
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