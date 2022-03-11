<?php
include "connection.php";
$query = "select nome ,especie,idade ,raca ,cor ,porte,sexo,descricao  ,qualDoenca,
doente,castrado ,vacinado, tb_animais.idAnimal, 
imagem from tb_animais left join tb_imagens 
on tb_animais.idAnimal = tb_imagens.idAnimal;";
$result = mysqli_query($conn ,$query) or die("deu ruim");
$rows = array();
utf8_encode($rows);
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
print json_encode($rows);
mysqli_close($conn);
?>