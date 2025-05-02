<?php

session_start();
if ($_SESSION['loginCliente'] == FALSE) {
  header('location: ../login.php');
} else {
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <link rel="icon" href="./img/FPDD_logo.jpg" type="image/x-icon">
    <title>Contactos</title>
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
            <h1><b>Notícias</b></h1>
            <h2>FPDD</h2>
        </section>
        <div class="wave" style="height: 250px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>

    <h2 class="titulo">Projeto UAARE</h2>

    <img src="./img/Noticia3.png" class="imgNoticia">

<br>
<br>


<span class="noticia">O par Ivo Pais & Marina Bernardo, participou no passado dia 16 de Abril de 2022, no WDSF World Championship Ten Dance Senior I, em Cambrils, Espanha, em representação de Portugal.

Este par integra a Selecção Nacional e foi por isso o representante de Portugal nesta competição.
Ivo Pais & Marina Bernardo conseguiram conquistar o 11º lugar na categoria de 10 Danças.

A FPDD agradece e congratula a participação do par Ivo & Marina neste importante evento de Dança Desportiva.

Parabéns aos nossos atletas!</span>

<br>
<div class="link">

<p> Notícia Retirada de <a href="https://fpdd.pt/novo/2022/04/20/5581/">https://fpdd.pt/novo/2022/04/20/5581/</a></p>   

</div>


    <?php include_once('./footer.php'); ?>
</body>

</html>
<?php } ?>