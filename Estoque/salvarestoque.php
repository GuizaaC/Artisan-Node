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

$sql="INSERT INTO Estoque
( Nome_Produto, Quantidade_Produto, Descricao_Produto )
VALUES(, ".$_POST["Nome_Produto"].", ".$_POST["Quantidade_Produto"].",".$_POST["Descricao_Produto"].");";
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

echo " Salvo ".$nome." " .$quantidade;
?>