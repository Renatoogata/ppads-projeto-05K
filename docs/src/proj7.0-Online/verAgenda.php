<?php
$db = mysqli_connect("sql212.epizy.com", "epiz_21830142", "NQt4HiC24odN", "epiz_21830142_doctorshelp");

session_start();
if(!isset($_SESSION['login'])|| !isset($_SESSION["senha"])){
    header("Location: entrar.php");
    exit;
}
$usuario=$_SESSION['login'];
$senha = $_SESSION["senha"];
date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d');
$horas = date('H:i');
$sql = "SELECT nome FROM conta WHERE usuario = '$usuario' and senha = '$senha' and tipo ='2'";
$result = mysqli_query($db, $sql);
            while($row = mysqli_fetch_array($result)){
                 $nome = $row ["nome"];
}


?>

<!doctype html>
<html>
    <head>
        <title>Doctors Help</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css"  href="estilo.css" />
    </head>
    <style>
        html{
            background:url(medicina3.png) no-repeat center center fixed;
            -webkit - background-size: cover;
            -moz - background-size: cover;
            -o- background-size: cover;
            background-size: cover;
        }
    </style>
    <body>
        <nav>
            <h1 class="brand"><a>Doctors Help!</a></h1>
            <ul>
                <li><a href="indexMedico.php">Home</a></li>
                <li><a><?php echo $_SESSION['login']; ?></a></li>
            </ul>
            <div style="clear : both"></div>
        </nav>
        
        <div id="conteudo">
            <div class="menu">

            <ul>
                <a>Bem vindo <?php echo $_SESSION['login']; ?> !</a>
                <br/>
                <br/>
                <li><a href="verAgenda.php">Ver Consultas do Dia</a></li><br/>
                <li><a href="verHistorico.php">Ver Historico de Consultas</a></li><br/>
                <li><a href="logout.php">Sair</a></li>
            </ul>
  
            </div>
            <div class="texto">
                <fieldset>
                    <legend>Consulta do dia <?php echo $date; ?></legend>
                
<?php
    $sql = "SELECT nomePaciente, horario, planoPaciente, data FROM consulta WHERE nomeMedico='$nome' and data='$date'";
    $result = mysqli_query($db, $sql);
    while($row = mysqli_fetch_array($result)){
        $nome = $row ["nomePaciente"];
        $horario = $row ["horario"];
        $planoPaciente = $row ["planoPaciente"];
        $data = $row["data"];
?>
                    <label>Nome Paciente: </label><?php echo $nome; ?><br/>
                    <label>Plano Paciente: </label><?php echo $planoPaciente; ?><br/>
                    <label>Horario: </label><?php echo $horario; ?><br/>
                    <label>Data: </label><?php echo $data; ?><br/><br/>
<?php
    }
?>
             
                </fieldset>
            </div>
        </div>
    </body>
</html>
