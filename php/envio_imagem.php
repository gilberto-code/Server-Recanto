<?php
include "connection.php" ;
$img_string = $_POST["imagem"];
$idAnimal = $_POST["id"];

$query = "INSERT INTO tb_imagens(imagem,idAnimal) values('$img_string','$idAnimal');";
mysqli_query($conn ,$query) or die("Aconteceu algum erro");
?>