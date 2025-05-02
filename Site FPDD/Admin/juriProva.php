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
        <title>Juri Prova</title>
        <link rel="stylesheet" href="./CSS/PAP_style.css" type="text/css" />
        <link rel="icon" href="../Fotos/FPDD_logo.jpg" type="image/png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>

        <?php include_once('./header.php'); ?>

        <?php
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


        $stmt = $pdo->query("select * from juris;");
        $stmt2 = $pdo->query("select * from provas;");

        $options = "";
        $options2 = "";

        foreach ($stmt as $row) {
            if($row['Cod_Juri'] == 0){
                $options = $options."<option selected disabled>Selecione o Código Juri</option>";
        }else{
            $options = $options."<option value='$row[Cod_Juri]'>$row[Cod_Juri] - $row[Nome]</option>";
        }
    }

        foreach ($stmt2 as $row2) {
            if($row2['Cod_Prova'] == 0){
                $options2 = $options2."<option selected disabled>Selecione o Código da Dança</option>";
        }else{
            $options2 = $options2."<option value='$row2[Cod_Prova]'>$row2[Cod_Prova] - $row2[Nome_Prova]</option>";
        }
    }
        ?>

        <br>
        <br>
        <br>

        <main>
            <div class="content">

                <div class="contact-wrapper animated bounceInUp">
                    <div class="contact-form">
                        <h2><b>
                                <center>Inscrever Juri na Prova</center>
                            </b></h2>
                            <br>
                            <br>
                        <form name="form1" action="juriProva.php" method="POST">
                            <p>
                                <label>Código Juri</label>
                                <select name="Cod_Juri">
                                    <option selected disabled>Selecione o código do Juri</option>
                                    <?php echo $options ?>
                                </select>
                            </p>
                            <p>
                                <label>Código Prova</label>
                                <select name="Cod_Prova">
                                    <option selected disabled>Selecione o código da Prova</option>

                                    <?php echo $options2 ?>
                                </select>
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
                        
                    </div>
                </div>

            </div>
        </main>






      


        ?>


        <?php include_once('./footer.php'); ?>
        <?php


        if (isset($_POST["Registar"])) {

            $Cod_Juri = $_POST['Cod_Juri'];
            $Cod_Prova = $_POST['Cod_Prova'];


            if ($Cod_Juri == "") {
                echo "Preencha o campo do Codigo Juri ";
            } else if ($Cod_Prova == "") {
                echo "Preencha o campo do Codigo Prova";
            }

            $stmt =  $pdo->prepare("INSERT INTO juris_prova (Cod_Juri, Cod_Prova) VALUES (?, ?);");
            if ($stmt->execute(array($Cod_Juri, $Cod_Prova))) {
                echo "Registo feito com sucesso!";
            } else {
                echo "ERROR";
            }
        }


        ?>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    </body>

    </html>
<?php
}
?>