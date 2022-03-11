<?php
include "connection.php";

$usuario = $_POST["usuario"];
utf8_encode($usuario);
$usuario = json_decode($usuario);

$email = $usuario -> Email;
$email = "gilberttogil.gg@gmail.com";

$query = "select * from tb_user where email = '$email'";
$result = mysqli_query($conn ,$query) or die("deu ruim");
$rows = array();
utf8_encode($rows);
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
print json_encode($rows);
mysqli_close($conn);
?>