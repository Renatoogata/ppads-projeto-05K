<?php
$db = mysqli_connect("sql212.epizy.com", "epiz_21830142", "NQt4HiC24odN", "epiz_21830142_doctorshelp");
session_start();
if(!isset($_SESSION['login'])|| !isset($_SESSION["senha"])){
    header("Location: entrar.php");
    exit;
}
$usuario=$_SESSION['login'];
$senha = $_SESSION["senha"];

$sql = "SELECT cep, plano FROM conta WHERE usuario = '$usuario' and senha = '$senha' and tipo ='1'";
$result = mysqli_query($db, $sql);
            while($row = mysqli_fetch_array($result)){
                 $cep = $row ["cep"];
                 $plano = $row ["plano"];
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
                <li><a href="indexPaciente.php">Home</a></li>
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
                <li><a href="procuraMedico.php">Marcar Consulta</a></li><br/>
                <li><a href="verConsulta.php">Ver Consulta do Dia</a></li><br/>
                <li><a href="historicoConsulta.php">Historico de Consultas</a></li><br/>
                <li><a href="logout.php">Sair</a></li>
            </ul>
  
            </div>
            
            <div class="texto">
                
        <fieldset>
            <legend>Procura por médico</legend>
            <div>
                <form method="post" action="marcarConsulta.php" enctype="multipart/form-data" >
                
                    
                    <div>
                        <label>CEP: </label>
                        <?php echo $cep; ?>
                        <br/>
                        <input type="hidden" name="Cep" value="<?php echo $cep;?>"/>
                    </div><br/>
                    
                    <div>
                        <label>Plano: </label>
                        <?php echo $plano; ?>
                        <br/>
                        <input type="hidden" name="plano" value="<?php echo $plano;?>"/>
                    </div><br/>
                    
                    <div>
                        <label>Tipo de Médico</label><br/>
                        <select name="especializacao" size="3">
                            <option value="cardiologista">Cardiologista</option>
                            <option value="clinico">Clinico Geral</option>
                            <option value="dermatologista">Dermatologista</option>
                            <option value="pediatra">Pediatra</option>
                            <option value="psicologia">Psicologia</option>
                            <option value="pneumologia">Pneumologia</option>
                        </select>
                    </div><br/>
                    

                    
                    <div>
                        <input type="submit" name="enviar" value="Buscar">
                    </div>
                </form>
            </div>
        </fieldset>
               
            </div>
        </div>
    </body>
</html>