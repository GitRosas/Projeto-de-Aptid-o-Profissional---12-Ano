<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar</title>
    <link rel="stylesheet" href="CSS/styleLogin.css" type="text/css" />
    <link rel="icon" href="Fotos/FPDD_logo.jpg" type="image/png">

</head>

<body>


    <section class="form-login-registar">
        <form method="POST" action="Registar.php">
            <h5>Formulário Registar</h5>
            <input class="controls1" type="text" name="username1" value="" placeholder="Username" id="username1"   required>
            <input class="controls" type="email" name="email1" value="" placeholder="Email" id="email1" required>
            <input class="controls" type="password" name="password1" value="" placeholder="Password" id="password1"   required>
            <input class="controls" type="password" name="verifica_password1" value="" placeholder="Verificar Password" id="verifica_password1" required>
            <input class="buttons" type="submit" name="Registar" value="Registar" id="Registar" name="Registar" required>
            <p><a href="./login.php">Voltar ao Login</a></p>
        </form>
    </section>
    </div>

    <?php
    session_start();

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


    if (isset($_POST["Registar"])) {
        $username1 = $_POST['username1'];
        $email1 = $_POST['email1'];
        $password1 = $_POST['password1'];
        $verifica_password1 = $_POST['verifica_password1'];

        if ($username1 == "") {
            echo "Preencha o campo do username ";
        } else if ($email1 == "") {
            echo "Preencha o campo do email";
        } else if ($password1 == "") {
            echo "Preencha o campo da password";
        } else if ($verifica_password1 == "") {
            echo "Preencha o campo da vericação da password";
        }



        $stmt4 = $pdo->prepare("SELECT COUNT(*) as num FROM login WHERE email = ?;");
        $stmt4->execute([$email1]);


        if ($verifica_password1 == $password1) {
            if ($stmt = $pdo->prepare("SELECT * FROM login WHERE email = ?;")) {
                $stmt->execute([$email1]);
                if ($fetch = $stmt4->fetch()) {
                    $num_rows = $fetch['num'];
                    if ($num_rows >= 1) {
                        echo "Email indisponível!";
                    } else {

                        if ($stmt2 = $pdo->prepare("SELECT * FROM login WHERE username = ?")) {
                            $stmt2->execute([$username1]);
                            $stmt5 = $pdo->prepare("SELECT COUNT(*) as num FROM login WHERE username = ?");
                            $stmt5->execute([$username1]);
                            if ($fetch = $stmt5->fetch()) {
                                $num_rows = $fetch['num'];
                                if ($num_rows >= 1) {
                                    echo "Username indisponível!";
                                } else {

                                    $_SESSION['key'] = substr(uniqid(rand()), 0, 6);
                                    

                                    $subject = "Verificar Email";
                                    $body = " O teu código de verificação é: " . $_SESSION['key'];
                                    $headers = "From: FPDD AJUDA";
                                    if (mail($email1, $subject, $body, $headers)) {

                                        $_SESSION['verificar'] = TRUE;
                                        $_SESSION['username1'] = $username1;
                                        $_SESSION['email1'] = $email1;
                                        $_SESSION['password1'] = $password1;
                                        header('location: verificarEmail.php');
                                    } else {
                                        echo "Falha no envio do email.";
                                    }
                                }
                            }
                        }
                    }
                }
            }
        } else {
            echo "As Passwords Diferem";
        }
    }






    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>