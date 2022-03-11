 <?php
include "connection.php";

$pedido = $_POST["pedido"];
utf8_encode($pedido);
$pedido = json_decode($pedido);

$descricao = $pedido -> Descricao;
$idAnimal = $pedido -> IdAnimal;
$idUsuario = $pedido -> IdUsuario;

$query = "insert into tb_pedidos_adocao(mensagem, idAnimal, idUser) values ('$descricao', '$idAnimal','$idUsuario');";
$result = mysqli_query($conn , $query) or die (mysqli($conn));
mysqli_close($conn);
?>  