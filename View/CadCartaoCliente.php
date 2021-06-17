<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css>
    <script src="https://kit.fontawesome.com/7c890cd723.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    function validaForm() {
      alert ("Cadastro concluído com sucesso");
      return true;
    }
    </script>

</head>
<body>
<!-- formulario de cadastro-->
<div class="container"></div>
  <h2>Cadastro do Cliente - Dados do Cartao de Crédito</h2>
  <form name="cadastroCartao" method = "post" action="CadCliente.php" onsubmit="return validaForm();">
    <h4>CPF/Nome do cliente:<?php echo $_SESSION["cpfCli"],"/",$_SESSION["nomeCli"];?></h4>
    <p>Bandeira:
        <input type="radio"  id="bandeira" name="bandeira" checked> Visa
        <input type="radio"  id="bandeira" name="bandeira">Master
        <input type="radio"  id="bandeira" name="bandeira">American
    </p>
    <div class="form-group">
      <label for="numero">Número do cartão:</label>
      <input type="text" class="form-control" id="numero" name="numero" required size="10">
    </div>
    <div class="form-group">
      <label for="codigo">Código de segurança:</label>
      <input type="text" class="form-control" id="codigo" name="codigo" required size="5">
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
    </div>
        
      <button type="submit" class="btn btn-default">Finalizar</button>
  </form>
</div>

</body>
</html>