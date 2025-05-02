<?php

session_start();
if ($_SESSION['login'] == FALSE) {
    header('location: ../login.php');
} else {
?>
    <!DOCTYPE html>
    <html lang="pt-PT">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Autenticação Juri</title>
        <link rel="stylesheet" href="./CSS/PAP_style.css" type="text/css" />
        <link rel="icon" href="../Fotos/FPDD_logo.jpg" type="image/png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>

        <?php include_once('./header.php'); ?>
        <br>
        <br>
        <br>


        <main>
            <div class="content">

                <div class="contact-wrapper animated bounceInUp">
                    <div class="contact-form">
                        <h2><b>
                                <center>Gerar Autenticação para Juris</center>
                            </b></h2>
                        <br>
                        <br>
                        <form name="form1" action="gerarcodigo.php" method="POST">
                            <p>
                                <label>Username</label>
                                <input type="text" name="username" required>
                            </p>
                            <p>
                                <label>Password</label>
                                <input type="password" name="password" required>
                            </p>

                            <br>
                            <p class="block">
                                <button>
                                    <input type="submit" value="Registar" name="Registar">
                                </button>


                            </p>
                        </form>
                    </div>
                    <div class="contact-info">

                        <!-- <img class="Imagem" src="Fotos/descarregar.png" alt="Imagem"> -->

                        <h3><b>
                                <center>Precisa de Ajuda?</center>
                            </b></h3>
                        <br>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i><a href="https://www.google.com/maps/place/R.+Silva+Carvalho+225,+1250-250+Lisboa,+Portugal/@40.2085,-3.713,6z/data=!4m5!3m4!1s0xd193365dda06943:0xcc70cfdc67681c27!8m2!3d38.7204308!4d-9.1613129" style="text-decoration: none; color: white;"> Rua Silva Carvalho 225, 1250-250 Lisboa </a></li>
                            <li><i class="fas fa-phone"></i><a href="tel: 211335140" style="text-decoration: none; color: white;"> (+351) 211 335 140</a></li>
                            <li><i class="fas fa-envelope-open-text"></i> <a href="mailto: info@fpdd.pt" style="text-decoration: none; color: white;"> info@fpdd.pt </a></li>
                        </ul>
                        <br>
                        <p> Utilize esta ferramenta somente se for nessessária. </p>
                        <p> No final de cada Competição o administrador deve, por motivos de segurança, clicar no botão abaixo.</p>
                        <form name="form2" action="gerarcodigo.php" method="POST">
                            <br>
                            <div class="contact-form">

                                <input type="submit" value="Eliminar Credenciais" name="Eliminar">

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </main>



        <?php
        if (isset($_POST['Registar'])) {

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

            $username = $_POST['username'];
            $password = $_POST['password'];
            $Registar = $_POST['Registar'];

            $password = md5($password);

            if (isset($Registar)) {
                $stmt = $pdo->prepare("SELECT * FROM login WHERE username = ? AND password = ?;");
                $stmt->execute(array($username, $password));
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $utilizador = $row['username'];
                    $pass = $row['password'];
                }

                if ($username == isset($utilizador) && $password == $pass && $_SESSION['login'] = TRUE) {


                    $usernameChave = substr(uniqid(rand()), 0, 6);
                    //$usernameChave = md5($usernameChave);
                    $passwordChave = substr(uniqid(rand()), 0, 6);
                    //$passwordChave = md5($passwordChave);
                    $stmt =  $pdo->prepare("INSERT INTO login_juri (username, password) VALUES (?, ?);");
                    if ($stmt->execute(array($usernameChave, $passwordChave))) {
                        echo "Registo feito com sucesso!";
                    } else {
                        echo "ERROR";
                    }


                    $stmt1 = $pdo->prepare("SELECT email FROM login where username = ?");
                    $stmt1->execute(array($username));
                    while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                        $EMAIL = $row1['email'];
                    }
                    $stmt2 = $pdo->prepare("SELECT COUNT(*) as num FROM login where username = ? and email = ?");
                    $stmt2->execute(array($username, $EMAIL));
                    if ($fetch = $stmt2->fetch()) {
                        $num_rows = $fetch['num'];
                        if ($num_rows >= 1) {
                            $subject = "Credenciais de Acesso";
                            $body = " Username: " . $usernameChave . "     Password: " . $passwordChave;
                            $headers = "From: FPDD AJUDA";
                            if (mail($EMAIL, $subject, $body, $headers)) {
                                echo "Credenciais enviadas com sucesso";
                            } else {
                                echo "Falha no envio do email.";
                            }
                        } else {
                            echo 'Não existe';
                        }
                    }
                } else {

                    echo "Credenciais erradas, a sua sessão expirará por motivos de segurança se tentar mudar de página.";
                    session_destroy();
                }
            }
        }
        ?>



        <?php
        if (isset($_POST['Eliminar'])) {
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

            $stmt3 = $pdo->prepare("TRUNCATE TABLE login_juri;");
            $stmt3->execute();
            echo "Todas as credenciais eliminadas.";
        }
        ?>
        <br>

        <?php include_once('./footer.php'); ?>
    <?php
}
    ?>