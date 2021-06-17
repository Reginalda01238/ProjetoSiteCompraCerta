
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação</title>
    <link rel="stylesheet" href="css/Aval.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css>
    <script src="https://kit.fontawesome.com/7c890cd723.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>    
</head>
<body>
   

    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
            <h1 class="text-center mt-5 font-weigth-bold"><i class="fas fa-thumbs-up">Avaliação</i></h1>
                <div class="bg-white"><br>
                <div class="checkout_form">
                 <p></p>
                   <h6  class="text-center">Por favor, descreva sua avaliação abaixo:</h6><br>
                    <div class="col-md-6">Como você avalia a sua experiência? </div><br>
                    <div class="text-primary input-group mt-2">
                    <i class="far fa-grimace"><br><input type="radio"  id="bandeira"  name="bandeira" checked>Ruim</i>
                    <i class="far fa-smile-beam"><br><input type="radio"  id="bandeira" name="bandeira">Boa</i>
                     <i class="far fa-grin-hearts" ><br><input type="radio"  id="bandeira" name="bandeira">Otima</i><br>
                     <form action="" method="POST">
                     <div class="form-check">
                     <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                     <label class="form-check-label" for="flexRadioDefault2">
                  </div>
                  </div>
                  <div class="row">
                      <div class="col-md-2"></div>
                      <label class="col-md-4">Nome Completo<br>
                        <input type="text" id="text" required="" placeholder="Digite seu nome"></label> 
                        
                        <label class="col-md-4">Email<br>
                        <input type="text" id="text" required="" placeholder="Digite o email"></label>
                  </div>
                  <div class="row">
                      <div class="col-md-2"></div>
                      <label class="col-md-4">Telefone<br>
                        <input type="text" id="text"  placeholder="Digite o telefone"></label>   
                   
                        <label class="col-md-4">Idade<br>
                        <input type="number" id="text" required="" placeholder=""></label>
                  </div>
                  <div class="row">
                      <div class="col-md-2"></div>
                      <label class="col-md-4">Menssagem<br>
                        <textarea type="number" id="menssagem" required="" placeholder="Digite sua menssagem aqui!
                        " cols="48" rows="5"></textarea></label>
                  </div>
                  <div class="row">
                      <div class="col-md-2"></div>
                      <label class="col-md-4"><br>
                      <button type="submit" class="btn btn-default"><a href="Agrad.php">Enviar </button></a>    
                  </div>
                    </form>
                 </div>
            </div>
</body>
</html>