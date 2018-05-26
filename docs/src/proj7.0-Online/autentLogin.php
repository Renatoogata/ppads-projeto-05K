<?php

$db = mysqli_connect("sql212.epizy.com", "epiz_21830142", "NQt4HiC24odN", "epiz_21830142_doctorshelp");
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

<html>
    <head>
        <title>Autenticador de Usuario</title>
        <script type="text/javascript">
            function loginsuccessfullyPaciente(){
                setTimeout("window.location='indexPaciente.php'", 5000);
            } 
            function loginsuccessfullyMedico(){
                setTimeout("window.location='indexMedico.php'", 5000);
            } 
            function loginsuccessfullyAdministrador(){
                setTimeout("window.location='indexAdministrador.php'", 5000);
            }     
            function loginfailed(){
                setTimeout("window.location='entrar.php'", 5000);
            }      
        </script>
    </head>
</html>

<?php
$login = $_POST['login'];
$senha = $_POST['senha'];
$tipo = $_POST['tipo'];

if($tipo==1){
$sql = "SELECT * FROM conta WHERE usuario = '$login' and senha = '$senha' and tipo ='$tipo'";
$result = mysqli_query($db, $sql);

if(mysqli_num_rows($result)>0){
    session_start();
    $_SESSION['login']=$_POST['login'];
    $_SESSION['senha']=$_POST['senha'];
    echo "<center>Logado com sucesso!!!!!! espera para ser reindirecionado.</center>";
    echo "<script>loginsuccessfullyPaciente()</script>"; 
}
else{
    echo"<center>Nome de Usuario ou  senha incorretos!! Aguarde um estante para tentar novamente</center>";
    echo"<script>loginfailed()</script>";
}
}

if($tipo==2){
    $sql = "SELECT * FROM conta WHERE usuario = '$login' and senha = '$senha' and tipo ='$tipo'";
    $result = mysqli_query($db, $sql);

if(mysqli_num_rows($result)>0){
    session_start();
    $_SESSION['login']=$_POST['login'];
    $_SESSION['senha']=$_POST['senha'];
    echo "<center>Logado com sucesso!!!!!! espera para ser reindirecionado.</center>";
    echo "<script>loginsuccessfullyMedico()</script>"; 
}
else{
    echo"<center>Nome de Usuario ou  senha incorretos!! Aguarde um estante para tentar novamente</center>";
    echo"<script>loginfailed()</script>";
}
}

if($tipo==3){
    $sql = "SELECT * FROM conta WHERE usuario = '$login' and senha = '$senha' and tipo ='$tipo'";
    $result = mysqli_query($db, $sql);

if(mysqli_num_rows($result)>0){
    session_start();
    $_SESSION['login']=$_POST['login'];
    $_SESSION['senha']=$_POST['senha'];
    echo "<center>Logado com sucesso!!!!!! espera para ser reindirecionado.</center>";
    echo "<script>loginsuccessfullyAdministrador()</script>"; 
}
else{
    echo"<center>Nome de Usuario ou  senha incorretos!! Aguarde um estante para tentar novamente</center>";
    echo"<script>loginfailed()</script>";
}
}

?>
