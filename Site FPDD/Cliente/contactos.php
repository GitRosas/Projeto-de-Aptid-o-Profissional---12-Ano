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
            <h1><b>Contactos</b></h1>
            <h2>FPDD</h2>
        </section>
        <div class="wave" style="height: 250px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>

    <div class="bodymaps">

    <div class="contact-wrap">
		
        <div class="contact-in">
            <form>
            <div class="content1">
        <table class="rTable">
            <thead>
                <tr>
                    <th>Departamento</th>
                    <th>Contacto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b>Contacto Telefónico</b></td>
                    <td class="mail"><a href="tel: 939514545"><b>+351 939 514 545</b></td>
                </tr>

                <tr>
                    <td><b>Email geral</b></td>
                    <td class="mail"><a href="mailto: info@fpdd.pt"><b>info@fpdd.pt</b></td>
                </tr>

                <tr>
                    <td>Filiações</td>
                    <td class="mail"><a href="mailto: federado@fpdd.pt"> federado@fpdd.pt</td>
                </tr>

                <tr>
                    <td>Seleções</td>
                    <td class="mail"><a href="mailto: selecoes.nacionais@fpdd.pt"> selecoes.nacionais@fpdd.pt</td>
                </tr>

                <tr>
                    <td>Gabinete Técnico</td>
                    <td class="mail"><a href="mailto: gabtecnico@fpdd.pt"> gabtecnico@fpdd.pt</td>
                </tr>

                <tr>
                    <td>Contabilidade</td>
                    <td class="mail"><a href="mailto: contabilidade@fpdd.pt"> contabilidade@fpdd.pt</td>
                </tr>

                <tr>
                    <td>Assembleia Geral</td>
                    <td class="mail"><a href="mailto: assembleia.geral@fpdd.pt"> assembleia.geral@fpdd.pt</td>
                </tr>

                <tr>
                    <td>Conselho de Arbitragem</td>
                    <td class="mail"><a href="mailto: conselho.arbitragem@fpdd.pt"> conselho.arbitragem@fpdd.pt</td>
                </tr>

                <tr>
                    <td>Conselho Fiscal</td>
                    <td class="mail"><a href="mailto: conselho.fiscal@fpdd.pt"> conselho.fiscal@fpdd.pt</td>
                </tr>

                <tr>
                    <td>Conselho de Justiça</td>
                    <td class="mail"><a href="mailto: conselho.justica@fpdd.pt"> conselho.justica@fpdd.pt</td>
                </tr>

                <tr>
                    <td>Conselho de Disciplina</td>
                    <td class="mail"><a href="mailto: conselho.disciplina@fpdd.pt"> conselho.disciplina@fpdd.pt</td>
                </tr>

                <tr>
                    <td>Gabinete de Comunicação</td>
                    <td class="mail"><a href="mailto: comunicacao@fpdd.pt"> comunicacao@fpdd.pt</td>
                </tr>

                <tr>
                    <td>Departamento de Breaking</td>
                    <td class="mail"><a href="mailto:  breaking@fpdd.pt"> breaking@fpdd.pt</td>
                </tr>

                <tr>
                    <td>Secretaria</td>
                    <td class="mail"><a href="mailto: secretaria@fpdd.pt"> secretaria@fpdd.pt</td>
                </tr>

            </tbody>
        </table>
    </div>
            </form>
        </div>
        <div class="contact-in" style="background-color: #f2f2f2;">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3112.8856196819324!2d-9.163501585529536!3d38.72043496496245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd193365dda06943%3A0xcc70cfdc67681c27!2sR.%20Silva%20Carvalho%20225%2C%201250-250%20Lisboa%2C%20Portugal!5e0!3m2!1spt-PT!2ses!4v1651827214468!5m2!1spt-PT!2ses" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


        <br>
        <br>
    </div>
    <br>





  
    <?php include_once('./footer.php'); ?>
</body>

</html>
<?php } ?>