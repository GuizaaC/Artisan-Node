// <?php
// /*
// $nome = htmlspecialchars($_GET['nome']);

// 	$cpf = htmlspecialchars($_GET['cpf']);

// 	$Telefone = htmlspecialchars($_GET['Telefone']);

// 	$eMail = htmlspecialchars($_GET['eMail']);
// */



// $servername = "localhost";
// $database = "u553234134_BD_Artisan";
// $username = "u553234134_GuIzaac";
// $password = "Gzaac12343124";
// // Create connection
// $connection = mysqli_connect($servername, $username, $password, $database);
// // Check connection
// if (!$connection) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// $query = " INSERT INTO Cliente
// ( Email_Cliente,Nome_Cliente, Endereço_Cliente, Telefone_Cliente, Cpf_Cliente, Data_Nascimento_Cliente)
// VALUES('".$_POST["Email_Cliente"]."', '".$_POST["Nome_Cliente"]."', '".$_POST["Endereco_Cliente"]."','".$_POST["Telefone_Cliente"]."', '".$_POST["Cpf_Cliente"]."', '".$_POST["Data_Nascimento_Cliente"]."');";


// echo $query;
// mysqli_query($connection,$query) or die ('Erro ao salvar..');
// echo "Connected successfully";
// //mysqli_close($connection);


  
// //$connection = mysqli_connect($host,$user,$pass,$dbname) or die (mysql_errno().": ".mysql_error()."<BR>"); 

// //mysqli_select_db($connection,$dbname);





// /*

//     while($tarefa = mysqli_fetch_assoc($query)){

//         echo $tarefas["nome"];

//     }*/

// echo " Salvo ".$nome." " .$cpf ;

// ?>