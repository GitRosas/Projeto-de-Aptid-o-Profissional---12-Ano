<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../CSS/Pap_style.css" type="text/css" />
<?php


if ($_SESSION['login'] == FALSE) {
  header('location: Admin/index.php');
} else {
?>
  <nav>
    <div class="wrapper">
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <div class="logo">
        <a href="./index.php"> <img src="../Fotos/FPDD_logo2.jpg" alt="Logo_header" style="height: 60%;width:50%;"></a>
      </div>

      <ul class="nav-links">

        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="./index.php">Home</a></li>

        <li>
          <a href="#" class="desktop-item">Inscrições</a>
          <input type="checkbox" id="showMega">
          <label for="showMega" class="mobile-item">Inscrições</label>
          <div class="mega-box">
            <div class="content">
              <div class="row">
                <img src="../Fotos/AmigosDancas.png" alt="">
              </div>
              <div class="row">
                <header><b>Inscrever</b></header>
                <ul class="mega-links">
                  <li><a href="./inscreverAssociacao.php">Associações</a></li>
                  <li> <a href="./inscreverEscola.php">Escola</a></li>
                  <li><a href="./inscreverJuris.php">Juris</a></li>
                </ul>
              </div>

              <div class="row">
                <header><b>Inscrever</b></header>
                <ul class="mega-links">
                  <li><a href="./inscreverProfessor.php">Professores</a></li>
                  <li><a href="./inscreverAtleta.php">Atletas</a></li>
                  <li><a class="testee" href="./gerarcodigo.php"> Autenticação Juri</a></li>
                </ul>
              </div>

              <div class="row">
                <header><b> Prova</b></header>
                <ul class="mega-links">
                  <li><a href="./inscreverProva.php">Increver Prova</a></li>
                  <li><a href="./atletaProva.php">Inscrever Atleta</a></li>
                  <li> <a href="./juriProva.php">Inscrever Juri</a></li>
                </ul>
              </div>

            </div>
          </div>
        </li>
        <li>
          <a href="#" class="desktop-item">Ver Dados</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">Ver Dados</label>
          <ul class="drop-menu">
            <li> <a href="./associacoesDistritais.php">Associações</a></li>
            <li><a href="./Escolas.php">Escolas</a></li>
            <li> <a href="./juris.php">Juris</a></li>
            <li> <a href="./professores.php">Professores</a></li>
            <li> <a href="./atleta.php">Atletas</a></li>
            <li><a href="./Provas.php">Provas</a></li>
            <li><a href="./Resultados.php">Resultados</a></li>

          </ul>
        </li>
        <li><a href="./feedback.php">Feedback</a></li>

        <div class="mobile-item">
          <li><a class="teste1" href="../logout.php">LogOut</a></li>
        </div>

      </ul>

      <li><a class="teste" href="../logout.php">LogOut</a></li>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>

  </nav>




<?php
}
?>