<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<?php 
session_start();
if ($_SESSION['recuperar'] == FALSE) {
    header('location: perdipassword.php');
} else {

if(isset($_POST['confirmacao'])){$confirmacao = $_POST['confirmacao'];}
if(isset($_POST['confirmar'])){$confirmar = $_POST['confirmar'];}

if($confirmacao==$_SESSION['chave']){
    $_SESSION['pass'] = TRUE;
    header('location: mudar_pass.php');

}else{
    echo 'O Código de confirmação é diferente.';
}
}
?>