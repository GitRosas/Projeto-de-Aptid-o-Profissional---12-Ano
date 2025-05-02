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

    $Dorsal = $_POST['Dorsal'];
    $nome1 = $_POST["nome1"];
    $Cod_Escola1 = $_POST['Cod_Escola1'];

    $stmt = $pdo->prepare("UPDATE `atletas_inscritos` SET `Nome_atleta`=?,`Cod_Escola`=? WHERE `atletas_inscritos`.`Dorsal` = ?;");
    
    header("Location: ./atleta.php");
   
     if ($stmt->execute(array($nome1, $Cod_Escola1, $Dorsal))) {
        echo "Alteração feita com sucesso";
    } else {
        echo "Error: ";
    }

   
}
?>
<?php } ?>