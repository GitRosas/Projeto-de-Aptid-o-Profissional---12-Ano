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

    $Cod_Prova = $_POST['Cod_Prova'];
    $nome1 = $_POST["nome1"];
    $escalao1 = $_POST['escalao1'];
    $hora1 = $_POST['hora1'];

    $stmt = $pdo->prepare("UPDATE `provas` SET `Nome_Prova`=?,`Escalao`=?,`Hora`=? WHERE `provas`.`Cod_Prova` = ?;");
    
    header("Location: ./Provas.php");
   
     if ($stmt->execute(array($nome1, $escalao1, $hora1, $Cod_Prova))) {
        echo "Alteração feita com sucesso";
    } else {
        echo "Error: ";
    }

   
}
?>
<?php } ?>