<?php

session_start();
if ($_SESSION['login'] == FALSE) {
    header('location: ../login.php');
} else {
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/PAP_style.css" type="text/css" />
    <link rel="icon" href="../Fotos/FPDD_logo.jpg" type="image/png">
    <title>Alterar</title>
</head>

<body>
<?php include_once('./header.php'); ?>
<br>
<br>
    <?php

    $Cod_Prova = $_GET['Cod_Prova'];
    $Nome = $_GET["Nome_Prova"];
    $Escalao = $_GET["Escalao"];
    $Hora = $_GET["Hora"];
   

?>



 <main>
    <div class="content">

        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h2><b>
                        <center>Alterar Prova</center>
                    </b></h2>
                <form name="form1" action="alterarProva1.php" method="POST">
                     <p>
                        <label>Nº Prova</label>
                        <input type="number" name="Cod_Prova"  value=<?php echo $Cod_Prova ; ?> readonly>
                    </p>
                    <p>
                        <label>Nome Prova</label>
                        <input type="text" name="nome1"  value=<?php echo $Nome ; ?> required>
                    </p>
                    <p>
                        <label>Escalão </label>
                        <input type="text" name="escalao1"  value=<?php echo $Escalao ; ?> required>
                    </p>
                    <p>
                        <label>Hora</label>
                        <input type="time" name="hora1"  value=<?php echo $Hora ; ?> required>
                    </p>

                    <p class="block">
                        <button>
                            <input type="submit" value="Alterar dados" name = "alteracao">
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


<br>
<br>
<?php include_once('./footer.php'); ?>


</body>

</html>    
<?php } ?>