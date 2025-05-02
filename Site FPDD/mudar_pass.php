<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<?php 
session_start();
if ($_SESSION['pass'] == FALSE) {
    header('location: recuperar.php');
} else {
if ($_SESSION['recuperar'] == FALSE) {
    header('location: perdipassword.php');
} else {

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Password</title>
    <link rel="stylesheet" href="CSS/styleLogin.css" type="text/css" />
    <link rel="icon" href="Fotos/FPDD_logo.jpg" type="image/png">
</head>

<body>
    <section class="form-login-Perdi">
        <form method="POST" action="mudar_pass2.php">
            <h5>Recuperar Password</h5>
            <input class="controls1" type="password" name="password" placeholder="Password Nova" id="password" required>
            <input class="controls" type="password" name="password_confirm" placeholder="Confirmar Password" id="password_confirm" required>
            <input class="buttons" type="submit" name="Registar" value="Mudar Password" id="Registar" required>
    </section>
    </form>
</body>

</html>
<?php
}
}

?>