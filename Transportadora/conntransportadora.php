<?php
        //################ tela #####################
        $nome = htmlspecialchars($_GET['Nome_Transportadora']);
        $cnpj = htmlspecialchars($_GET['Cnpj_Transportadora']);
        $telefone = htmlspecialchars($_GET['Telefone_Transportadora']);
        $endereco = htmlspecialchars($_GET['Endereco_Transportadora']);
        $cep = htmlspecialchars($_GET['Cep_Transportadora']);
        

        //################ servidor #####################
    $host = "localhost"
    $user = "";
    $pass = "";
    $dbname = "u553234134_BD_Artisan";
    $connection = mysqli_conect($host, $user, $pass, $dbname) or die (mysql_error(). ": " .mysql_error(). "<BR>");
    //mysqli_select_db($connection, $dbname,);

    //################ conexão #####################
    $query = INSERT INTO `Transportadora`(`Nome_Transportadora`, `Cnpj_Transportadora`, `Telefone_Transportadora`, `Endereco_Transportadora`, `Cep_Transportadora`)

?>