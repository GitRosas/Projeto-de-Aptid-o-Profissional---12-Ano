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

        $Cod_Associacao = $_POST['Cod_Associacao'];
        $nome1 = $_POST["nome1"];
        $local1 = $_POST["local1"];
        $email1 = $_POST["email1"];

        $stmt = $pdo->prepare("UPDATE `associacao_distrital` SET `Nome`= ?,`Local`= ?,`Email`= ? WHERE `associacao_distrital`.`Cod_Associacao` = ?;");
        
        header("Location: ./associacoesDistritais.php");

        if ($stmt->execute(array($nome1, $local1, $email1, $Cod_Associacao))) {
            echo "Alteração feita com sucesso";
        } else {
            echo "Error: ";
        }

       
    }
    ?>
    <?php } ?>