<?php 

$sql="INSERT INTO Cliente3
( Nome_Cliente, Endereço_Cliente, Telefone_Cliente, Cpf_Cliente, Data_Nascimento_Cliente)
VALUES(, ".$_GET["Email_Cliente"].", ".$_GET["Endereço_Cliente"].",".$_GET["Telefone_Cliente"]." , ".$_GET["Cpf_Cliente"].", ".$_GET["Data_Nascimento_Cliente"].");";
con.exec ($sql);
?>