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
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="./img/FPDD_logo.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Portfólio</title>
</head>
<body>
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
            <h1><b>PORTFÓLIO</b></h1>
            <h2>FPDD</h2>
        </section>
        <div class="wave" style="height: 250px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>

    <!-- Header -->
    <div class="header">
        <h1>Responsive Image Grid</h1>
    </div>

    <!-- Photo Grid -->
    <div class="row">

        <div class="column">
            <div class="img-hover-zoom">
                <img src="img/BaixoMinho.jpg" style="width:100%" alt="">
            </div>
            <div class="img-hover-zoom">
                <img src="img/camera-1.jpg" style="width:100%" alt="">
            </div>
            <div class="img-hover-zoom">
                <img src="img/camera-2.jpg" style="width:100%" alt="">
            </div>
        </div>

        <div class="column">
            <div class="img-hover-zoom">
                <img src="img/Foto.jpg" style="width:100%" alt="">
            </div>
            <div class="img-hover-zoom">
                <img src="img/Fotografia.png" style="width:100%" alt="">
            </div>
            <div class="img-hover-zoom">
                <img src="img/FPDD_1-3.jpg" style="width:100%" alt="">
            </div>
        </div>

        <div class="column">
            <div class="img-hover-zoom">
                <img src="img/FPDD_1-4.jpg" style="width:100%" alt="">
            </div>
            <div class="img-hover-zoom">
                <img src="img/FPDD_logo.jpg" style="width:100%" alt="">
            </div>
            <div class="img-hover-zoom">
                <img src="img/FPDD_logo1.jpg" style="width:100%" alt="">
            </div>
        </div>

        <div class="column">
            <div class="img-hover-zoom">
                <img src="img/FRPDD.png" style="width:100%" alt="">
            </div>
            <div class="img-hover-zoom">
                <img src="img/headphone-1.jpg" style="width:100%" alt="">
            </div>
            <div class="img-hover-zoom">
                <img src="img/SN21-scaled.jpg" style="width:100%" alt="">
            </div>
        </div>

    </div>


<br>
<script type="text/javascript" src="./javascript/script.js"></script>

<br>

<?php include_once('./footer.php'); ?>
</body>
</html>
<?php
}
?>