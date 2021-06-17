
<?php

session_start();
if($_SESSION['user']){

}else{
    header("location:indexCarrinho.php");
}


//session_destroy();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Adicione_ao_Carrinho']))
    {
        if(isset($_SESSION['Carrinho']))
        { 
          $meusitems=array_column($_SESSION['Carrinho'], 'Item_Nome');
          if(in_array($_POST['Item_Nome'], $meusitems)) 
          {
             echo"<script>
             alert('Item já Adicionado');
             window.location.href='indexCarrinho.php';
             </script>";
          }
          else
          {
             $count=count($_SESSION['Carrinho']);
             $_SESSION['Carrinho'][$count]=array('Item_Nome'=>$_POST['Item_Nome'],
            'Preco'=>$_POST['Preco'], 'Quantidade'=>1);
             echo"<script>
             alert('Item Adicionado');
             window.location.href='indexCarrinho.php';
             </script>";
            //print_r($_SESSION['Carrinho']);
         }
        }
        else
        {
          $_SESSION['Carrinho'][0]=array('Item_Nome'=>$_POST['Item_Nome'],
         'Preco'=>$_POST['Preco'], 'Quantidade'=>1);
         echo"<script>
             alert('Item Adicionado');
             window.location.href='indexCarrinho.php';
             </script>";
         
         //print_r($_SESSION['Carrinho']);
    
        }
    } 
    if(isset($_POST['Remove_Item']))
    {
        foreach($_SESSION['Carrinho'] as $key =>$value)
        {
            //print_r ($key);  //Não está removendo
            if($value['Item_Nome']==$_POST['Item_Nome'])
            {  
            unset($_SESSION['Carrinho'][$key]);
            $_SESSION['Carrinho']=array_values($_SESSION['Carrinho']);
            echo"<script>
             alert('Item Removido');
             window.location.href='MeuCarrinho.php';
            </script>";
            } 
        }
    } 
    $details = mysql_real_escape_string($_POST['details']);
       $id = strfid("%X"); //time
       $nome = strnome("%B %d, %Y"); //date
       $decision = "no";
}

?>