<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<?php
session_start();
$_SESSION['recuperar'] = FALSE;
$_SESSION['pass'] == FALSE;
if ($_SESSION['recuperar'] == FALSE) {
    header('location: perdipassword.php');


    

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

    if (isset($_POST['username'])) {
        $username = $_POST['username'];
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if (isset($_POST['Registar'])) {
        $registar = $_POST['Registar'];
    }

    $_SESSION['chave'] = substr(uniqid(rand()), 0, 6);



    $stmt = $pdo->prepare("SELECT * FROM login where username = ? and email = ?");
    $stmt->execute(array($username, $email));
    $stmt2 = $pdo->prepare("SELECT COUNT(*) as num FROM login where username = ? and email = ?");
    $stmt2->execute(array($username, $email));
    if ($fetch = $stmt2->fetch()) {
        $num_rows = $fetch['num'];
        if ($num_rows >= 1) {
            $subject = "Recuperar Password";
            $body = " O teu código de recuperação é: " . $_SESSION['chave'];
            $headers = "From: FPDD AJUDA";
            if (mail($email, $subject, $body, $headers)) {
                $_SESSION['recuperar'] = TRUE;
                $_SESSION['username'] = $username;
                header('location: recuperar.php');
            } else {
                echo "Falha no envio do email.";
            }
        } else {
            echo 'Não existe';
        }
    }
}



?>
