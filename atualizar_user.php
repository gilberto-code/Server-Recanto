<?php
include "connection.php";

$usuario = $_POST["usuario"];
utf8_encode($usuario);
$usuario = json_decode($usuario);

$idUser = $usuario -> IdUser;
$nome = $usuario -> Nome;
$telefone = $usuario -> Telefone;
$CPF = $usuario -> Cpf;
$endereco = $usuario -> Endereco;
$email = $usuario -> Email;
$senha = $usuario -> Senha;
$foto_momento = $usuario -> Foto_momento;


$query = "UPDATE tb_user 
SET nome = '$nome',
telefone= '$telefone',
cpf= '$CPF',
endereco= '$endereco',
email= '$email',
senha= '$senha',
foto_momento= '$foto_momento'
WHERE idUser = '$idUser';";

$result = mysqli_query($conn , $query) or die ($conn->error);
if($result == null){
	echo 0;
	mysqli_close($conn);
	exit;
}else{
    print_r($result);
}

?>