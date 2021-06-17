<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de Compras</title>     
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/historico.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/7c890cd723.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header>
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
      
    </header>
    <main>
        <div class="progress">
        <ul>
            <li>
               <img src="imagem/matricula.jpg"><br>
            <a href="#"><i class="fa fa-check"></i></a> 
                <p>Matricula</p>
            </li>
        <li>
            <img src="imagem/search1.jpg"><br>
            <a href="CadPedido.php"><i class="fa fa-check"></i></a>
            <p>Selecione o Item</p>
        </li>
        <li>
            <img src="imagem/conferencia.png"><br>
            <a href="CadPedido.php"><i class="fa fa-check"></i></a>
            <p>Conferência/Embalagem</p>
        </li>
        <li>
            <img src="imagem/detalhe.jpg"><br>
            <a href="CadPedido.php"><i class="fa fa-refresh"></i></a>
            <p>Preparação</p>
        </li>
        <li>
            <img src="imagem/entrega.png"><br>
            <a href="CadPedido.php"><i class="fa fa-times"></i></a>
            <p>Data da Entrega</p>
        </li>
        <li>
            <img src="imagem/download.jpg"><br>
            <a href="CadPedido.php"><i class="fa fa-times"></i></a>
            <p>Baixar Histórico</p>
        </li>
    </ul>
</div>
</main>

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
</body>
</html>