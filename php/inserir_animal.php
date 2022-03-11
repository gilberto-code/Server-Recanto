<?php
include "connection.php";
$animal = $_POST["animal"];
utf8_encode($animal);
$animal = json_decode($animal);

$nome = $animal -> Nome;
$especie = $animal ->Especie; 
$idade = $animal -> Idade;
$raca = $animal -> Raca;
$cor = $animal -> Cor;
$porte =$animal -> Porte;
$sexo = $animal -> Sexo;
$descricao = $animal -> Descricao;
$dataDeCadastro = $animal -> DataDeCadastro;
$qualDoenca = $animal -> QualDoenca;
$doente = $animal -> Doente;

$timestamp = strtotime($dataDeCadastro);
$date_formated = date('Y-m-d H:i:s', $timestamp);

$castrado = $animal -> Castrado;
$vacinado = $animal -> Vacinado;
$query = "insert into tb_animais(nome ,especie,idade ,raca ,cor ,porte ,sexo ,descricao ,dataDeCadastro ,qualDoenca,
 doente ,castrado ,vacinado) values 
('$nome','$especie','$idade','$raca','$cor','$porte','$sexo','$descricao','$date_formated','$qualDoenca',
'$doente','$castrado' ,'$vacinado');";
$result = mysqli_query($conn , $query) or die (mysqli($conn));


$query = "select idAnimal from tb_animais ORDER BY idAnimal DESC LIMIT 1;";
$result = mysqli_query($conn , $query) or die (mysqli($conn));
while($row = $result->fetch_assoc()) {
        echo $row["idAnimal"];
    }
mysqli_close($conn);
?>