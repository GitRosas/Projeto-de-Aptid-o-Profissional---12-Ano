<?php

session_start();
if ($_SESSION['loginCliente'] == FALSE) {
  header('location: ../login.php');
} else {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="icon" href="./img/FPDD_logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body class="bodyfeed">
<header>
        <nav>
            <a href="./index.php">Início</a>
            <a href="./provas.php">Resultados</a>
            <a href="./portfolio.php">Portfólio</a>
            <a href="./contactos.php">Contactos</a>
            <a href="./feedback.php">Feedback</a>
            <a href="./logout.php">LogOut</a>
        </nav>
        <section class="textos-header">
            <h1><b>FEEDBACK</b></h1>
            <h2>FPDD</h2>
        </section>
        <div class="wave" style="height: 250px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <center>
    <div class="container">
        <div class="heading"><b>Feedback</b></div>
        
        <form action="feedback.php" method="POST">
            <div class="card-details">
                <div class="card-box">
                    <span class="details"> Nome Completo </span>
                    <input type="nome" name="nome" id="nome" placeholder="Nome Completo" required>
                </div>
                <div class="card-box">
                    <span class="details"> Email </span>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="card-box">
                    <span class="details"> Nº Telemóvel </span>
                    <input type="number" name="telemovel" id="telemovel" placeholder="Nº Telemóvel" required>
                </div>
                <div class="card-box">
                    <span class="details"> Assunto </span>
                    <input type="text" name="assunto" id="assunto" placeholder="Assunto" required>
                </div>
                <div class="card-box">
                    <span class="details-textarea"> Mensagem </span>
                    <textarea name="mensagem" rows="3"></textarea>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Registar" name="Registar">

            </div>
        </form>
    </div>
    </center>

    <?php
        if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if (isset($_POST['telemovel'])) {
        $telemovel = $_POST['telemovel'];
    }
    if (isset($_POST['assunto'])) {
        $assunto = $_POST['assunto'];
    }

    if (isset($_POST['Registar'])) {
        $registar = $_POST['Registar'];
    
            $subject = "Feedback: ".$assunto;
            $body = "Eu sou o Cliente, $nome com o email $email e número de telemóvel $telemovel envio esta mensagem de feedback: $assunto";
            $headers = "From: ".$nome;
            if (mail('fpdd.ajuda@gmail.com', $subject, $body, $headers)) {
                echo "Mensagem enviada com sucesso!";
            } else {
                echo "Falha no envio do email.";
            }
        }

    ?>
<br>
<br>
    <?php include_once('./footer.php'); ?>

</body>

</html>
<?php 
}
 ?>