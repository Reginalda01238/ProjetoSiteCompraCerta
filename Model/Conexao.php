
<?php

        $servername = "localhost:3306"; 
        $username = "root";
        $password = "";
        $dbname = "compracerta";
    
        try {
           $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
           // set the PDO error mode to exception
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
        }
        catch(PDOException $e) 
        {
         echo "entrou no catch".$e->getmessage();

       }
       //echo "esta pagina funciona";
?>