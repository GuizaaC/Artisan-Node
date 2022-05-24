<?php
        //################ tela #####################
        $nome = htmlspecialchars($_GET['Nome_Fornecedor']);
        $cnpj = htmlspecialchars($_GET['Cnpj_Fornecedor']);
        $telefone = htmlspecialchars($_GET['Telefone_Fornecedor']);
        $endereco = htmlspecialchars($_GET['Endereco_Fornecedor']);
        $cep = htmlspecialchars($_GET['Cep_Fornecedor']);
        

        //################ servidor #####################
    $host = "localhost"
    $user = "";
    $pass = "";
    $dbname = "u553234134_BD_Artisan";
    $connection = mysqli_conect($host, $user, $pass, $dbname) or die (mysql_error(). ": " .mysql_error(). "<BR>");
    //mysqli_select_db($connection, $dbname,);

    //################ conexão #####################
    $query = INSERT INTO `Fornecedor`(`Nome_Fornecedor`, `Cnpj_Fornecedor`, `Telefone_Fornecedor`, 'Endereco_Fornecedor', 'Cep_Fornecedor')

?>