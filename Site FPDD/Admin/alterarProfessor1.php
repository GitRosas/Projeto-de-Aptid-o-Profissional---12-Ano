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

    $N_cedula = $_POST['N_cedula'];
    $nome1 = $_POST["nome1"];
    $idade1 = $_POST["idade1"];
    $Cod_Escola1 = $_POST['Cod_Escola1'];

    $stmt = $pdo->prepare("UPDATE `professores` SET `Nome`=?,`Idade`=?,`Cod_Escola`=? WHERE `professores`.`N_cedula` = ?;");
    
    header("Location: ./professores.php");
   
     if ($stmt->execute(array($nome1, $idade1, $Cod_Escola1, $N_cedula))) {
        echo "Alteração feita com sucesso";
    } else {
        echo "Error: ";
    }

   
}
?>
<?php } ?>