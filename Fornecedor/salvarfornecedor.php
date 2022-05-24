<?php 

$servername = "localhost";
$database = "u553234134_BD_Artisan";
$username = "u553234134_GuIzaac";
$password = "Gzaac12343124";
// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} 

$sql="INSERT INTO Fornecedor
( Nome_Fornecedor, Cnpj_Fornecedor, Telefone_Fornecedor, Endereco_Fornecedor, Cep_Fornecedor )
VALUES(, ".$_POST["Nome_Fornecedor"].", ".$_POST["Cnpj_Fornecedor"].",".$_POST["Telefone_Fornecedor"].", ".$_POST["Endereco_Fornecedor"].", ".$_POST["Cep_Fornecedor"].");";
// con.exec ($sql);
$resultados = mysql_query($conexao, $sql);//executa o comando e guarda na variavel resultado.. 

echo $query;
mysqli_query($connection,$query) or die ('Erro ao salvar..');
echo "Connected successfully";
//mysqli_close($connection);


  
//$connection = mysqli_connect($host,$user,$pass,$dbname) or die (mysql_errno().": ".mysql_error()."<BR>"); 

//mysqli_select_db($connection,$dbname);





/*

    while($tarefa = mysqli_fetch_assoc($query)){

        echo $tarefas["nome"];

    }*/

echo " Salvo ".$nome." " .$cnpj ;
?>