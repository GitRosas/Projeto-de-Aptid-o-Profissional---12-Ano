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
        <title>Feedback</title>
        <link rel="stylesheet" href="./CSS/PAP_style.css" type="text/css" />
        <link rel="icon" href="../Fotos/FPDD_logo.jpg" type="image/png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>

        <?php include_once('./header.php'); ?>



        <!--  
        <a href = "index.php"> Clique aqui para voltar ao menu</a>-->
        <br>
        <br>


        <main>
            <div class="content">

                <div class="contact-wrapper animated bounceInUp">
                    <div class="contact-form">
                        <h2><b>
                                <center>FEEDBACK</center>
                            </b></h2>
                        <form name="form1" action="./feedback.php" method="POST">
                            <p>
                                <label>Nome Completo</label>
                                <input type="text" name="nome" required>
                            </p>
                            <p>
                                <label>Email</label>
                                <input type="email" name="email" required>
                            </p>
                            <p>
                                <label>Nº Telemóvel</label>
                                <input type="number" name="telemovel" required>
                            </p>
                            <p>
                                <label>Assunto</label>
                                <input type="text" name="assunto" required >
                            </p>
                            <p class="block">
                                <label>Mensagem</label>
                                <textarea name="mensagem"  rows="3"></textarea>
                            </p>
                            
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
                    </div>
                </div>
            </div>
        </main>

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
    if (isset($_POST['mensagem'])) {
        $mensagem = $_POST['mensagem'];
    }
    if (isset($_POST['Registar'])) {
        $registar = $_POST['Registar'];
    
            $subject = "Feedback: ".$assunto;
            $body = "Eu sou o Admin, $nome com o email $email e número de telemóvel $telemovel envio esta mensagem de feedback: $mensagem";
            $headers = "From: ".$nome;
            if (mail('fpdd.ajuda@gmail.com', $subject, $body, $headers)) {
                echo "Mensagem enviada com sucesso!";
            } else {
                echo "Falha no envio do email.";
            }
        }

    ?>

        <?php include_once('./footer.php'); ?>
    </body>
    




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    </html>
<?php
}
?>