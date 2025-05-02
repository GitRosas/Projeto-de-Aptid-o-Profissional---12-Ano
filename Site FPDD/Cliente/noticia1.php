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

    <img src="./img/Noticia1.png" class="imgNoticia">

<br>
<br>


<span class="noticia">O projeto de Unidades de Apoio ao Alto Rendimento na Escola, UAARE existe desde 2016 com a finalidade de facilitar a conciliação entre educação e a prática desportiva federada. Este projeto tem vindo a crescer e está sob a tutela do Ministério de Educação.

Os atletas (até ao ensino secundário) da Federação Portuguesa de Dança Desportiva podem, preenchendo os requisitos, também beneficiar de vários tipos de apoio para que seja mais fácil conciliar a sua vida académica e a prática da dança. Algumas das medidas de apoio possíveis são a justificação de faltas, escolha de estabelecimento de ensino, preferência de horário escolar, ensino à distância, adiamento de provas, entre outras.

Os atletas da FPDD, que se qualifiquem e desejem candidatar-se a alguma medida de apoio deste projeto devem contatar o seu Clube/Escola ou Associação para disponibilização de formulário e mais informação.

Informações detalhadas sobre o projeto UAARE podem ser consultadas em <a href="https://uaare.dge.min-educ.pt/pt">https://uaare.dge.min-educ.pt/pt</a></span>

<br>
<div class="link">

<p> Notícia Retirada de <a href="https://fpdd.pt/novo/2022/05/04/projeto-uaare/">https://fpdd.pt/novo/2022/05/04/projeto-uaare/</a></p>   

</div>


    <?php include_once('./footer.php'); ?>
</body>

</html>
<?php } ?>