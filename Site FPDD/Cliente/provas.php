<?php

session_start();
if ($_SESSION['loginCliente'] == FALSE) {
    header('location: ../login.php');
} else {


?>
    <!DOCTYPE html>
    <html lang="pt-PT">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Provas</title>
        <link rel="stylesheet" href="./css/estilos.css">
        <link rel="icon" href="../Fotos/FPDD_logo.jpg" type="image/png">
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
                <h1><b>Provas</b></h1>
                <h2>FPDD</h2>
            </section>
            <div class="wave" style="height: 250px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
                </svg></div>
        </header>
        <h2 class="titulo">Todas as Provas</h2>




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

        $stmt = $pdo->query("select * from provas ORDER BY Hora;");
        $stmt2 = $pdo->query("select count(*) as num from provas;");

        if ($fetch = $stmt2->fetch()) {
            $num_rows = $fetch['num'];
            if ($num_rows > 0) {
                echo '<div class="tablepad">';
                echo '<table class="table">';
                echo '<thead>';
                echo '<tr>';
                echo '<th>Nome da Prova</th>';
                echo '<th>Hora</th>';
                echo '</tr>';
                echo '</thead>';


                foreach ($stmt as $row) {

                    echo '<tbody>';
                    echo '<tr>';
                    echo " <td data-label='Nome da Prova'><a href='./resultados.php?id=$row[Cod_Prova]'>" . $row['Nome_Prova'] . "</a></td>";
                    echo ' <td data-label="Hora">' . $row['Hora'] . '</td>';
                    echo '</tr>';
                    echo '</tbody>';
                }
                echo ' </table>';
                echo '</div>';
            } else {
                echo "Nenhum registro correspondente à sua consulta foi encontrado.";
            }
        } else {
            echo "ERRO: Não foi possível executar. ";
        }




        ?>


        <br>
        <br>
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