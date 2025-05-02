<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<?php
session_start();
if ($_SESSION['pass'] == FALSE) {
    header('location: recuperar.php');
} else {
if ($_SESSION['recuperar'] == FALSE) {
    header('location: perdipassword.php');
} else {

        $username = $_SESSION['username'];
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

        if (isset($_POST['password'])) {
            $password = $_POST['password'];
        }
        if (isset($_POST['password_confirm'])) {
            $password_confirm = $_POST['password_confirm'];
        }
        if (isset($_POST['Registar'])) {
            $registar = $_POST['Registar'];
        }

        if ($password == "") {
            echo "Preencha o campo da password ";
        } else if ($password_confirm == "") {
            echo "Preencha o campo da Confirmação de Password";
        }
        if ($password_confirm == $password) {

            $password_confirm = md5($password_confirm);

            $stmt = $pdo->prepare("UPDATE login SET password = ? WHERE username = ?;");
            $stmt->execute(array($password_confirm, $username));
            header('location: login.php');
        } else {
            echo "Passwords não coincidem";
        }
    }
}

?>
