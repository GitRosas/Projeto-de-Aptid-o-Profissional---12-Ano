<!DOCTYPE html>
<html lang="pt-PT">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="CSS/styleLogin.css" type="text/css" />
  <link rel="icon" href="Fotos/FPDD_logo.jpg" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <section class="form-login">
    <form method="POST" action="login.php">
      <h5>Formulário Login</h5>
      <input class="controls1" type="text" name="username" value="" placeholder="Username" id="username" required>
      <input class="controls" type="password" name="password" value="" placeholder="Password" id="password" required>
      <a class="pass" href="perdipassword.php">Forgot Password?</a>
      <input class="buttons" type="submit" name="entrar" value="Entrar" id="entrar" name="entrar">
      <p><a href="Registar.php">Registar</a></p>
    </form>

  </section>



  <?php

  session_start();


  if (isset($_SESSION['login'])) {
    header("Location: Admin/index.php");
  }
  if (isset($_SESSION['loginCliente'])) {
    header("Location: Cliente/index.php");
  }


  if (isset($_POST['entrar'])) {

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

    $username = $_POST['username'];
    $password = $_POST['password'];
    $entrar = $_POST['entrar'];

    $password = md5($password);

    if (isset($entrar)) {
      $stmt = $pdo->prepare("SELECT * FROM login WHERE username = ? AND password = ?;");
      $stmt->execute(array($username, $password));
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $utilizador = $row['username'];
        $pass = $row['password'];
      }

      if ($username == isset($utilizador) && $password == $pass) {
        if ($username == 'admin') {
          $_SESSION['login'] = TRUE;
          header('Location: Admin/index.php');
        } else if ($username != 'admin') {
          $_SESSION['loginCliente'] = TRUE;
          header('Location: ./Cliente/index.php');
        }
      } else {



        echo '<div class="alert">';
        echo '<span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>';
        echo ' Password ou Username incorretos!';
        echo '</div>';
        
        echo'<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>';
     
        echo' <script src="./JavaScript/alerts.js"></script>';
      }
    }
  }
  ?>

</body>

</html>