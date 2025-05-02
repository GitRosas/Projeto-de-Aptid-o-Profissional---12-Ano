<?php

session_start();
if ($_SESSION['login'] == FALSE) {
    header('location: ../login.php');
} else {
    ?>
<?php

if (isset($_POST['alteracao'])) {

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

    $Cod_Juri = $_POST['Cod_Juri'];
    $nome1 = $_POST["nome1"];
    $pais1 = $_POST["pais1"];

    $stmt = $pdo->prepare("UPDATE `juris` SET `Nome`= ?,`Pais`= ? WHERE `juris`.`Cod_Juri` = ?;");
    
    header("Location: ./juris.php");

    if ($stmt->execute(array($nome1, $pais1, $Cod_Juri))) {
        echo "Alteração feita com sucesso";
    } else {
        echo "Error: ";
    }
}
?>
<?php } ?>