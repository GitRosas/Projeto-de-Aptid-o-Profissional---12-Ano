<?php

session_start();
if ($_SESSION['login'] == FALSE) {
    header('location: ../login.php');
} else {
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
</head>

<body>

</body>

</html>
<?php
$host = 'localhost';
$db = 'fpdd_final1';
$user = 'root';
$pass2 = '';

$connect = "mysql:host=$host;dbname=$db";

try {
    $pdo = new PDO($connect, $user, $pass2);
} catch (PDOException $e) {
    echo "Não foi possível conectar à base de dados!" . $e->getMessage();
}

$Dorsal = $_GET["Dorsal_resultados"];
$Danca = $_GET["Cod_Danca"];

$stmt = $pdo->prepare("DELETE FROM `fpdd_final1`.`resultados` WHERE resultados.Dorsal_resultados = ? and resultados.Cod_Danca = ?;");
$stmt->execute(array([$Dorsal], [$Danca]));
$stmt2 = $pdo->prepare("select * from resultados WHERE resultados.Dorsal_resultados = ? and resultados.Cod_Danca = ?;");
$stmt2->execute(array([$Dorsal], [$Danca]));

header("Location: ./resultados.php");

if ($stmt) {
    echo "Eliminação feita com sucesso";
} else {
    echo "Error: ";
}




?>

<?php } ?>