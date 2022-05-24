<?php
        //################ tela #####################
        $nome = htmlspecialchars($_GET['Nome_Produto']);
        $quantidade = htmlspecialchars($_GET['Quantidade_Produto']);
        $descricao = htmlspecialchars($_GET['Descricao_Produto']);
        

        //################ servidor #####################
    $host = "localhost"
    $user = "";
    $pass = "";
    $dbname = "u553234134_BD_Artisan";
    $connection = mysqli_conect($host, $user, $pass, $dbname) or die (mysql_error(). ": " .mysql_error(). "<BR>");
    //mysqli_select_db($connection, $dbname,);

    //################ conexão #####################
    $query = INSERT INTO `Estoque`(`Nome_Produto`, `Quantidade_Produto`, `Descricao_Produto`)

?>