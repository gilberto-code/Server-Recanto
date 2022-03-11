<?php
include "connection.php";

$usuario = $_POST["usuario"];
utf8_encode($usuario);
$usuario = json_decode($usuario);

$nome = $usuario -> Nome;
$telefone = $usuario -> Telefone;
$CPF = $usuario -> CPF;
$endereco = $usuario -> Endereco;
$email = $usuario -> Email;

$senha = $usuario -> Senha;
$foto_momento = $usuario -> Foto_momento;
$query = "INSERT INTO tb_user(nome,telefone,CPF,endereco,email,senha,foto_momento) values
('$nome','$telefone','$CPF','$endereco','$email','$senha','$foto_momento');";
$result = mysqli_query($conn , $query) or die ($conn->error);
print("1");

?>