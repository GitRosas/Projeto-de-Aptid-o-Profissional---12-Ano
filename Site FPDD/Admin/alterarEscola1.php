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

    $Cod_Escola = $_POST['Cod_Escola'];
    $nome1 = $_POST["nome1"];
    $morada1 = $_POST["morada1"];
    $contacto1 = $_POST["contacto1"];
    $Cod_Associacao1 = $_POST['Cod_Associacao1'];

    $stmt = $pdo->prepare("UPDATE `escolas` SET `Nome`=?,`Morada`=?,`Contacto`=?,`Cod_Associacao`=? WHERE `escolas`.`Cod_Escola` = ?;");
    
    header("Location: ./Escolas.php");
   
     if ($stmt->execute(array($nome1, $morada1, $contacto1, $Cod_Associacao1, $Cod_Escola))) {
        echo "Alteração feita com sucesso";
    } else {
        echo "Error: ";
    }

   
}
?>
<?php } ?>