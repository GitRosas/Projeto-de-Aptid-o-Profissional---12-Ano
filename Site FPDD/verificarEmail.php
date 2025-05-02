<?php
session_start();
if ($_SESSION['verificar'] = FALSE) {
    header('location: Login.php');
} else {
?>

    <!DOCTYPE html>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Password</title>
        <link rel="stylesheet" href="CSS/styleLogin.css" type="text/css" />
        <link rel="icon" href="Fotos/FPDD_logo.jpg" type="image/png">
    </head>

    <body>
        <section class="form-login-perdipassword">
            <form name="form1" action="verificarEmail.php" method="POST">
                <h5>Confirmação do Email</h5>
                <input class="controls1" type="number" name="confirmacao1" placeholder="Código de Confirmação" id="confirmacao1" required>
                <input class="buttons" type="submit" name="confirmar1" value="Confirmar" id="confirmar1" required>

            </form>
        </section>
    </body>

    </html>

<?php

    if (isset($_POST['confirmacao1'])) {
        if (isset($_POST['confirmar1'])) {
            $confirmacao1 = $_POST['confirmacao1'];
            $confirmar1 = $_POST['confirmar1'];





            if ($confirmacao1 == '') {
                echo 'Espaço vazio';
            }
            if ($confirmacao1 == $_SESSION['key']) {
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


                $ecript = md5($_SESSION['password1']);
                $stmt =  $pdo->prepare("INSERT INTO login (username, email, password) VALUES (?, ?, ?);");
                if ($stmt->execute(array($_SESSION['username1'], $_SESSION['email1'], $ecript))) {
                    echo "Registo feito com sucesso!";
                    header('location: Login.php');
                } else {
                    echo "ERROR";
                }
            } else {
                echo 'O Código de confirmação é diferente.';
            }
        }
    }
}

?>