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
        <title>Associações Distritais</title>
        <link rel="stylesheet" href="./CSS/PAP_style.css" type="text/css" />
        <link rel="icon" href="../Fotos/FPDD_logo.jpg" type="image/png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>

        <?php include_once('./header.php'); ?>
        <br>
        
        <center><h1><b>Associações Distritais</b></h1></center>
        <br>
        <br>
        
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


        $stmt = $pdo->query("select * from associacao_distrital;");
        $stmt2 = $pdo->query("select count(*) as num from associacao_distrital;");

        if ($fetch = $stmt2->fetch()) {
            $num_rows = $fetch['num'];
            if ($num_rows > 0) {
                echo '<div class="table-responsive">';
                echo ' <table class="table table-striped"> ';
                echo '<thead>';
                echo '<tr>';
                echo '<th scope="col">Nº Associação</th>';
                echo '<th scope="col">Nome Associação</th>';
                echo '<th scope="col">Local </th>';
                echo '<th scope="col">Email</th>';
                echo '<th scope="col">Eliminar</th>';
                echo '<th scope="col">Alterar Dados</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                foreach ($stmt as $row) {
                    echo '<tr>';
                    echo '<th scope="row">' . $row['Cod_Associacao'] . '</th>';
                    echo '<td>' . $row['Nome'] . '</td>';
                    echo '<td>' . $row['Local'] . '</td>';
                    echo '<td>' . $row['Email'] . '</td>';
                    echo "<td> <a href='./eliminarAssociacao.php?Cod_Associacao=$row[Cod_Associacao]'>Eliminar</a> * </td>";
                    echo "<td> <a href='./alterarAssociacao.php?Cod_Associacao=$row[Cod_Associacao]&Nome=$row[Nome]&Local=$row[Local]&Email=$row[Email]'>Alterar</a> </td>";
                    echo '</tr>';
                }
                echo '</tbody>';
                echo '</table>';
                echo '</div>';
            } else {
                echo "Nenhum registro correspondente à sua consulta foi encontrado.";
            }
        } else {
            echo "ERRO: Não foi possível executar. ";
        }



        ?>
       *Para eliminar uma Associação Distrital não poederá existir nenhuma Escola associada. 
        <?php include_once('./footer.php'); ?>
   
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
    </body>

    </html>
<?php
}

?>