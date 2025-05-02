<?php

session_start();
if ($_SESSION['loginCliente'] == FALSE) {
  header('location: ../login.php');
} else {
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="icon" href="./img/FPDD_logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
</head>
<body>

<header>
        <nav>
            <a href="./index.php">Início</a>
            <a href="./provas.php">Resultados</a>
            <a href="./portfolio.php">Portfólio</a>
            <a href="./contactos.php">Contactos</a>
            <a href="./feedback.php">Feedback</a>
            <a href="./logout.php"><b>LOGOUT</b></a>
        </nav>
        <section class="textos-header">
            <h1><b>Federação Portuguesa de Dança Desportiva</b></h1>
            <h2>FPDD</h2>
        </section>
        <div class="wave" style="height: 250px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>

    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Saber Mais</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/FPDD_logo1.jpg" alt="" class="imagen-about-us">
                
                <div class="contenido-textos">
                    <br>
                    <br>
                    <h3><span>1</span>Quem Somos</h3>
                    <p> A nossa Federação (FPDD) tem 30 anos e é uma das Federações mundiais que pertece à WDSF(World Dance Sport Federation).

                    </p>
                    <h3><span>2</span>Como Funcionamos</h3>
                    <p> Num campeonato existem várias provas e para essas provas são eleitos juris para elegerem o justo vencedor daquela prova.

                    </p>
                        <h3><span>3</span>Principais Provas</h3>
                    <p> Na nossa opinião as competições mais importantes numa época são o Campeonato Nacional e a Final da Taça de Portugal
                        mas, ainda, existem outras provas que podem ser consideradas importantes.
                    </p>
                </div>
            </div>
        </section>

 <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Últimas Notícias</h2>
                <div class="servicio-cont">
                    

                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="./img/Noticia1.png" alt="Card image cap">
                            <div class="card-body">
                                <center><h5 class="card-title">PROJETO UAARE | Ministério da Educação</h5></center>
                                <center><p class="card-text">Mai 4, 2022 |  Destaque, Informações</p><p>Atletas federados</p></center>
                                <center><a href="./noticia1.php" class="btn btn-primary">Ler Notícia</a></center>
                            </div>
                        </div>
                    <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="./img/Noticia2.png" alt="Card image cap">
                            <div class="card-body">
                            <center><h5 class="card-title">REAGENDAMENTO DE PROVA</h5></center>
                                <center><p class="card-text">Abr 27, 2022 | Competições</p><p>09 de Julho de 2022 | Reagendamento de provas</p></center>
                                <center><a href="./noticia2.php" class="btn btn-primary">Ler Notícia</a></center>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="./img/Noticia3.png" alt="Card image cap">
                            <div class="card-body">
                            <center><h5 class="card-title">CAMPEONATO DO MUNDO</h5></center>
                                <center><p class="card-text">Abr 20, 2022 | Campeonato do Mundo</p><p>Ivo Pais & Marina Bernardo</p></center>
                                <p>
                                <center><a href="./noticia3.php" class="btn btn-primary">Ler Notícia</a></center>
                            </div>
                        </div>
                </div>
            </div>
        </section>






       
        <section class="clientes contenedor">
            <h2 class="titulo">Presidentes da Federação</h2>
            <div class="cards">
                <div class="card">
                    <img src="img/pessoa.png" alt="">
                    <div class="contenido-texto-card">
                        <h4>Alberto Jorge Gomes Rodrigues</h4>
                        <p>Presidente da Mesa da Assembleia Geral</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/pessoa.png" alt="">
                    <div class="contenido-texto-card">
                        <h4>Marina Paula Gomes Rodrigues</h4>
                        <p>Presidente da Direção</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="cards">
                <div class="card">
                    <img src="img/pessoa.png" alt="">
                    <div class="contenido-texto-card">
                        <h4>Duarte Paulo Vieira</h4>
                        <p>Presidente da Mesa do Conselho de Arbritagem</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/pessoa.png" alt="">
                    <div class="contenido-texto-card">
                        <h4>Ana Sofia Ferreira Cordeiro da Câmara Pestana</h4>
                        <p>Presidente do Conselho Fiscal</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="cards">
                <div class="card">
                    <img src="img/pessoa.png" alt="">
                    <div class="contenido-texto-card">
                        <h4>Dra. Alexandra Polido</h4>
                        <p>Presidente da Mesa do Conselho Disciplinar</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/pessoa.png" alt="">
                    <div class="contenido-texto-card">
                        <h4>José Latas Casebre</h4>
                        <p>Presidente do Conselho Geral</p>
                    </div>
                </div>
            </div>

        </section>


        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Portfólio</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="img/Foto.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>WDSF Juris</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/FPDD_1-3.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Seleção Nacional</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/FPDD_logo.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Logo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/FRPDD.png" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
        
        
       
    </main>
    <?php include_once('./footer.php'); ?>
</body>

</html>
<?php
}
?>