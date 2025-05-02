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
        <title>Home</title>
        <link rel="stylesheet" href="./CSS/PAP_style" type="text/css" />
        <link rel="icon" href="../Fotos/FPDD_logo.jpg" type="image/png">

    </head>

    <body>

        <?php include_once('./header.php'); ?>

        <br>
        <div class="titulo">
            <h1><b>
                    <center> Federação Portuguesa de Dança Desportiva </center>
                </b></h1>
        </div>
        <br>
        <center>
            <div id="slider">
                <ul id="slideWrap">

                    <li><img src="../Fotos/FRPDD.png" alt=""></li>
                    <li><img src="../Fotos/SN21-scaled.jpg" alt=""></li>
                    <li><img src="../Fotos/FPDD_1-3.jpg" alt=""></li>
                    <li><img src="../Fotos/Foto.jpg" alt=""></li>
                    <li><img src="https://1.bp.blogspot.com/-TNT1a5M1v3o/YPCQrWmn_fI/AAAAAAAACXk/p8nx_OB2R6Aw172WIv5vuB8jF-qWDsHlwCNcBGAsYHQ/s16000/5.jpg" alt=""></li>

                </ul>
                <a id="prev" href="#">&#8810;</a>
                <a id="next" href="#">&#8811;</a>
            </div>
        </center>


        <script type="text/javascript" src="../JavaScript/script.js"></script>


        <br>


        <?php include_once('./footer.php'); ?>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        
    </body>

    </html>
<?php
}
?>