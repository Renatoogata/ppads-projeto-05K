<?php
$db = mysqli_connect("sql212.epizy.com", "epiz_21830142", "NQt4HiC24odN", "epiz_21830142_doctorshelp");

session_start();
if(!isset($_SESSION['login'])|| !isset($_SESSION["senha"])){
    header("Location: entrar.php");
    exit;
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
                <li><a href="indexAdministrador.php">Home</a></li>
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
                <li><a href="listaAdministrador.php">Ver Lista de Cadastros</a></li><br />
                <li><a href="logout.php">Sair</a></li>
            </ul>
  
            </div>
            <div class="texto">
                <fieldset>
                    <legend>Pacientes</legend>
                <a>
                <?php
                    $sql = "SELECT nome,plano FROM conta WHERE tipo ='1'";
                    $result = mysqli_query($db, $sql);
                    while($row = mysqli_fetch_array($result)){
                        echo "<div>";
                        echo "<h5> NOME: " . $row['nome']. " ---- Plano de Saúde: " . $row['plano'] . "</h5>";
                        echo "</div>";
                    }
                    
                ?>
                </a>
                </fieldset>
                
                <fieldset>
                    <legend>Medicos</legend>
                <a>
                <?php
                    $sql = "SELECT nome, especializacao FROM conta WHERE tipo ='2'";
                    $result = mysqli_query($db, $sql);
                    while($row = mysqli_fetch_array($result)){
                        echo "<div>";
                        echo "<h5> NOME: " . $row['nome'] .  " ---- Especializacão: " . $row['especializacao'] . "</h5>";
                        echo "</div>";
                    }
                    
                ?>
                </a>
                </fieldset>
                
                
            </div>
        </div>
    </body>
</html>