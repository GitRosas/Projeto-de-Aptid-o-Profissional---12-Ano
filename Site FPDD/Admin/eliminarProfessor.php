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

$Codigo = $_GET["N_cedula"];

$stmt = $pdo->prepare("DELETE FROM `fpdd_final1`.`professores` WHERE professores.N_cedula = ?;");
$stmt->execute([$Codigo]);
$stmt2 = $pdo->prepare("select * from professores WHERE professores.N_cedula = ?;");
$stmt2->execute([$Codigo]);


header("Location: ./professores.php");

if ($stmt) {
    echo "Eliminação feita com sucesso";
} else {
    echo "Error: ";
}




?>
<?php } ?>