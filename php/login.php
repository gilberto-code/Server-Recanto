<?php
include "connection.php";

$email = $_POST["email"];
$senha = $_POST["senha"];
$senha = "senha";

//utf8_encode($adotante);
$query = "select senha, isAdm, idUser from tb_user where email = '$email'";
$result = mysqli_query($conn , $query) or die (mysqli($conn));
if($result == null){
	echo 0;
	mysqli_close($conn);
	exit;
}
while ($row = mysqli_fetch_assoc($result)) {
    if($row['senha'] == $senha){
		if($row['senha']!= null){
			$array = array(
				1,
				$row['idUser'],
				$row['isAdm']
			);

			print json_encode($array);
			mysqli_close($conn);
			exit;
		}
    }
}
echo 0;
mysqli_close($conn);
?>
