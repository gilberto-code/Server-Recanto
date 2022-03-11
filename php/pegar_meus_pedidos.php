<?php
include "connection.php";
$idUser = $_POST["idUser"];
$query = "select ta.nome,ta.especie,ta.idade,ta.raca ,ta.cor ,ta.porte,ta.sexo,ta.descricao ,ta.qualDoenca,
ta.doente,ta.castrado ,ta.vacinado,ta.idAnimal, 
ti.imagem from tb_pedidos_adocao tp
left join tb_animais ta
on ta.idAnimal = tp.idAnimal
left join tb_imagens ti
on ta.idAnimal = ti.idAnimal
where tp.idUser = '$idUser'
group by tp.idUser;";
$result = mysqli_query($conn ,$query) or die("deu ruim");
$rows = array();
utf8_encode($rows);
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
print json_encode($rows);
mysqli_close($conn);
?>