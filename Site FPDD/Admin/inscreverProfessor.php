<?php

session_start();
if ($_SESSION['login'] == FALSE) {
    header('location: ../login.php');
} else {



    
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

    $stmt = $pdo->query("select * from escolas;");

    $options = "";


    foreach ($stmt as $row) {
        if($row['Cod_Escola'] == 0){
            $options = $options."<option selected disabled>Selecione o Código da Prova</option>";
    }else{
        $options = $options."<option value='$row[Cod_Escola]'>$row[Cod_Escola] - $row[Nome_escola]</option>";
    }
}
?>
    <!DOCTYPE html>
    <html lang="pt-PT">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscrever Professores</title>
        <link rel="stylesheet" href="./CSS/PAP_style.css" type="text/css" />
        <link rel="icon" href="../Fotos/FPDD_logo.jpg" type="image/png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>

    <body>

        <?php include_once('./header.php'); ?>

        <br>
        <br>
        <br>

        <main>
            <div class="content">

                <div class="contact-wrapper animated bounceInUp">
                    <div class="contact-form">
                        <h2><b>
                                <center>Inscrever Professor</center>
                            </b></h2>
                        <form name="form1" action="inscreverProfessor.php" method="POST">
                            <p>
                                <label>Nº Cédula</label>
                                <input type="number" name="Ncedula" required>
                            </p>
                           
                            <p>
                                <label>Nome</label>
                                <input type="text" name="Nome" required>
                            </p>
                            <p>
                                <label>Idade</label>
                                <input type="number" name="Idade" required>
                            </p>
                            <p>
                                <label>Escola</label>
                                <select name="Cod_Escola">
                                    <option selected disabled>Selecione o Código da Escola</option>
                                    <?php echo $options; ?>
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
        


    

    <?php include_once('./footer.php'); ?>




    <?php

    if (isset($_POST["Registar"])) {



        $Ncedula = $_POST['Ncedula'];
        $Nome = $_POST['Nome'];
        $Idade = $_POST['Idade'];
        $Cod = $_POST['Cod_Escola'];



        if ($Ncedula == "") {
            echo "Preencha o campo do Número de Cédula ";
        } else if ($Nome == "") {
            echo "Preencha o campo do Nome";
        } else if ($Idade == "") {
            echo "Preencha o campo da Idade";
        } else if ($Cod == "") {

            echo "Preencha o campo do Código Escola";
        }

        $stmt =  $pdo->prepare("INSERT INTO professores (N_cedula, Nome, Idade, Cod_Escola) VALUES (?, ?, ?, ?);");
        if ($stmt->execute(array($Ncedula, $Nome, $Idade, $Cod))) {
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